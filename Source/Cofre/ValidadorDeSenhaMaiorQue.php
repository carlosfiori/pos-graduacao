<?php


class ValidadorDeSenhaMaiorQue implements ValidadorDeSenha
{
    private $tamanho;

    function __construct($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function validar($senha)
    {
        return strlen($senha) > $this->tamanho;
    }
}