<?php 
  require_once('functions_cliente.php'); 
  adicionar_cliente();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="adicionar_cliente.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <input type="text" name="nome" placeholder="Nome" class="form-control"">
    </div>

    <div class="form-group col-md-3">
      <input type="text" name="cpf_cnpj" placeholder="Cpf/Cnpj" class="form-control"">
    </div>

    <div class="form-group col-md-2">
      <input type="text" name="nascimento" placeholder="Data de Nascimento" class="form-control"">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <input type="text" name="endereco" placeholder="Endereço" class="form-control"">
    </div>

    <div class="form-group col-md-3">
      <input type="text" name="bairro" placeholder="Bairro" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="cep" placeholder="Cep" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" iname="data_criacao" placeholder="Data Cadastro" class="form-control" disabled>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <input type="text" name="cidade" placeholder="Cidade" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="estado" placeholder="Estado" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="telefone" placeholder="Telefone" class="form-control"">
    </div>
    
    <div class="form-group col-md-2">
      <input type="text" name="celular" placeholder="Celular" class="form-control"">
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