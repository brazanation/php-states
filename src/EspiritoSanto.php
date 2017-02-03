<?php

namespace Brazanation\States;

class EspiritoSanto
{
    const CODE = 32;

    const FULL_NAME = 'Espirito Santo';

    const SHORT_NAME = 'ES';

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
