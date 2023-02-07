<?php
require_once 'head.php';

?>
  
  <form method="post" action="controlealuno.php" enctype="multipart/form-data">
    <div class="container-fluid formulario-aluno">
      <div class="row">
        <div class="col-md-12 text-center titulo">
          <h1>Cadastro de Aluno</h1>
        </div>
       </div>
    </div>

  <form>

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
            <input type="text" class="form-control" name="telefone" onkeypress="$(this).mask('(00)00000-0000')">
          </div>
        </div>

        <div class="col-md-3">        
          <div class="form-group">            
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" onkeypress="$(this).mask('000.000.000-00')">
          </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="rg">RG</label>
        <input type="text" class="form-control" name="rg">
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="exampleInputEmail1">Endereço de e-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Seu email">                   
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="sexo">Gênero</label><p>
        <input type="radio" name="sexo" checked value="F"> Feminino           
        <input type="radio" name="sexo"> Masculino
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);" onkeypress="$(this).mask('00000-000');">
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
        <input type="text" class="form-control" name="numero">    
      </div>
    </div> 

    <div class="col-md-4">
      <div class="form-group">
        <label for="complemento">Complemento</label>
        <input type="text" class="form-control" name="complemento" placeholder="Opcional">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="bairro">Bairro</label><p>
        <input type="text" class="form-control" id="bairro" name="bairro">
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <label for="cidade">Cidade</label><p>
        <input type="text" class="form-control" id="cidade" name="cidade">
      </div>
    </div>

    <div class="col-md-2  ">
      <div class="form-group">
        <label for="uf">Estado</label><p>
        <input type="text" class="form-control" id="uf" name="uf">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="senha">Informe uma senha</label>
        <input type="senha" class="form-control" id="senha" aria-describedby="emailHelp" name="senha">
      </div>
    </div>

    <div class="col-md-5">
      <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto">
      </div>
    </div>
  </div> 

  <div class="row">    
    <div class="col-md-12 text-center">
      <input type="submit" class="btn btn-primary" name="btncad" value="Cadastrar">
    </div>
  </div>
</div>

</form>

<?php
  require_once 'footer-admin.php';
?>