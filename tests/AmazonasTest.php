<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\Amazonas;

class AmazonasTest extends \PHPUnit_Framework_TestCase
{
    public function testAmazonas()
    {
        $state = new Amazonas();

        $this->assertEquals($state->getName(), 'Amazonas');
        $this->assertEquals($state->getAbbr(), 'AM');
        $this->assertEquals($state->getCapital(), 'Manaus');
        $this->assertEquals($state->getTimezone(), 'America/Manaus');
        $this->assertEquals($state->getRegion(), 'Norte');
        $this->assertEquals($state->getDst(), false);
        $this->assertEquals($state->getSlug(), 'amazonas');
    }
}
