<?php

namespace Brazanation\States\Tests;

use Brazanation\States;
use Brazanation\States\StateFactory;

class StateFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCallStatic()
    {
        $acre = StateFactory::acre();
        $this->assertInstanceOf(States\Acre::class, $acre);

        $rio = StateFactory::rioDeJaneiro();
        $this->assertInstanceOf(States\RioDeJaneiro::class, $rio);

        $saoPaulo = StateFactory::saoPaulo();
        $this->assertInstanceOf(States\SaoPaulo::class, $saoPaulo);
    }
}
