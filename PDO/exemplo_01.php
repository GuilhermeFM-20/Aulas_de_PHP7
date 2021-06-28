<?php

$conn = new PDO("mysql:dbname=dbphp7;host:localhost","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){
    foreach ($row as $key => $value){
        echo "<b>$key:</b> $value<br>";
    }
    echo '=========================================<br>';
}
    
