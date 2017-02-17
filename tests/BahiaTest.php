<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Bahia;

class BahiaTest extends \PHPUnit_Framework_TestCase
{
    public function testBahia()
    {
        $state = new Bahia();

        $this->assertEquals($state->getName(), 'Bahia');
        $this->assertEquals($state->getAbbr(), 'BA');
        $this->assertEquals($state->getCapital(), 'Salvador');
        $this->assertEquals($state->getTimezone(), 'America/Bahia');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'bahia');
    }
}
