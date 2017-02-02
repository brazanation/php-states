<?php

namespace Brazanation\States;

/**
 * Class State
 *
 * @package Brazanation\States
 *
 * @method static acre() Acre
 */
abstract class State implements StateInterface
{
    private static $available = [
        Acre::FULL_NAME => Acre::class,
    ];

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $shortName;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $timeZone;

    protected function __construct($fullName, $shortName, $code, $timeZone)
    {
        $this->fullName = $fullName;
        $this->shortName = $shortName;
        $this->code = $code;
        $this->timeZone = $timeZone;
    }

    public static function __callStatic($name, $args)
    {
        $className = self::$available[ucfirst($name)];

        return new $className();
    }

    public function equalTo(StateInterface $state)
    {
        return ($this === $state);
    }
}
