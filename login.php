<?php
  include_once 'conexao.php';
  require_once 'head.php';

  session_start();
	ob_start();
?>

<?php

//echo "senha".password_hash(123, PASSWORD_DEFAULT);

$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dadoslogin['btnlogin'])) {

        $buscalogin = "SELECT matricula, nome, email,senha
                       FROM aluno 
                       WHERE email =:usuario and status = 'A'
                       LIMIT 1";

        $resultado= $conn->prepare($buscalogin);
        $resultado->bindParam(':usuario', $dadoslogin['usuario'], PDO::PARAM_STR);
        $resultado->execute();

        if(($resultado) AND ($resultado->rowCount() != 0)){
            $resposta = $resultado->fetch(PDO::FETCH_ASSOC);
            //var_dump($resposta);
            //var_dump($dadoslogin);

            if(password_verify($dadoslogin['senha'], $resposta['senha'])){
                
                $_SESSION['nome'] = $resposta['nome'];
                $_SESSION['matricula'] = $resposta["matricula"];

                if($_SESSION["carrinho"]==true){
                  
                    header("Location: frmcarrinho.php");  

                } else {
                    header("Location: administrativo.php");
                }

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

?>

<form id="login-form" class="form" action="" method="POST">
          
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="username" class="text-info">Nome de Usuário:</label><br>
                <input type="text" name="usuario" id="username" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="password" class="text-info">Senha:</label><br>
                <input type="password" name="senha" id="password" class="form-control">
            </div>
        </div>
    </div>
</div>  

<div class="container-fluid">
    <div class="row">
        <div class="form-group">
            <input type="submit"  class="btn btn-info btn-md" value="Enviar" name="btnlogin">
            <input type="submit" name="cadastro" class="btn btn-info btn-md" value="Cadastre-se">
        </div>
    </div>
</div>
               
</form>

<div>
    <div>
        <div>
            
        </div>
    </div>
</div>