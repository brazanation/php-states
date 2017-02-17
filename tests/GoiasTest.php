<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Goias;

class GoiasTest extends \PHPUnit_Framework_TestCase
{
    public function testGoias()
    {
        $state = new Goias();

        $this->assertEquals($state->getName(), 'Goiás');
        $this->assertEquals($state->getAbbr(), 'GO');
        $this->assertEquals($state->getCapital(), 'Goiânia');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Centro-Oeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'goias');
    }
}
