Brazanation States
=====================

[![Build Status](https://travis-ci.org/brazanation/states.svg?branch=master)](https://travis-ci.org/brazanation/states)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/brazanation/states/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/brazanation/states/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/brazanation/states/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/brazanation/states/?branch=master)
[![StyleCI](https://styleci.io/repos/80746816/shield)](https://styleci.io/repos/80746816)

A PHP library to provide Brazilian States safer, easier and fun!

Installation
------------

Install the library using [composer][1]. Add the following to your `composer.json`:

```json
{
    "require": {
        "brazanation/states": "dev-master"
    }
}
```

Now run the `install` command.

```sh
$ composer.phar install
```

or

```sh
$ composer require brazanation/documents dev-master
```

### Usage

```php
use Brazanation\States\State;

$state = State::acre();

echo $state->fullName; // Acre
echo $state->shortName; // AC
echo $state->code; // 12
echo $state->timezone; // America/Rio_Branco
```

or

```php
use Brazanation\States\Acre;

$state = new Acre();

echo $state->fullName; // Acre
echo $state->shortName; // AC
echo $state->code; // 12
echo $state->timezone; // America/Rio_Branco
```

### License

MIT, hell yeah!

[1]: http://getcomposer.org/
