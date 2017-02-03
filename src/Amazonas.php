<?php

namespace Brazanation\States;

class Amazonas
{
    const CODE = 13;

    const FULL_NAME = 'Amazonas';

    const SHORT_NAME = 'AM';

    const TIMEZONE = 'America/Manaus';

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
