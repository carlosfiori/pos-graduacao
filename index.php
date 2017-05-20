<?php
echo "<pre>";
ini_set('display_errors', 1);

require_once "./Source/SenhaIncorretaException.php";
require_once "./Source/Senha.php";
require_once "./Source/CoisaSeguraComAbrirEFechar.php";
require_once "./Source/ValidadorDeSenha.php";
require_once "./Source/Cofre.php";
require_once "./Source/Senha.php";
require_once "./Source/Maleta.php";
require_once "./Source/ValidadorDeSenhaMaiorQue.php";
require_once "./Source/ValidadorDeSenhaMaiorQueAlfaNumerica.php";
require_once "./Source/ValidadorDeSenhaMaiorQueAlfaNumericaMaiusculo.php";
require_once "./Source/ValidadorDeSenhaComposite.php";
require_once "./Source/ValidadorDeSenhaTemLetras.php";
require_once "./Source/ValidadorDeSenhaTemNumero.php";
require_once "./Source/ValidadorDeSenhaSemValidacao.php";
require_once "./Source/CofreFactory.php";
require_once "./Source/CofreDigitalV2.php";
require_once "./Source/CofreAnalogico.php";


$cofreSemValidacao = CofreFactory::criarCofreSemValidacao('CofreDigital', 'aaaaa');
$cofreSemValidacao->abrir('aaaaa');
$cofreComValidacao = CofreFactory::criarCofreComValidacao('CofreAnalogico','qwe1', new ValidadorDeSenhaTemNumero());
$cofreComValidacao->abrir('qwe1');

