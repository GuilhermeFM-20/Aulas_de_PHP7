<?php 

$filename = "usuarios.csv";

if(file_exists($filename)){

    $file = fopen($filename,"r");

    $headers = explode(";",fgets($file));

    $data = array();

        while($rows = fgets($file)){
        
            $row = explode(";",$rows);

            $linha = array();

                for($i = 0; $i < count($headers); $i++){

                    $linha[$headers[$i]] = $row[$i];

                }

            array_push($data, $linha);
            
        }

    fclose($file);
    
    echo json_encode($data);

}