<?php

namespace Brazanation\States;

class Goias
{
    const CODE = 52;

    const FULL_NAME = 'Goias';

    const SHORT_NAME = 'GO';

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
