<?php
require_once 'conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center login-text">
          <h2>Faça login</h2>
        </div>
      </div>
    

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>  
        <div class="col-md-4">

  <form id="login-form" class="form" action=""method="post">

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" name="usuario" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Nome de Usuário</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="senha" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Senha</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31">Lembrar-me</label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Esqueceu a senha?</a>
    </div>
  </div>
  <!-- Submit button -->
     <button type="button" class="btn btn-primary btn-block mb-4 button-sing-in">Entrar</button>
     </div>
  </form>
</div>
    <div class="col-md-4"></div>
  </div>
</div>

