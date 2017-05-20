<?php

abstract class CalcularFolhaAbstract implements CalcularFolhaInterface
{
    public final function calcular($mes, $ano, $empresa)
    {
        $folhaCalculada = new stdClass();
        if ($this->folhaJaCalculadaParaEmpresa($mes, $ano, $empresa)) {
            throw new Exception("Impossível recalcular para esta empresa neste mês e ano!");
        }
        if ($this->contabilidadeJaFechouPeriodo($mes, $ano)) {
            throw new Exception("Contablidade fechada neste mês e ano!");
        }
        $funcionáriosComProventos = $this->recuperarFuncionariosComProventos($mes, $ano, $empresa);
        foreach ($funcionáriosComProventos as $funcionárioComProvento) {
            $totalDeProventos = $this->totalDeProventos($funcionárioComProvento);
            if ($totalDeProventos > $this->limiteMaximoPrevisto()) {
                //faça outra coisa
            }
        }
        return $folhaCalculada;
    }

    public abstract function folhaJaCalculadaParaEmpresa($mes, $ano, $empresa);

    public abstract function contabilidadeJaFechouPeriodo($mes, $ano);

    public abstract function recuperarFuncionariosComProventos($mes, $ano, $empresa);

    public abstract function limiteMaximoPrevisto();

    public abstract function totalDeProventos($funcionárioComProvento);
}