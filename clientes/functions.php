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
	  if (!empty($_POST['cliente'])) {
	    
	    $today = 
	      date_create('now', new DateTimeZone('America/Fortaleza'));
	    $cliente = $_POST['cliente'];
	    $cliente['data_atualizacao'] = $customer['data_criacao'] = $today->format("Y-m-d H:i:s");
	    
	    save('clientes', $cliente);
	    header('location: index.php');
	  }
}
?>