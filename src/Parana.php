<?php

namespace Brazanation\States;

class Parana
{
    const CODE = 41;

    const FULL_NAME = 'Parana';

    const SHORT_NAME = 'PR';

    const TIMEZONE = 'America/Sao_Paulo';

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
