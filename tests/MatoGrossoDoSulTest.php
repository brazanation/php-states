<?php
/**
 * This file was generated automatically, changes on this will not have effect
 * PLEASE, DO NOT MODIFY THIS FILE
 */

namespace Brazanation\States\Tests;

use Brazanation\States\MatoGrossoDoSul;

class MatoGrossoDoSulTest extends \PHPUnit_Framework_TestCase
{
    public function testMatoGrossoDoSul()
    {
        $state = new MatoGrossoDoSul();

        $this->assertEquals($state->getName(), 'Mato Grosso do Sul');
        $this->assertEquals($state->getAbbr(), 'MS');
        $this->assertEquals($state->getCapital(), 'Campo Grande');
        $this->assertEquals($state->getTimezone(), 'America/Campo_Grande');
        $this->assertEquals($state->getRegion(), 'Centro-Oeste');
        $this->assertEquals($state->getDst(), true);
        $this->assertEquals($state->getSlug(), 'mato-grosso-do-sul');
    }
}
