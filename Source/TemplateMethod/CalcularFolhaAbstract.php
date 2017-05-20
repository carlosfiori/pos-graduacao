<?php

abstract class CalcularFolhaAbstract
{

    public final function calcular($mes, $ano, $empresa)
    {
        if ($this->folhaJaCalculadaParaEmpresa($mes, $ano, $empresa)) {
            throw new Exception("Já calculado");
        }
    }

    public abstract function folhaJaCalculadaParaEmpresa($mes, $ano, $empresa);
}