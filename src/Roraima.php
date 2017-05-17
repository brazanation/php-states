<?php

namespace Brazanation\States;

class Roraima extends State
{
    const CODE = 14;

    const FULL_NAME = 'Roraima';

    const SHORT_NAME = 'RR';

    const TIMEZONE = 'America/Boa_Vista';

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
