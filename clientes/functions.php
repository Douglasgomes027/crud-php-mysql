<?php

	require_once('../config.php');
	require_once(DBAPI);
	
	$clientes= null;
	$cliente = null;

	/**
 	*  Listagem de Clientes
 	*/
	function index() {
		global $clientes;
		$clientes = find_all('clientes');
	}

	/**
	 *  Cadastro de Clientes
	 */
	function adicionar_cliente() {
	  if (!empty($_POST['nome'] && $_POST['cpf_cnpj'] && $_POST['nascimento'] && $_POST['endereco'])
	  	&& $_POST['bairro'] && $_POST['nascimento'] && $_POST['cep'] && $_POST['cidade'] && $_POST['telefone'] && $_POST['celular']) {	    
	    
	    save();
	    
	  }   
	    
	}
?>