<?php
/*
$anoNascimento = 1990;
$nomeCompleto = "Guilherme Freire";
//Comentário 1
#Comentário 2

Comentário 3
*/
$nome_1 = "João ";
$sobrenome = "Rangel ";
echo $nome_1.$sobrenome;
exit;
echo $nome_1."<br>";
//unset($nome_1);
if(isset($nome_1)){
    echo "Variável existe! E o valor dela é:".$nome_1;
    }else{
        echo"Variável não existe";
    }

