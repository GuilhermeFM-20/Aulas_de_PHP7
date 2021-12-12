 <?php

if(!is_dir("images")){
    mkdir("images");
} 

foreach (scandir("images") as $arquivos) {
    
    if(!in_array($arquivos,array(".",".."))){

        echo "Arquivos excluídos: $arquivos<br>";
        
        unlink("images/".$arquivos);
    }

}

