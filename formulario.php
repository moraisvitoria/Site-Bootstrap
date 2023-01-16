<?php
require_once 'head.php';
require_once 'menu.php';
?>

  <div class="container-fluid cliente">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Cadastro de Aluno</h1>
      </div>
    </div>
  </div>

<form method="post" action="controlealuno.php">

<div class="container form-aluno">
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label for="nome">Nome e sobrenome</label>
            <input type="text" class="form-control" name="nome" placeholder="Seu nome e sobrenome">    
          </div>
        </div>      
        
        <div class="col-md-2">        
          <div class="form-group">            
            <label for="dn">Data de Nascimento</label>
            <input type="date" class="form-control" name="dn">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')" name="Telefone">
          </div>
        </div>

        <div class="col-md-3">        
          <div class="form-group">            
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" name="CPF">
          </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="rg">RG</label>
        <input type="text" class="form-control" name="RG">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="Endereço de Email">                   
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="sexo">Gênero</label><p>
        <input type="radio" name="sexo" checked value="F"> Feminino           
        <input type="radio" name="sexo" value="M"> Masculino
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);" onkeypress="$(this).mask('00000-000');" name="cep">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" id="rua" name="rua">
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="numero">Número</label>
        <input type="text" class="form-control" name="Número">    
      </div>
    </div> 

    <div class="col-md-4">
      <div class="form-group">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" placeholder="Opcional" name="Complemento">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="bairro">Bairro</label><p>
        <input type="text" class="form-control" id="bairro" name="bairro" >
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <label for="cidade">Cidade</label><p>
        <input type="text" class="form-control" id="cidade" name="cidade" name="Cidade">
      </div>
    </div>

    <div class="col-md-2  ">
      <div class="form-group">
        <label for="uf">Estado</label><p>
        <input type="text" class="form-control" id="uf" name="uf" name="uf">
      </div>
    </div>
  </div>
  
  <div class="row">    
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Enviar</button name='btncad">
    </div>
  </div>
</div>


   
</form>

<?php
require_once 'footer.php';
?>
