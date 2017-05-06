<?php
mysqli_report(MYSQLI_REPORT_STRICT);

//abrir conexao
function open_database() {
	try {
		$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
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
 *  Validar Login
 */
function validar_login($usuario,$senha){
  $db = open_database();
      
  try{
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";
    $result = $db->query($sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if($count == 1) {         
         $_SESSION['usuario'] = $row['nome'];
         return true;
      }else {
         return false;
      }
  }catch (Exception $e) {
    $_SESSION['msg'] = $e->GetMessage();    
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
  $data_modificacao = $data_criacao;
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $telefone = $_POST['telefone'];
  $celular = $_POST['celular'];

    
  
  $sql = "INSERT INTO clientes(nome,cpf_cnpj,nascimento,endereco,bairro,cep,cidade,estado,telefone,celular,data_criacao,data_modificacao) VALUES('$nome','$cpf_cnpj','$nascimento','$endereco','$bairro','$cep','$cidade','$estado','$telefone','$celular','$data_criacao','$data_modificacao');";

  

  if ($database->query($sql) === TRUE) {
    echo "Cliente Adicionado Com Sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $database->error;
}
  
  close_database($database);
}

function update($table,$id,$cliente) {

  $database = open_database();
  
  $today = date_create('now', new DateTimeZone('America/Fortaleza'));

  
  $nome = $cliente['nome'];
  $cpf_cnpj = $cliente['cpf_cnpj'];
  $nascimento = $cliente['nascimento'];
  $endereco = $cliente['endereco'];
  $bairro = $cliente['bairro'];
  $cep = $cliente['cep'];
  $data_criacao = $cliente['data_criacao'];
  $data_modificacao = $today->format("Y-m-d H:i:s");
  $cidade = $cliente['cidade'];
  $estado = $cliente['estado'];
  $telefone = $cliente['telefone'];
  $celular = $cliente['celular'];

  $sql = "UPDATE clientes SET nome='$nome',cpf_cnpj='$cpf_cnpj',nascimento='$nascimento',endereco='$endereco',bairro='$bairro',cep='$cep',cidade='$cidade',estado='$estado',telefone='$telefone',celular='$celular',data_criacao='$data_criacao',data_modificacao='$data_modificacao' WHERE id=$id;";

   $db->query($sql);
  

  	if ($database->query($sql) === TRUE) {
    	echo "Cliente Adicionado Com Sucesso!";
	} else {
    	echo "Error: " . $sql . "<br>" . $database->error;
	}
  
  close_database($database);
}

?>