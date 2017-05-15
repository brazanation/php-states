<?php

namespace Brazanation\States;

class RioDeJaneiro extends State
{
    const CODE = 33;

    const FULL_NAME = 'Rio de Janeiro';

    const SHORT_NAME = 'RJ';

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
