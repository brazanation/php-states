<?php

namespace Brazanation\States;

class Para
{
    const CODE = 15;

    const FULL_NAME = 'Para';

    const SHORT_NAME = 'PA';

    const TIMEZONE = 'America/Belem';

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
