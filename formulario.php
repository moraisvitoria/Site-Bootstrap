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
            <label for="nome">nome e sobrenome</label>
            <input type="text" class="form-control" name="nome" placeholder="Seu nome e sobrenome">    
          </div>
        </div>      
        
        <div class="col-md-2">        
          <div class="form-group">            
            <label for="dn">data de nascimento</label>
            <input type="date" class="form-control" name="dn">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label for="telefone">telefone</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')" name="telefone">
          </div>
        </div>

        <div class="col-md-3">        
          <div class="form-group">            
            <label for="cpf">cpf</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');" name="cpf">
          </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="rg">RG</label>
        <input type="text" class="form-control" name="rG">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="exampleInputEmail1">endereço de email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="endereço de Email">                   
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
        <label for="cep">cep</label>
        <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);" onkeypress="$(this).mask('00000-000');" name="cep">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="endereco">endereço</label>
        <input type="text" class="form-control" id="rua" name="rua">
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <label for="numero">numero</label>
        <input type="text" class="form-control" name="numero">    
      </div>
    </div> 

    <div class="col-md-4">
      <div class="form-group">
        <label for="complemento">complemento</label>
        <input type="text" class="form-control" placeholder="Opcional" name="complemento">
      </div>
    </div>
  </div>

   <div class="col-md-4">
      <div class="form-group">
        <label for="complemento">foto</label>
        <input type="text" class="form-control" placeholder="Opcional" name="foto">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="bairro">bairro</label><p>
        <input type="text" class="form-control" id="bairro" name="bairro" >
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <label for="cidade">cidade</label><p>
        <input type="text" class="form-control" id="cidade" name="cidade" name="cidade">
      </div>
    </div>

    <div class="col-md-2  ">
      <div class="form-group">
        <label for="uf">estado</label><p>
        <input type="text" class="form-control"  name="estado">
      </div>
    </div>
  </div>

  <div class="col-md-2  ">
      <div class="form-group">
        <label for=>senha</label><p>
        <input type="text" class="form-control"  name="senha" ">
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
