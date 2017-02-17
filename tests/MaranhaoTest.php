<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Maranhao;

class MaranhaoTest extends \PHPUnit_Framework_TestCase
{
    public function testMaranhao()
    {
        $state = new Maranhao();

        $this->assertEquals($state->getName(), 'Maranhão');
        $this->assertEquals($state->getAbbr(), 'MA');
        $this->assertEquals($state->getCapital(), 'São Luís');
        $this->assertEquals($state->getTimezone(), 'America/Fortaleza');
        $this->assertEquals($state->getRegion(), 'Nordeste');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'maranhao');
    }
}
