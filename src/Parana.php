<?php

namespace Brazanation\States;

class Parana extends State
{
    const CODE = 41;

    const FULL_NAME = 'Paraná';

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
