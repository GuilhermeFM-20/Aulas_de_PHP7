<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "João";
$senha = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo '<b style="color:red">Alterado com sucesso!</b>';

