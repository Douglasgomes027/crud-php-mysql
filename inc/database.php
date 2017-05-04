<?php
mysqli_report(MYSQLI_REPORT_STRICT);

//abrir conexao
function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $conn;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
	}
}

//fechar conexao
function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $id = null ) {
  
	$database = open_database();
	$found = null;
	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_assoc();
	    }
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_all(MYSQLI_ASSOC);
        
        /* Metodo alternativo
        $found = array();
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	close_database($database);
	return $found;
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
  return find($table);
}

/**
*  Insere um registro no BD
*/
function save() {
  $database = open_database();

  $today = date_create('now', new DateTimeZone('America/Fortaleza'));
  
  $nome = $_POST['nome'];
  $cpf_cnpj = $_POST['cpf_cnpj'];
  $nascimento = $_POST['nascimento'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $cep = $_POST['cep'];
  $data_criacao = $today->format("Y-m-d H:i:s");
  $data_atualizacao = $data_criacao;
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $telefone = $_POST['telefone'];
  $celular = $_POST['celular'];

    
  
  $sql = "INSERT INTO clientes(nome,cpf_cnpj,nascimento,endereco,bairro,cep,cidade,estado,telefone,celular,data_criacao,data_atualizacao) VALUES('$nome','$cpf_cnpj','$nascimento','$endereco','$bairro','$cep','$cidade','$estado','$telefone','$celular','$data_criacao','$data_atualizacao');";

  

  if ($database->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $database->error;
}
  
  close_database($database);
}

?>