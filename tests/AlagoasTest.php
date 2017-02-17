<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Alagoas;

class AlagoasTest extends \PHPUnit_Framework_TestCase
{
    public function testAlagoas()
    {
        $state = new Alagoas();

        $this->assertEquals($state->getName(), 'Alagoas');
        $this->assertEquals($state->getAbbr(), 'AL');
        $this->assertEquals($state->getCapital(), 'Maceió');
        $this->assertEquals($state->getTimezone(), 'America/Maceio');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'alagoas');
    }
}
