<?php

namespace Brazanation\States;

interface StateInterface
{
    public function equalTo(StateInterface $state);
}
