<?php


class ValidadorDeSenhaSemValidacao implements ValidadorDeSenha
{

    public function validar($senha)
    {
        return true;
    }
}