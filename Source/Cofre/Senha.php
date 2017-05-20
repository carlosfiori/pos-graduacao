<?php

class Senha
{
    private $valor;

    function __construct($valor, ValidadorDeSenha $validador)
    {

        if (is_null($valor)) {
            throw new Exception("Senha não pode ser null");
        }

        if (!$validador->validar($valor)) {
            throw new Exception("Senha não confere com o tipo");
        }

        $this->valor = $valor;
    }

    public function diferente(string $senha): bool
    {
        return !$this->igual($senha);
    }

    public function igual($senha)
    {
        return $this->valor === $senha;
    }

}