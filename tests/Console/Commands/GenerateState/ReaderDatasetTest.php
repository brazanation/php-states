<?php

namespace Brazanation\States\Tests\Console\Commands\Generate;

use Brazanation\States\Console\Commands\Generate\ReaderDataset;

class ReaderDatasetTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldReadDatasetFile()
    {
        $reader = new ReaderDataset(__DIR__ . '/br-states-code.csv');
        $reader->read();

        $this->assertCount(27, $reader);
    }
}
