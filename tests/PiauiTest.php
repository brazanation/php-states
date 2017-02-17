<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Piaui;

class PiauiTest extends \PHPUnit_Framework_TestCase
{
    public function testPiaui()
    {
        $state = new Piaui();

        $this->assertEquals($state->getName(), 'Piauí');
        $this->assertEquals($state->getAbbr(), 'PI');
        $this->assertEquals($state->getCapital(), 'Teresina');
        $this->assertEquals($state->getTimezone(), 'America/Fortaleza');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'piaui');
    }
}
