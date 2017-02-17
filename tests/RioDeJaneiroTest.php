<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\RioDeJaneiro;

class RioDeJaneiroTest extends \PHPUnit_Framework_TestCase
{
    public function testRioDeJaneiro()
    {
        $state = new RioDeJaneiro();

        $this->assertEquals($state->getName(), 'Rio de Janeiro');
        $this->assertEquals($state->getAbbr(), 'RJ');
        $this->assertEquals($state->getCapital(), 'Rio de Janeiro');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Sudeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'rio-de-janeiro');
    }
}
