<?php

namespace Brazanation\States;

class Acre extends State
{
    const CODE = 12;

    const FULL_NAME = 'Acre';

    const SHORT_NAME = 'AC';

    const TIMEZONE = 'America/Rio_Branco';

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
