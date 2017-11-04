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
}
