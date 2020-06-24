<?php
	session_start();
	include ("valida.php");
	unset(
		$_SESSION['usuario'],
		$_SESSION['nome'],
		$_SESSION['email'],
		$_SESSION['senha']
	);
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
        session_destroy();
	header("Location: index.php");
        
?>