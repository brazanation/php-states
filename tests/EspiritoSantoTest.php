<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\EspiritoSanto;

class EspiritoSantoTest extends \PHPUnit_Framework_TestCase
{
    public function testEspiritoSanto()
    {
        $state = new EspiritoSanto();

        $this->assertEquals($state->getName(), 'Espírito Santo');
        $this->assertEquals($state->getAbbr(), 'ES');
        $this->assertEquals($state->getCapital(), 'Vitória');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Sudeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'espirito-santo');
    }
}
