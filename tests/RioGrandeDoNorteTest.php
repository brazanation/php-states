<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\RioGrandeDoNorte;

class RioGrandeDoNorteTest extends \PHPUnit_Framework_TestCase
{
    public function testRioGrandeDoNorte()
    {
        $state = new RioGrandeDoNorte();

        $this->assertEquals($state->getName(), 'Rio Grande do Norte');
        $this->assertEquals($state->getAbbr(), 'RN');
        $this->assertEquals($state->getCapital(), 'Natal');
        $this->assertEquals($state->getTimezone(), 'America/Fortaleza');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'rio-grande-do-norte');
    }
}
