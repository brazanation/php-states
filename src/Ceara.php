<?php

namespace Brazanation\States;

class Ceara
{
    const CODE = 23;

    const FULL_NAME = 'Ceara';

    const SHORT_NAME = 'CE';

    const TIMEZONE = 'America/Fortaleza';

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
