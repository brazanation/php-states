<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Rondonia;

class RondoniaTest extends \PHPUnit_Framework_TestCase
{
    public function testRondonia()
    {
        $state = new Rondonia();

        $this->assertEquals($state->getName(), 'Rondônia');
        $this->assertEquals($state->getAbbr(), 'RO');
        $this->assertEquals($state->getCapital(), 'Porto Velho');
        $this->assertEquals($state->getTimezone(), 'America/Porto_Velho');
        $this->assertEquals($state->getRegion(), 'Norte');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'rondonia');
    }
}
