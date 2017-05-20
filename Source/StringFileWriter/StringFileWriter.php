<?php


class StringFileWriter implements StringFileWriterInterface
{

    public function gravar(string $nomeDoArquivo, string $texto): void
    {
        file_put_contents($nomeDoArquivo, $texto);
    }
}