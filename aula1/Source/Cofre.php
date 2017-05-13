<?php

require_once "SenhaIncorretaException.php";
require_once "Senha.php";
require_once "CoisaSeguraComAbrirEFechar.php";
require_once "ValidadorDeSenha.php";

class Cofre
{
    use CoisaSeguraComAbrirEFechar;

    function __construct(string $senha, ValidadorDeSenha $validador)
    {
        $this->senha = new Senha($senha, $validador);
    }

}