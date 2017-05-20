<?php

class ValidadorDeSenhaMaiorQueAlfaNumericaMaiusculo implements ValidadorDeSenha
{
    private $tamanho;

    function __construct($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function validar($senha)
    {
        $senhaMaiorQueTamanho = strlen($senha) > $this->tamanho;
        $senhaAlfaNumericaEMaiscula = preg_match("/^[0-9A-Z]+$/", $senha);

        return $senhaMaiorQueTamanho && $senhaAlfaNumericaEMaiscula;

    }
}