<?php

namespace Brazanation\States;

/**
 * Class State
 *
 * @package Brazanation\States
 *
 * @method static acre() Acre
 */
abstract class State implements StateInterface
{
    private static $available = [
        'Acre' => Acre::class,
        'Alagoas' => Alagoas::class,
        'Amazonas' => Amazonas::class,
        'Amapa' => Amapa::class,
        'Bahia' => Bahia::class,
        'Ceara' => Ceara::class,
        'DistritoFederal' => DistritoFederal::class,
        'EspiritoSanto' => EspiritoSanto::class,
        'Goias' => Goias::class,
        'Maranhao' => Maranhao::class,
        'MinasGerais' => MinasGerais::class,
        'MatoGrossoDoSul' => MatoGrossoDoSul::class,
        'MatoGrosso' => MatoGrosso::class,
        'Para' => Para::class,
        'Paraiba' => Paraiba::class,
        'Pernambuco' => Pernambuco::class,
        'Piaui' => Piaui::class,
        'Parana' => Parana::class,
        'RioDeJaneiro' => RioDeJaneiro::class,
        'RioGrandeDoNorte' => RioGrandeDoNorte::class,
        'Rondonia' => Rondonia::class,
        'Roraima' => Roraima::class,
        'RioGrandeDoSul' => RioGrandeDoSul::class,
        'SantaCatarina' => SantaCatarina::class,
        'Sergipe' => Sergipe::class,
        'SaoPaulo' => SaoPaulo::class,
        'Tocantins' => Tocantins::class,
    ];

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $shortName;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $timeZone;

    protected function __construct($fullName, $shortName, $code, $timeZone)
    {
        $this->fullName = $fullName;
        $this->shortName = $shortName;
        $this->code = $code;
        $this->timeZone = $timeZone;
    }

    public static function __callStatic($name, $args)
    {
        $className = self::$available[ucfirst($name)];

        return new $className();
    }

    public function equalTo(StateInterface $state)
    {
        return ($this === $state);
    }
}
