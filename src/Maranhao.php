<?php

namespace Brazanation\States;

class Maranhao
{
    const CODE = 21;

    const FULL_NAME = 'Maranhao';

    const SHORT_NAME = 'MA';

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
