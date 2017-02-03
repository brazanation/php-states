<?php

namespace Brazanation\States;

class MatoGrossoDoSul
{
    const CODE = 50;

    const FULL_NAME = 'Mato Grosso do Sul';

    const SHORT_NAME = 'MS';

    const TIMEZONE = 'America/Campo_Grande';

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
