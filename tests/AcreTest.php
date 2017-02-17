<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Acre;

class AcreTest extends \PHPUnit_Framework_TestCase
{
    public function testAcre()
    {
        $state = new Acre();

        $this->assertEquals($state->getName(), 'Acre');
        $this->assertEquals($state->getAbbr(), 'AC');
        $this->assertEquals($state->getCapital(), 'Rio Branco');
        $this->assertEquals($state->getTimezone(), 'America/Rio_Branco');
        $this->assertEquals($state->getRegion(), 'Norte');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'acre');
    }
}
