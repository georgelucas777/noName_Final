<?php 

include '../db.php';

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' and SENHA = '$senha'";

$consulta = mysqli_query($conexao, $query);
$row = mysqli_fetch_array($consulta);
$nome = $row['nome'];
$sobrenome = $row['sobrenome'];
$tipousuario = $row['tipo'];

if(mysqli_num_rows($consulta) == 1){

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	$_SESSION['nome'] = $nome;
	$_SESSION['sobrenome'] = $sobrenome;
	$_SESSION['tipousuario'] = $tipousuario;

	if($tipousuario == 2){
		header('location:../home.php');
	} else if($tipousuario == 3){
		header('location:../homeProfessor.php');
	}

	
}
else{
	header('location:login.php?erro');
}