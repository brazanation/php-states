<?php

namespace Brazanation\States\Console\Commands\Generate;

class GenericState
{
    private $className;

    private $code;

    private $fullName;

    private $shortName;

    private $timeZone;

    /**
     * GenericState constructor.
     *
     * @param int    $code
     * @param string $fullName
     * @param string $shortName
     * @param string $timeZone
     */
    public function __construct($code, $fullName, $shortName, $timeZone)
    {
        $this->className = $this->normalizeClassName($fullName);
        $this->code = (int) $code;
        $this->fullName = $fullName;
        $this->shortName = $shortName;
        $this->timeZone = $timeZone;
    }

    private function normalizeClassName($fullName)
    {
        $ascName = iconv('utf-8', 'ascii//TRANSLIT', $fullName);
        $className = str_replace(' ', '', ucwords($ascName));

        return $className;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @return bool
     */
    public function isState()
    {
        return $this->getCode() > 0;
    }
}
