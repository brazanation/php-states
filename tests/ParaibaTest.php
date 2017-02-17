<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Paraiba;

class ParaibaTest extends \PHPUnit_Framework_TestCase
{
    public function testParaiba()
    {
        $state = new Paraiba();

        $this->assertEquals($state->getName(), 'Paraíba');
        $this->assertEquals($state->getAbbr(), 'PB');
        $this->assertEquals($state->getCapital(), 'João Pessoa');
        $this->assertEquals($state->getTimezone(), 'America/Fortaleza');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'paraiba');
    }
}