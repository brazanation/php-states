<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Tocantins;

class TocantinsTest extends \PHPUnit_Framework_TestCase
{
    public function testTocantins()
    {
        $state = new Tocantins();

        $this->assertEquals($state->getName(), 'Tocantins');
        $this->assertEquals($state->getAbbr(), 'TO');
        $this->assertEquals($state->getCapital(), 'Palmas');
        $this->assertEquals($state->getTimezone(), 'America/Araguaina');
        $this->assertEquals($state->getRegion(), 'Norte');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'tocantins');
    }
}
