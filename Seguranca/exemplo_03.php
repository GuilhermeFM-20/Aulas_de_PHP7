<?php

$paste = "arquivos";

$permissao =  "0775";

if(!is_dir($paste)){

    mkdir($paste);
    echo "Diretório criado com sucesso!";
}

?>
