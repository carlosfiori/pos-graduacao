<?php

require_once "Source/StringFileWriter/StringFileWriterInterface.php";
require_once "Source/StringFileWriter/StringFileWriter.php";
require_once "Source/StringFileWriter/GzipeedStringFileWriterDecorator.php";

$file = new GzipeedStringFileWriterDecorator(new StringFileWriter());

$file->gravar('decorator.txt', 'Meu texto');
