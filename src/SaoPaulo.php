<?php

namespace Brazanation\States;

class SaoPaulo
{
    const CODE = 35;

    const FULL_NAME = 'Sao Paulo';

    const SHORT_NAME = 'SP';

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
