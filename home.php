<?php

# Iniciar sessão teste
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'praticas';
	}
}
else{
	$pagina = 'index';
}

switch($pagina){
	case 'praticas': include 'praticas/praticas.php'; break;
	case 'praticas2': include 'praticas/praticas2.php'; break;
	case 'praticas3': include 'praticas/praticas3.php'; break;
	case 'pratica_realizando': include 'praticas/pratica_realizando.php'; break;
	case 'pratica_iniciar': include 'praticas/pratica_iniciar.php'; break;
	case 'acompanhamento': include 'acompanhamento/acompanhamento.php'; break;
	case 'acompanhamento2': include 'acompanhamento/acompanhamento2.php'; break;
	case 'reservas': include 'reservas/reservas.php'; break;
	case 'reservas2': include 'reservas/reservas2.php'; break;
	case 'conta': include 'conta/conta.php'; break;
	case 'index': include 'index.php'; break;
	default: include 'home.php'; break;
}

# Rodapé
include 'footer.php';
