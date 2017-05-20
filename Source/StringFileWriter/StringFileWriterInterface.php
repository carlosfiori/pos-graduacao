<?php


interface StringFileWriterInterface
{
    public function gravar(string $nomeDoArquivo, string $texto):void;
}