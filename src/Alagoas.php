<?php

namespace Brazanation\States;

class Alagoas
{
    const CODE = 27;

    const FULL_NAME = 'Alagoas';

    const SHORT_NAME = 'AL';

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
