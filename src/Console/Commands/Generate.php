<?php

namespace Brazanation\States\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Generate extends Command
{
    /**
     * @var Generate\ReaderDataset
     */
    private $stateReader;

    /**
     * @var Generate\ClassFileWriter
     */
    private $writer;

    public function __construct()
    {
        parent::__construct('states:generate');
        $this->stateReader = new Generate\ReaderDataset(null);
        $this->writer = new Generate\ClassFileWriter();
    }

    protected function configure()
    {
        $this->addArgument(
            new InputArgument(
                'path',
                InputArgument::REQUIRED,
                'Directory to create states classes',
                __DIR__ . './src'
            )
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->stateReader->read();

        $output->writeln('Start writing files.');

        foreach ($this->stateReader as $state) {
            $output->write($state->getClassName() . ' ... ');

            $this->writer->write($input->getArgument('path'), $state);

            $output->writeln('done!');
        }
    }
}
