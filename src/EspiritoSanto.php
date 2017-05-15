<?php

namespace Brazanation\States;

class EspiritoSanto extends State
{
    const CODE = 32;

    const FULL_NAME = 'Espírito Santo';

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
