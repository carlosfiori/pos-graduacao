<?php


class ValidadorDeSenhaComposite implements ValidadorDeSenha
{

    private $validadores;

    function __construct($validadores)
    {

        foreach ($validadores as $validador) {
            if (!$validador instanceof ValidadorDeSenha) {
                throw new Exception("Tipo de validador invalido");
            }
        }

        $this->validadores = $validadores;
    }

    public function validar($senha)
    {
        foreach ($this->validadores as $validador) {
            if (!$validador->validar($senha)) {
                return false;
            }
        }
        return true;
    }
}