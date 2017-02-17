<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Pernambuco;

class PernambucoTest extends \PHPUnit_Framework_TestCase
{
    public function testPernambuco()
    {
        $state = new Pernambuco();

        $this->assertEquals($state->getName(), 'Pernambuco');
        $this->assertEquals($state->getAbbr(), 'PE');
        $this->assertEquals($state->getCapital(), 'Recife');
        $this->assertEquals($state->getTimezone(), 'America/Recife');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'pernambuco');
    }
}
