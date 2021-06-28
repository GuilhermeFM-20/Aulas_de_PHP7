<?php
$nome = "Hcode";
$site = 'www.Hcode.com.br';

$ano = 1965;
$salario = 5000.99;
$bloqueado = false;
//////////////////////////
$frutas = array("Abacaxi ","Laranja ","manga ");

#echo $frutas[1];

$nascimento = new DateTime();

#var_dump($nascimento);

$arquivo = fopen("exemplo_03.php", "r");

var_dump($arquivo);