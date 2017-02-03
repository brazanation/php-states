<?php

namespace Brazanation\States;

class SantaCatarina
{
    const CODE = 42;

    const FULL_NAME = 'Santa Catarina';

    const SHORT_NAME = 'SC';

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
