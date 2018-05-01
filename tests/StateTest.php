<?php

namespace Brazanation\States\Tests;

use Brazanation\States;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    /**
     * @dataProvider provideStates
     */
    public function testShouldCreateAStateObject($method, $className, $fullName, $shortName, $code, $timezone)
    {
        /** @var States\State $state */
        $state = States\State::$method();

        $this->assertInstanceOf($className, $state, "Failed asserting class for {$fullName}");
        $this->assertEquals($fullName, $state->fullName, "Failed asserting full name for {$fullName}");
        $this->assertEquals($shortName, $state->shortName, "Failed asserting short for {$fullName}");
        $this->assertEquals($code, $state->code, "Failed asserting code for {$fullName}");
        $this->assertEquals($timezone, $state->timeZone, "Failed asserting timezone for {$fullName}");
        $this->assertTrue($state->equalTo($state));
    }

    public function provideStates()
    {
        return [
            ['acre', States\Acre::class, 'Acre', 'AC', 12, 'America/Rio_Branco'],
            ['alagoas', States\Alagoas::class, 'Alagoas', 'AL', 27, 'America/Maceio'],
            ['acre', States\Acre::class, 'Acre', 'AC', 12, 'America/Rio_Branco'],
            ['alagoas', States\Alagoas::class, 'Alagoas', 'AL', 27, 'America/Maceio'],
            ['amazonas', States\Amazonas::class, 'Amazonas', 'AM', 13, 'America/Manaus'],
            ['amapa', States\Amapa::class, 'Amapá', 'AP', 16, 'America/Belem'],
            ['bahia', States\Bahia::class, 'Bahia', 'BA', 29, 'America/Bahia'],
            ['ceara', States\Ceara::class, 'Ceará', 'CE', 23, 'America/Fortaleza'],
            ['distritoFederal', States\DistritoFederal::class, 'Distrito Federal', 'DF', 53, 'America/Sao_Paulo'],
            ['espiritoSanto', States\EspiritoSanto::class, 'Espírito Santo', 'ES', 32, 'America/Sao_Paulo'],
            ['goias', States\Goias::class, 'Goiás', 'GO', 52, 'America/Sao_Paulo'],
            ['maranhao', States\Maranhao::class, 'Maranhão', 'MA', 21, 'America/Fortaleza'],
            ['minasGerais', States\MinasGerais::class, 'Minas Gerais', 'MG', 31, 'America/Sao_Paulo'],
            ['matoGrossoDoSul', States\MatoGrossoDoSul::class, 'Mato Grosso do Sul', 'MS', 50, 'America/Campo_Grande'],
            ['matoGrosso', States\MatoGrosso::class, 'Mato Grosso', 'MT', 51, 'America/Cuiaba'],
            ['para', States\Para::class, 'Pará', 'PA', 15, 'America/Belem'],
            ['paraiba', States\Paraiba::class, 'Paraíba', 'PB', 25, 'America/Fortaleza'],
            ['pernambuco', States\Pernambuco::class, 'Pernambuco', 'PE', 26, 'America/Recife'],
            ['piaui', States\Piaui::class, 'Piauí', 'PI', 22, 'America/Fortaleza'],
            ['parana', States\Parana::class, 'Paraná', 'PR', 41, 'America/Sao_Paulo'],
            ['rioDeJaneiro', States\RioDeJaneiro::class, 'Rio de Janeiro', 'RJ', 33, 'America/Sao_Paulo'],
            ['rioGrandeDoNorte', States\RioGrandeDoNorte::class, 'Rio Grande do Norte', 'RN', 24, 'America/Fortaleza'],
            ['rondonia', States\Rondonia::class, 'Rondônia', 'RO', 11, 'America/Porto_Velho'],
            ['roraima', States\Roraima::class, 'Roraima', 'RR', 14, 'America/Boa_Vista'],
            ['rioGrandeDoSul', States\RioGrandeDoSul::class, 'Rio Grande do Sul', 'RS', 43, 'America/Sao_Paulo'],
            ['santaCatarina', States\SantaCatarina::class, 'Santa Catarina', 'SC', 42, 'America/Sao_Paulo'],
            ['sergipe', States\Sergipe::class, 'Sergipe', 'SE', 28, 'America/Maceio'],
            ['saoPaulo', States\SaoPaulo::class, 'São Paulo', 'SP', 35, 'America/Sao_Paulo'],
            ['tocantins', States\Tocantins::class, 'Tocantins', 'TO', 17, 'America/Araguaina'],
        ];
    }
}
