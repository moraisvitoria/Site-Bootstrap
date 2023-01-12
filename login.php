<?php
require_once 'head.php';
require_once 'menu.php';
include_once 'conexao.php';

session_start();
ob_start;
?>

<?php


//echo "senha".password_hash('123', PASSWORD_DEFAULT);

$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dadoslogin['btnlogin'])) {

    var_dump($dadoslogin);

 $buscalogin = "SELECT matricula, nome, email, senha
                        FROM aluno
                        WHERE email =:usuario
                        LIMIT 1";
           
 $resultado = $conn->prepare($buscalogin); 
 $resultado->bindParam(':usuario', $dadoslogin['usuario'], PDO::PARAM_STR);
 $resultado->execute();


 if(($resultado) AND ($resultado->rowCount()!= 0)){
     echo "cheguei"; 
    $resposta = $resultado->fetch(PDO::FETCH_ASSOC);
    var_dump($resposta); 
  

     if(password_verify($dadoslogin['senha'], $resposta['senha'])){
        header("Location: administrativo.php");
        
    $_SESSION['nome'] = $resposta['nome'] ;
    header("Location:administrativo.php");


      
}
else{
    $_SESSION['msg'] = "Erro: Usuário ou senha inválida!";

}

}
else{
$_SESSION['msg'] = "Erro: Usuário ou senha inválida!";

}
}


if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}

}       


?>


<form id="login-form" class="form" action="" method="POST">
                            
                            <div class="form-group">
                                <label for="username" class="text-info">Nome de Usuário:</label><br>
                                <input type="text" name="usuario" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit"  class="btn btn-info btn-md" value="Enviar" name="btnlogin">
                                <input type="submit" name="cadastro" class="btn btn-info btn-md" value="Cadastre-se">
                            </div>
                            
                        </form>