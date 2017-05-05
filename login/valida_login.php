<?php 
	session_start();
	require_once('../inc/database.php');
	require_once('../config.php');



	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];

	
	// MySQL injection
	$usuario = stripslashes($usuario);
	$senha = stripslashes($senha);


	if(validar_login($usuario,$senha)){
		header("location: ../index.php");
	}else{
		header("location: login.php");
        $_SESSION['msg'] = "Usuário ou Senha Inválido";
	}
?>