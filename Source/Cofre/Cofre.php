<?php


class Cofre
{
    use CoisaSeguraComAbrirEFechar;

    function __construct(string $senha, ValidadorDeSenha $validador = null)
    {
        if (is_null($validador)) {
            $validador = new ValidadorDeSenhaSemValidacao();
        }

        $this->senha = new Senha($senha, $validador);
    }

}