<?php


class CalcularFolha extends CalcularFolhaAbstract
{

    public function contabilidadeJaFechouPeriodo($mes, $ano)
    {
        return false;
    }

    public function folhaJaCalculadaParaEmpresa($mes, $ano, $empresa)
    {
        return false;
    }

    public function limiteMaximoPrevisto()
    {
        return 15000.15;
    }

    public function recuperarFuncionariosComProventos($mes, $ano, $empresa)
    {
        return [];
    }

    public function totalDeProventos($funcionárioComProvento)
    {
        return 222;
    }
}