<?php

namespace Brazanation\States;

class RioGrandedoNorte
{
    const CODE = 24;

    const FULL_NAME = 'Rio Grande do Norte';

    const SHORT_NAME = 'RN';

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
