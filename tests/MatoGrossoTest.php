<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\MatoGrosso;

class MatoGrossoTest extends \PHPUnit_Framework_TestCase
{
    public function testMatoGrosso()
    {
        $state = new MatoGrosso();

        $this->assertEquals($state->getName(), 'Mato Grosso');
        $this->assertEquals($state->getAbbr(), 'MT');
        $this->assertEquals($state->getCapital(), 'Cuiabá');
        $this->assertEquals($state->getTimezone(), 'America/Cuiaba');
        $this->assertEquals($state->getRegion(), 'Centro-Oeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'mato-grosso');
    }
}
