<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\SantaCatarina;

class SantaCatarinaTest extends \PHPUnit_Framework_TestCase
{
    public function testSantaCatarina()
    {
        $state = new SantaCatarina();

        $this->assertEquals($state->getName(), 'Santa Catarina');
        $this->assertEquals($state->getAbbr(), 'SC');
        $this->assertEquals($state->getCapital(), 'Florianópolis');
        $this->assertEquals($state->getTimezone(), 'America/Sao_Paulo');
        $this->assertEquals($state->getRegion(), 'Sul');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'santa-catarina');
    }
}
