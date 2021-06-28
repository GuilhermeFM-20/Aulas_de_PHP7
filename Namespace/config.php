<?php

spl_autoload_register(function($nomeClasse){
    
    var_dump($nomeClasse);

    $dirClass = "class";
    $fileName = $dirClass. DIRECTORY_SEPARATOR. $nomeClasse.".php";
    if(file_exists($fileName)){
        require_once($fileName);
    }else{
        echo "Não é válido";
    }
    });
    
