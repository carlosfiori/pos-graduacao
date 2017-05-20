<?php

class Maleta
{

    use CoisaSeguraComAbrirEFechar;


    function __construct(Senha $senha)
    {
        $this->senha = $senha;
    }
}