<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("INSERT iNTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "José";
$senha = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$senha);

$stmt->execute();

echo '<b style="color:red">Executado com sucesso!</b>';
