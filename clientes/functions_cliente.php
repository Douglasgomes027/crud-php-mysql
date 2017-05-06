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

		/**
	 *	Atualizacao/Edicao de Cliente
	 */
	function editar_cliente() {
	   

  	if (isset($_GET['id'])) {
    		$id = $_GET['id'];
    	if (isset($_POST['cliente'])) {
      	$cliente = $_POST['cliente'];
      	
      	update('clientes', $id, $cliente);
      	header('location: index.php');
    		}else {
      		global $cliente;
      		$cliente = find('clientes', $id);
    		} 
  	} else {
    	header('location: editar_cliente.php');
  	}
	}
?>