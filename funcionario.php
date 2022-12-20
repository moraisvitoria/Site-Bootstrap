<?php
require_once 'head.php';
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Formulário do Aluno</h1>
    </div>
  </div>
</div>

<form>

    <div class="container form-aluno">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" placeholder="Seu nome">    
          </div>
        </div>        
            
        <div class="col-md-4">
          <div class="form-group">
            <label for="nome">Sobrenome</label>
            <input type="text" class="form-control" placeholder="Seu sobrenome">    
          </div>
        </div>       
        
        <div class="col-md-4">        
          <div class="form-group">            
            <label for="dn">Data de Nascimento</label>
            <input type="date" class="form-control">
          </div>
        </div>
    </div>
        
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')">
          </div>
        </div>

        <div class="col-md-4">        
          <div class="form-group">            
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" onkeypress="$(this).mask('00000-000');">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label for="numerocasa">N° Casa</label>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group end-form">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group end-form">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
           </div>
        </div>
      </div>
      
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="sexo">Sexo</label><p>
          <input type="radio" name="optradio" checked> Feminino           
          <input type="radio" name="optradio"> Masculino
        </div>
      </div>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  
</form>

<?php
require_once 'footer.php';
?>
