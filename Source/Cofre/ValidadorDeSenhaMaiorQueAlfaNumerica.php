<?php

class ValidadorDeSenhaMaiorQueAlfaNumerica implements ValidadorDeSenha
{
    private $tamanho;

    function __construct($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function validar($senha)
    {
        $senhaAlfaNumerica = preg_match("/^[0-9a-zA-Z]+$/", $senha);
        $senhaMaiorQueTamanho = strlen($senha) > $this->tamanho;
        return $senhaMaiorQueTamanho && $senhaAlfaNumerica;
    }
}