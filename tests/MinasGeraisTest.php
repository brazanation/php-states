<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\MinasGerais;

class MinasGeraisTest extends \PHPUnit_Framework_TestCase
{
    public function testMinasGerais()
    {
        $state = new MinasGerais();

        $this->assertEquals($state->getName(), 'Minas Gerais');
        $this->assertEquals($state->getAbbr(), 'MG');
        $this->assertEquals($state->getCapital(), 'Belo Horizonte');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Sudeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'minas-gerais');
    }
}
