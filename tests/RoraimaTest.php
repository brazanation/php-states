<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Roraima;

class RoraimaTest extends \PHPUnit_Framework_TestCase
{
    public function testRoraima()
    {
        $state = new Roraima();

        $this->assertEquals($state->getName(), 'Roraima');
        $this->assertEquals($state->getAbbr(), 'RR');
        $this->assertEquals($state->getCapital(), 'Boa Vista');
        $this->assertEquals($state->getTimezone(), 'America/Boa_Vista');
        $this->assertEquals($state->getRegion(), 'Norte');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'roraima');
    }
}
