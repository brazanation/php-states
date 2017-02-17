<?php

namespace Brazanation\States;

class StateFactory
{
    public static function __callStatic($name, $arguments)
    {
        $className = ucfirst($name);
        $reflectionClass = new \ReflectionClass('Brazanation\States\\'.$className);
        return $reflectionClass->newInstance();
    }
}
