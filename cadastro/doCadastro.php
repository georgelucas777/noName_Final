<?php 

include '../db.php';

$tipousuario = $_POST['tipousuario'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$query = "INSERT INTO USUARIOS(tipo, nome, sobrenome, usuario, senha, ativo) VALUES($tipousuario, '$nome', '$sobrenome', '$usuario', '$senha', 'T')";

try {
	mysqli_query($conexao, $query);
	header("Location:cadastroSucess.php");

} catch (Exception $e){
	echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

