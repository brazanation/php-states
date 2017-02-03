<?php

namespace Brazanation\States;

class Amapa
{
    const CODE = 16;

    const FULL_NAME = 'Amapa';

    const SHORT_NAME = 'AP';

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
