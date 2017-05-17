<?php

namespace Brazanation\States;

class DistritoFederal extends State
{
    const CODE = 53;

    const FULL_NAME = 'Distrito Federal';

    const SHORT_NAME = 'DF';

    const TIMEZONE = 'America/Sao_Paulo';

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
