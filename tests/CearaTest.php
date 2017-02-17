<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Ceara;

class CearaTest extends \PHPUnit_Framework_TestCase
{
    public function testCeara()
    {
        $state = new Ceara();

        $this->assertEquals($state->getName(), 'Ceará');
        $this->assertEquals($state->getAbbr(), 'CE');
        $this->assertEquals($state->getCapital(), 'Fortaleza');
        $this->assertEquals($state->getTimezone(), 'America/Fortaleza');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'ceara');
    }
}
