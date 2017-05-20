<?php

trait CoisaSeguraComAbrirEFechar
{

    protected $aberto;
    private $senha;


    public function abrir(string $senha)
    {

        if ($this->senha->diferente($senha)) {
            throw new SenhaIncorretaException();
        }

        echo 'Abriu<br>';

        $this->aberto = true;
    }

    public function fechar(string $senha)
    {
        if ($this->senha->diferente($senha)) {
            throw new SenhaIncorretaException();
        }

        echo 'Fechou<br>';
        $this->aberto = false;
    }
}