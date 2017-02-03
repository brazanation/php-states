<?php

namespace Brazanation\States;

class Sergipe
{
    const CODE = 28;

    const FULL_NAME = 'Sergipe';

    const SHORT_NAME = 'SE';

    const TIMEZONE = 'America/Maceio';

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
