<?php

abstract class CofreFactory
{

    const CONFIG_COFRE_FACTORY_JSON = './config/cofre-factory.json';

    private static function obterNomeDaClasse($tipoDoCofre)
    {
        $arquivo = file_get_contents(self::CONFIG_COFRE_FACTORY_JSON);
        $dados = json_decode($arquivo);
        return $dados->$tipoDoCofre;
    }

    public static function criarCofreSemValidacao(string $tipo, string $senha)
    {
        $nomeDaClasse = self::obterNomeDaClasse($tipo);
        return new $nomeDaClasse($senha, new ValidadorDeSenhaSemValidacao());
    }

    public static function criarCofreComValidacao(string $tipo, string $senha, ValidadorDeSenha $validador)
    {
        $nomeDaClasse = self::obterNomeDaClasse($tipo);
        return new $nomeDaClasse($senha, $validador);
    }

}