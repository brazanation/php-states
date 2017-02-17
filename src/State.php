<?php

namespace Brazanation\States;

class State implements StateInterface
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getItem($key, $default = null)
    {
        return array_key_exists($key, $this->data) ? $this->data[$key] : $default;
    }

    public function getName()
    {
        return $this->getItem('name');
    }

    public function getAbbr()
    {
        return $this->getItem('abbr');
    }

    public function getCapital()
    {
        return $this->getItem('capital');
    }

    public function getRegion()
    {
        return $this->getItem('region');
    }

    public function getTimezone()
    {
        return $this->getItem('timezone');
    }

    public function getDst()
    {
        return $this->getItem('dst');
    }

    public function getSlug()
    {
        return $this->getItem('slug');
    }
}
