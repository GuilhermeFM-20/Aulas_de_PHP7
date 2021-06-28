<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}



$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (?,?)");

$stmt->bind_param("ss", $login, $senha);

$login = "user";
$senha = "123456";

$stmt->execute();

$login = "root";
$senha = "toor";

$stmt->execute(); 