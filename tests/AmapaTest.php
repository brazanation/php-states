<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Amapa;

class AmapaTest extends \PHPUnit_Framework_TestCase
{
    public function testAmapa()
    {
        $state = new Amapa();

        $this->assertEquals($state->getName(), 'Amapá');
        $this->assertEquals($state->getAbbr(), 'AP');
        $this->assertEquals($state->getCapital(), 'Macapá');
        $this->assertEquals($state->getTimezone(), 'America/Belem');
        $this->assertEquals($state->getRegion(), 'Norte');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'amapa');
    }
}
