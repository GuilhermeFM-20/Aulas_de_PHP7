<?php

function trataNome($nome){

    if(!$nome){
        throw new Exception('Nome não informado',100);
    }

    echo ucfirst($nome)."<br>";

}

try{

    trataNome("João");
    trataNome("");

}catch(Exception $e){

    echo $e->getMessage();

}finally{

    echo "<br> Finalizado!";

}
