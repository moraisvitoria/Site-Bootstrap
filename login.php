<?php
require_once 'head.php';
include_once 'conexao.php';
?>

<?php
$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($dadoslogin['btnlogin'])) {
  $buscalogin = "SELECT matricula, nome, email, senha
                 FROM aluno
                 WHERE email =:usuario
                 LIMIT 1";

$resultado= $conn->prepare($buscalogin);
$resultado->bindParam(':usuario', $dadoslogin['usuario'],
PDO::PARAM_STR);
$resultado->execute();

if(($resultado) AND ($resultado->rowCount() !=0)){
  $resposta = $resultado->fetch(PDO::FETCH_ASSOC);
  var_dump($resposta);

if(password_verify($dadoslogin['senha'], $resposta['senha'])){
  header("Location: administrativo.php");
  }
  else{
    echo "Usuário ou senha Inválido!";
  }

else {
  echo "Usuário ou senha Inválido"
 }
}








// rowCount = numero de linha //
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
    <div class="form-group">
      <input type="submit"  class="btn btn-info btn-md" value="Entrar" name="btnlogin">
      <input type="submit" name="cadastro" class="btn btn-info btn-md" value="Cadastre-se">
    </div>
     </div>
     
  </form>
</div>
    <div class="col-md-4"></div>
  </div>
</div>




