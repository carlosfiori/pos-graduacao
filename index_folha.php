<?php

require_once "Source/Folha/CalcularFolhaInterface.php";
require_once "Source/Folha/CalcularFolhaAbstract.php";
require_once "Source/Folha/CalcularFolha.php";
require_once "Source/Folha/CalcularFolhaDecorator.php";


$folha = new CalcularFolha();

$folhaDecorator = new CalcularFolhaDecorator($folha);
$folhaDecorator->calcular(1, 2, 3);
