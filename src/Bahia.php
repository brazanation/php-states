<?php

namespace Brazanation\States;

class Bahia extends State
{
    const CODE = 29;

    const FULL_NAME = 'Bahia';

    const SHORT_NAME = 'BA';

    const TIMEZONE = 'America/Bahia';

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
