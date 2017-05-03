<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php 
	$db = open_database(); 
	
	if ($db) {
		echo '<h1>Banco de Dados Conectado!</h1>';
		echo '<h2>Hello World, Database<h2>';
	} else {
		echo '<h1>ERRO: Não foi possível Conectar!</h1>';
	}
?>