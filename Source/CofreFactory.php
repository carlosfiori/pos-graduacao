<?php

abstract class CofreFactory
{

    public static function criarCofreSemValidacao(string $senha)
    {
        return new Cofre($senha, new ValidadorDeSenhaSemValidacao());
    }

    public static function criarCofreComValidacao(string $senha, ValidadorDeSenha $validador)
    {
        return new Cofre($senha, $validador);
    }

}