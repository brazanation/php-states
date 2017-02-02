<?php

namespace Brazanation\States\Tests;

use Brazanation\States\Acre;
use Brazanation\States\State;

class StateTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldInstanciateAStateObject()
    {
        /** @var Acre $state */
        $state = State::acre();

        $this->assertInstanceOf(Acre::class, $state);
        $this->assertEquals(Acre::FULL_NAME, $state->fullName);
        $this->assertEquals(Acre::SHORT_NAME, $state->shortName);
        $this->assertEquals(Acre::CODE, $state->code);
        $this->assertEquals(Acre::TIMEZONE, $state->timeZone);
    }
}
