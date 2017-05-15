<?php

namespace Brazanation\States;

class Piaui extends State
{
    const CODE = 22;

    const FULL_NAME = 'Piauí';

    const SHORT_NAME = 'PI';

    const TIMEZONE = 'America/Fortaleza';

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
