<?php

namespace Brazanation\States\Console\Commands\Generate;

class ClassFileWriter
{
    public function write($path, GenericState $state)
    {
        $fileContent = <<<FILE
<?php

namespace Brazanation\States;

class {$state->getClassName()} extends State
{
    const CODE = {$state->getCode()};

    const FULL_NAME = '{$state->getFullName()}';

    const SHORT_NAME = '{$state->getShortName()}';

    const TIMEZONE = '{$state->getTimeZone()}';

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

FILE;

        return file_put_contents("{$path}/{$state->getClassName()}.php", $fileContent);
    }
}
