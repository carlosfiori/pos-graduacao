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

        echo 'Abriu';

        $this->aberto = true;
    }

    public function fechar(string $senha)
    {
        if ($this->senha->diferente($senha)) {
            throw new SenhaIncorretaException();
        }

        echo 'Fechou';
        $this->aberto = false;
    }
}