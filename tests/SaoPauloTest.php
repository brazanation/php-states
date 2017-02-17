<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\SaoPaulo;

class SaoPauloTest extends \PHPUnit_Framework_TestCase
{
    public function testSaoPaulo()
    {
        $state = new SaoPaulo();

        $this->assertEquals($state->getName(), 'São Paulo');
        $this->assertEquals($state->getAbbr(), 'SP');
        $this->assertEquals($state->getCapital(), 'São Paulo');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Sudeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'sao-paulo');
    }
}
