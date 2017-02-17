<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Para;

class ParaTest extends \PHPUnit_Framework_TestCase
{
    public function testPara()
    {
        $state = new Para();

        $this->assertEquals($state->getName(), 'Pará');
        $this->assertEquals($state->getAbbr(), 'PA');
        $this->assertEquals($state->getCapital(), 'Belém');
        $this->assertEquals($state->getTimezone(), 'America/Belem');
        $this->assertEquals($state->getRegion(), 'Norte');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'para');
    }
}
