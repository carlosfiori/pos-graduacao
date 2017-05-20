<?php
//echo "<pre>";
ini_set('display_errors', 1);

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


$cofre = new Cofre("adssd23", new ValidadorDeSenhaMaiorQue(6));

$cofre2 = new Cofre("poiuyt2", new ValidadorDeSenhaMaiorQueAlfaNumerica(6));

$cofre3 = new Cofre("QQWQWERTY2Q", new ValidadorDeSenhaMaiorQueAlfaNumericaMaiusculo(10));

$cofre4 = new Cofre("aasdasdasd2", new ValidadorDeSenhaComposite([new ValidadorDeSenhaTemLetras(), new ValidadorDeSenhaTemNumero()]));

$cofreSemValidacao = new Cofre('aaaaa');

$cofreSemValidacao->abrir('aaaaa');


//echo '<br>';
//$cofre->abrir("adssd23");
//echo '<br>';
//$cofre->fechar("adssd23");
//echo '<br>';
//
//$cofre2->abrir("poiuyt2");
//echo '<br>';
//$cofre2->fechar("poiuyt2");
//echo '<br>';
//
//$cofre3->abrir("QQWQWERTY2Q");
//echo '<br>';
//$cofre3->fechar("QQWQWERTY2Q");
//
//echo '<br>';
//$cofre4->abrir("aasdasdasd2");
//echo '<br>';
//$cofre4->fechar("aasdasdasd2");


