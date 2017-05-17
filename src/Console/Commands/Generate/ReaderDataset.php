<?php

namespace Brazanation\States\Console\Commands\Generate;

class ReaderDataset implements \Iterator
{
    const DATASETBR_STATE_FILE = 'https://raw.githubusercontent.com/datasets-br/state-codes/master/data/br-state-codes.csv';

    private $states;

    private $separator = ',';
    private $enclosure = '"';
    private $escape = '\\';
    /**
     * @var string
     */
    private $filepath;

    public function __construct($filepath)
    {
        $this->states = new \ArrayIterator();

        if (empty($filepath)) {
            $filepath = self::DATASETBR_STATE_FILE;
        }

        $this->filepath = $filepath;
    }

    public function read()
    {
        $resource = fopen($this->filepath, 'r');
        $states = [];
        $skipFirst = true;

        while (!feof($resource)) {
            $state = $this->readLine($resource);
            if ($state->isState() && !$skipFirst) {
                $states[] = $state;
            }
            $skipFirst = false;
        }

        $this->states = new \ArrayIterator($states);
        $this->rewind();
    }

    /**
     * @param $resource
     *
     * @return GenericState
     */
    private function readLine($resource)
    {
        $line = fgetcsv($resource, null, $this->separator, $this->enclosure, $this->escape);

        return new GenericState($line[4], $line[1], $line[0], $line[9]);
    }

    public function current()
    {
        return $this->states->current();
    }

    public function next()
    {
        $this->states->next();
    }

    public function key()
    {
        return $this->states->key();
    }

    public function valid()
    {
        return $this->states->valid();
    }

    public function rewind()
    {
        $this->states->rewind();
    }
}
