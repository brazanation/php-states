<?php

namespace Brazanation\States;

class MinasGerais
{
    const CODE = 31;

    const FULL_NAME = 'Minas Gerais';

    const SHORT_NAME = 'MG';

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
