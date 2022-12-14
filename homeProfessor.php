<?php

# Iniciar sessão teste
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'headerProfessor.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'cad_praticas';
	}
}
else{
	$pagina = 'index';
}

switch($pagina){
	case 'cad_praticas': include 'praticasProfessor\cad_praticas.php'; break;
	case 'cad_praticas2': include 'praticasProfessor\cad_praticas2.php'; break;
	case 'cad_praticas3': include 'praticasProfessor\cad_praticas3.php'; break;
	case 'avaliar': include 'avalicaoProfessor\avaliar.php'; break;
	case 'avaliar2': include 'avalicaoProfessor\avaliar2.php'; break;
	case 'avaliar3': include 'avalicaoProfessor\avaliar3.php'; break;
	case 'conta': include 'conta/conta.php'; break;
	case 'index': include 'index.php'; break;
	default: include 'homeProfessor.php'; break;
}

# Rodapé
include 'footer.php';
