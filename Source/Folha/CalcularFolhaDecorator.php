<?php


class CalcularFolhaDecorator implements CalcularFolhaInterface
{
    private $folha;

    function __construct(CalcularFolha $folha)
    {
        $this->folha = $folha;
    }

    public function calcular($mes, $ano, $empresa)
    {
        $this->folha->calcular(1, 2, 3);

        sleep(2);
        $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
        $hours = (int)($minutes = (int)($seconds = (int)($milliseconds = (int)($time * 1000)) / 1000) / 60) / 60;
        $tempo = round($hours) . 'h ' . ($minutes % 60) . 'm ' . ($seconds % 60) . (($milliseconds === 0) ? 's' : ',' . rtrim($milliseconds % 1000, '0') . "s");
        echo "<br><h3> executado em $tempo.</h3>";
    }

}