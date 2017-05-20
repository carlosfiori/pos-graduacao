<?php
echo "<pre>";

require_once "./Source/Cofre/SenhaIncorretaException.php";
require_once "./Source/Cofre/Senha.php";
require_once "./Source/Cofre/CoisaSeguraComAbrirEFechar.php";
require_once "./Source/Cofre/ValidadorDeSenha.php";
require_once "./Source/Cofre/Cofre.php";
require_once "./Source/Cofre/Senha.php";
require_once "./Source/Cofre/Maleta.php";
require_once "./Source/Cofre/ValidadorDeSenhaMaiorQue.php";
require_once "./Source/Cofre/ValidadorDeSenhaMaiorQueAlfaNumerica.php";
require_once "./Source/Cofre/ValidadorDeSenhaMaiorQueAlfaNumericaMaiusculo.php";
require_once "./Source/Cofre/ValidadorDeSenhaComposite.php";
require_once "./Source/Cofre/ValidadorDeSenhaTemLetras.php";
require_once "./Source/Cofre/ValidadorDeSenhaTemNumero.php";
require_once "./Source/Cofre/ValidadorDeSenhaSemValidacao.php";
require_once "./Source/Cofre/CofreFactory.php";
require_once "./Source/Cofre/CofreDigitalV2.php";
require_once "./Source/Cofre/CofreAnalogico.php";


$cofreSemValidacao = CofreFactory::criarCofreSemValidacao('CofreDigital', 'aaaaa');
$cofreSemValidacao->abrir('aaaaa');
$cofreComValidacao = CofreFactory::criarCofreComValidacao('CofreAnalogico','qwe1', new ValidadorDeSenhaTemNumero());
$cofreComValidacao->abrir('qwe1');

