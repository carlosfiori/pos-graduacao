<?php

require_once "Source/TemplateMethod/CalcularFolhaAbstract.php";
require_once "Source/TemplateMethod/CalcularFolha.php";
$folha= new CalcularFolha();

$folha->calcular(1, 2, 3);