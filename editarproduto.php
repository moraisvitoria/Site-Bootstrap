<?php

    require_once 'head.php';
    include_once 'conexao.php';
    session_start();
    ob_start();

    $id = filter_input(INPUT_GET, "produto", FILTER_SANITIZE_NUMBER_INT);

    if (empty($id)) {
        $_SESSION['msg'] = "Erro: Produto não encontrado!";
        header("Location: relaproduto.php");
        exit();
    }

    $sql = "SELECT * from produto where  = $id LIMIT 1";
    $resultado= $conn->prepare($sql);
    $resultado->execute();

    if(($resultado) AND ($resultado->rowCount() != 0)){
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
        //var_dump($linha);
        extract($linha);
    }
    else{
        $_SESSION['msg'] = "Erro: Produto não encontrado!";
        header("Location: relaproduto.php");
    }


?>


<form method="POST" action="controleproduto.php" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3> contrele de editar</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12 text-left">
                    <img src="<?php echo $foto; ?>" style=width:150px;height:150px;>
                </div>
        </div>


        <div class="row">

            <div class="col-md-1">
                <div class="form-group">
                    <label for="matricula">Nome</label>
                    <input type="text" class="form-control" name="Nome"
                    value="<?php echo $Nome;?>"
                    >    
                </div>
            </div>   

            <div class="col-md-4">
                <div class="form-group">
                    <label for="nome">Cor</label>
                    <input type="text" class="form-control" name="Cor"
                    value="<?php echo $Cor;?>"
                    >       
                </div>
            </div>           

            <div class="col-md-2">
                <div class="form-group">
                    <label for="Tamanho">Tamanho</label>
                    <input type="text" name="Tamanho" class="form-control" onkeypress="$(this)."
                    value="<?php echo $Tamanho;?>"                    
                    >
                </div>
            </div>

            <div class="col-md-2">        
              <div class="form-group">            
                  <label for="Tamanho"></label>
                  <input type="Tamanho" class="form-control" name="Tm"
                  value="<?php echo $Tamanho;?>"                    
                    >
              </div>
           </div>

           <div class="col-md-2">
                <div class="form-group">
                    <label for="valor">Preço</label>
                    <input type="text" class="form-control" name="valor" onchange="this.value = this.value.replace(/,/g, '.')">    
                </div>
            </div>  



        </div>
        <div class="col-md-8">
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
</div>              

        

<?php
    require_once 'rodape.php';
?>
