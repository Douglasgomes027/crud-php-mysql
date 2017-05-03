<?php 
  require_once('functions.php'); 
  adicionar_cliente();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="adicionar_cliente.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <input type="text" name="cliente['nome']" placeholder="Nome" class="form-control"">
    </div>

    <div class="form-group col-md-3">
      <input type="text" name="cliente['cpf_cnpj']" placeholder="Cpf/Cnpj" class="form-control"">
    </div>

    <div class="form-group col-md-2">
      <input type="text" name="cliente['nascimento']" placeholder="Data de Nascimento" class="form-control"">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <input type="text" name="cliente['endereco']" placeholder="Endereço" class="form-control"">
    </div>

    <div class="form-group col-md-3">
      <input type="text" name="cliente['bairro']" placeholder="Bairro" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="cliente['cep']" placeholder="Cep" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" iname="cliente['data_criacao']" placeholder="Data Cadastro" class="form-control" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <input type="text" name="cliente['cidade']" placeholder="Cidade" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="cliente['estado']" placeholder="Estado" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="cliente['telefone']" placeholder="Telefone" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="cliente['celular']" placeholder="Celular" class="form-control"">
    </div>  
    
    
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>