<?php

namespace Brazanation\States;

class Rondonia
{
    const CODE = 11;

    const FULL_NAME = 'Rondonia';

    const SHORT_NAME = 'RO';

    const TIMEZONE = 'America/Porto_Velho';

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
