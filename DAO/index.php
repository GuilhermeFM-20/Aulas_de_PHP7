<?php

require_once"config.php";
//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("Jo");

//echo json_encode($search);

//$usuario = new Usuario();
//$usuario->login("Joao","123654");

//echo $usuario

//$aluno = new Usuario("aluno","@luno");
//
//$aluno->insert();
//
//echo $aluno;

/*$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("professor","%$&@*");

echo $usuario;*/

$usuarios = new Usuario();
$usuarios->loadById(7);
$usuarios->update('professor', '!@#!@$');
echo $usuarios;