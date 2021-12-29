<?php

$id = (isset($_GET['id']))?$_GET['id']:1;

if(!is_numeric($_GET['id']) || strlen($_GET['id'] > 5)){
    exit("Pegamos você!");
}

$conn = mysqli_connect("localhost","root","","dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id";

$exec = mysqli_query($conn,$sql);

while($resultado = mysqli_fetch_object($exec)){

    var_dump($resultado);

}