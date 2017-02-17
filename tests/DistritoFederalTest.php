<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\DistritoFederal;

class DistritoFederalTest extends \PHPUnit_Framework_TestCase
{
    public function testDistritoFederal()
    {
        $state = new DistritoFederal();

        $this->assertEquals($state->getName(), 'Distrito Federal');
        $this->assertEquals($state->getAbbr(), 'DF');
        $this->assertEquals($state->getCapital(), 'Brasília');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Centro-Oeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'distrito-federal');
    }
}
