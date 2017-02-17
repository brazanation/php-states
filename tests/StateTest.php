<?php

namespace Brazanation\States\Tests;

use Brazanation\States\State;

class StateTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldGetData()
    {
        $data = [];
        $state = new State($data);
        $this->assertEquals($data, $state->getData());
    }

    public function testShouldGetItem()
    {
        $data = ['foo' => 'bar'];
        $state = new State($data);
        $this->assertEquals($data['foo'], $state->getItem('foo'));
    }

    public function testShouldGetItemDefault()
    {
        $data = [];
        $state = new State($data);
        $this->assertEquals('bar', $state->getItem('foo', 'bar'));
    }

    public function testShouldGetName()
    {
        $data = ['name' => 'foo'];
        $state = new State($data);
        $this->assertEquals($data['name'], $state->getName());
    }

    public function testShouldGetAbbr()
    {
        $data = ['abbr' => 'foo'];
        $state = new State($data);
        $this->assertEquals($data['abbr'], $state->getAbbr());
    }

    public function testShouldGetCapital()
    {
        $data = ['capital' => 'foo'];
        $state = new State($data);
        $this->assertEquals($data['capital'], $state->getCapital());
    }

    public function testShouldGetRegion()
    {
        $data = ['region' => 'foo'];
        $state = new State($data);
        $this->assertEquals($data['region'], $state->getRegion());
    }

    public function testShouldGetTimezone()
    {
        $data = ['timezone' => 'foo'];
        $state = new State($data);
        $this->assertEquals($data['timezone'], $state->getTimezone());
    }

    public function testShouldGetDst()
    {
        $data = ['dst' => 'foo'];
        $state = new State($data);
        $this->assertEquals($data['dst'], $state->getDst());
    }

    public function testShouldGetSlug()
    {
        $data = ['slug' => 'foo'];
        $state = new State($data);
        $this->assertEquals($data['slug'], $state->getSlug());
    }
}
