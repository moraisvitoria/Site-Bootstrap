<?php
    require_once 'head.php';
    include_once 'conexao.php';

    $sql = "SELECT * from categoria";
    $resultado=$conn->prepare($sql);
    $resultado->execute();


?>

<form method="POST" action="controleproduto.php" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Cadastro de Produto</h3>
                </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome">    
                </div>
            </div>           

            <div class="col-md-2">
                <div class="form-group">
                    <label for="cor">Cor</label>
                    <input type="text" name="cor" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label for="tamanho">Tamanho</label>
                    <input type="text" name="tamanho" class="form-control">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" name="quantidade" class="form-control">
                    </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="valor">Preço</label>
                    <input type="text" name="valor" class="form-control" onchange="this.value = this.value.replace( /,/g, '.')">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                         
                        <?php

                            if (($resultado) and ($resultado->rowCount() !=0)) {
                                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                                  extract($linha);
                            
                        ?>

                        <option value="<?php echo $idcategoria;?>"> <?php echo $nomecategoria; ?> </option>

                        <?php
                                }
                            }
                        ?>


                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="foto">Imagem</label><p>
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
        </div>

        <div class="row">    
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary" name="btncad" value="Enviar">
            </div>
        </div>
</form>

<?php
    require_once 'footer-admin.php';
?>