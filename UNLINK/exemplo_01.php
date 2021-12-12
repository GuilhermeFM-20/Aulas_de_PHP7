<?php

$file = fopen("Teste.txt","w+");

fclose($file);

unlink("Teste.txt");

echo "Arquivo esxcluido com sucesso!";