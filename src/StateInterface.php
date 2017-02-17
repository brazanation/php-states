<?php

namespace Brazanation\States;

interface StateInterface
{
    public function getData();
    public function getItem($key, $default = null);
    public function getName();
    public function getAbbr();
    public function getCapital();
    public function getRegion();
    public function getTimezone();
    public function getDst();
}
