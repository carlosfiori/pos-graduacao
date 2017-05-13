<?php


class ValidadorDeSenhaTemLetras implements ValidadorDeSenha
{

    public function validar($senha)
    {
        return preg_match("/[a-z]+/", $senha);
    }
}