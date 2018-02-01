<?php

require_once("config.php");

$usuario = new Usuario();
$usuario->loadbyId(32);
$usuario->delete();

echo $usuario;

//Altera um usuário
//$usuario = new Usuario();
//$usuario->loadbyId(29);
//$usuario->update("professora", "!@qwer3456");
//echo $usuario;


//Criando um novo usuario
//$aluno = new Usuario("aluno", "@aluno");
//$aluno->insert();
//echo $aluno;

//Carrega o usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("j");
//echo json_encode($search);

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = usuario::getlist();
//echo json_encode($lista);





//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);





?>