<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Parana;

class ParanaTest extends \PHPUnit_Framework_TestCase
{
    public function testParana()
    {
        $state = new Parana();

        $this->assertEquals($state->getName(), 'Paraná');
        $this->assertEquals($state->getAbbr(), 'PR');
        $this->assertEquals($state->getCapital(), 'Curitiba');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Sul');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'parana');
    }
}
