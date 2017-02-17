<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\RioGrandeDoSul;

class RioGrandeDoSulTest extends \PHPUnit_Framework_TestCase
{
    public function testRioGrandeDoSul()
    {
        $state = new RioGrandeDoSul();

        $this->assertEquals($state->getName(), 'Rio Grande do Sul');
        $this->assertEquals($state->getAbbr(), 'RS');
        $this->assertEquals($state->getCapital(), 'Porto Alegre');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Sul');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'rio-grande-do-sul');
    }
}
