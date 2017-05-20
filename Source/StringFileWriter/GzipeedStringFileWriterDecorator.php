<?php

class GzipeedStringFileWriterDecorator implements StringFileWriterInterface
{

    private $fileWriter;

    function __construct(StringFileWriterInterface $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function gravar(string $nomeDoArquivo, string $texto): void
    {
        $textoComprimido = gzcompress(gzencode($texto));
        $this->fileWriter->gravar($nomeDoArquivo, $textoComprimido);
    }
}