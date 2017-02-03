<?php

namespace Brazanation\States;

class Pernambuco
{
    const CODE = 26;

    const FULL_NAME = 'Pernambuco';

    const SHORT_NAME = 'PE';

    const TIMEZONE = 'America/Recife';

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
