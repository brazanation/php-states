<?php

namespace Brazanation\States;

class Rondonia extends State
{
    const CODE = 11;

    const FULL_NAME = 'Rondônia';

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
