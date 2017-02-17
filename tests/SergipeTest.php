<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Sergipe;

class SergipeTest extends \PHPUnit_Framework_TestCase
{
    public function testSergipe()
    {
        $state = new Sergipe();

        $this->assertEquals($state->getName(), 'Sergipe');
        $this->assertEquals($state->getAbbr(), 'SE');
        $this->assertEquals($state->getCapital(), 'Aracaju');
        $this->assertEquals($state->getTimezone(), 'America/Maceio');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'sergipe');
    }
}
