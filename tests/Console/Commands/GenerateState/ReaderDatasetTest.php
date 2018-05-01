<?php

namespace Brazanation\States\Tests\Console\Commands\Generate;

use Brazanation\States\Console\Commands\Generate\ReaderDataset;
use PHPUnit\Framework\TestCase;

class ReaderDatasetTest extends TestCase
{
    public function testShouldReadDatasetFile()
    {
        $reader = new ReaderDataset(__DIR__ . '/br-states-code.csv');
        $reader->read();

        $this->assertCount(27, $reader);
    }

    public function testConstructorOnNullFilePath()
    {
        $reader = new ReaderDataset(null);
        $reader->read();

        $this->assertCount(27, $reader);
    }

    public function testGetCurrentStates()
    {
        $reader = new ReaderDataset(null);
        $reader->read();
        $result = $reader->current();

        $this->assertSame('EstadoDo', $result->getClassName());
        $this->assertSame('Estado do', $result->getFullName());
        $this->assertSame('AC', $result->getShortName());
        $this->assertSame('State', $result->getTimeZone());
    }
}
