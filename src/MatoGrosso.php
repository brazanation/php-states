<?php

namespace Brazanation\States;

class MatoGrosso extends State
{
    const CODE = 51;

    const FULL_NAME = 'Mato Grosso';

    const SHORT_NAME = 'MT';

    const TIMEZONE = 'America/Cuiaba';

    public function __construct()
    {
        parent::__construct(
            self::FULL_NAME,
            self::SHORT_NAME,
            self::CODE,
            self::TIMEZONE
        );
    }
}
