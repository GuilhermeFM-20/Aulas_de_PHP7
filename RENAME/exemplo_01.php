<?php

$dir_1 = "folder_1";
$dir_2 = "folder_2";

if(!is_dir($dir_1)){
    mkdir($dir_1);
}

if(!is_dir($dir_2)){
    mkdir($dir_2);
}

$filename = "Redame.txt";

if(!file_exists($dir_1.DIRECTORY_SEPARATOR.$filename)){
    $file = fopen($dir_1.DIRECTORY_SEPARATOR.$filename,"w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

rename($dir_1.DIRECTORY_SEPARATOR.$filename,$dir_2.DIRECTORY_SEPARATOR.$filename);

echo "Caminho anterior:".$dir_1.DIRECTORY_SEPARATOR.$filename."<br>".
     "Novo  Caminho:".$dir_2.DIRECTORY_SEPARATOR.$filename;