<?php

namespace Brazanation\States;

class RioGrandeDoSul
{
    const CODE = 43;

    const FULL_NAME = 'Rio Grande do Sul';

    const SHORT_NAME = 'RS';

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
