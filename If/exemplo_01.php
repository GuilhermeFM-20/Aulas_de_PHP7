<?php

$qualASuaIdade =  18;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){
    echo "Criança";
    }else if($qualASuaIdade < $idadeMaior){
        echo "Adolencente";
        }else if($qualASuaIdade < $idadeMelhor){
            echo "Adulto";
            }else{
                echo "idoso";
                }

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";