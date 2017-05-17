<?php

namespace Brazanation\States;

class Tocantins extends State
{
    const CODE = 17;

    const FULL_NAME = 'Tocantins';

    const SHORT_NAME = 'TO';

    const TIMEZONE = 'America/Araguaina';

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
