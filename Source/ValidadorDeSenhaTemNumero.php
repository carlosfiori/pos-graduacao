<?php

class ValidadorDeSenhaTemNumero implements ValidadorDeSenha
{

    public function validar($senha)
    {
        return preg_match("/[0-9]+/", $senha);
    }
}