<?php
    session_star();
    ob_start();
    
    require_once 'head.php';
    include_once 'conexao.php';

    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }    

    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 3;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT p.codigoproduto, p.foto, p.nome, p.valor, p.tamanho, p.cor, p.quantidade, c.nomecategoria
             from produto p, categoria c
             WHERE quantidade > 0 and c.idcategoria = p.idcategoria
             LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)) {
     echo "<h1>Relatório de Produtos</h1>";
?>

<table class="table table-bordered table-dark">
     <thead>
        <tr>
            <th scope="col">Imagem</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Tamanho</th>
            <th scope="col">Cor</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Categoria</th>
            <th scope="col">Operação</th>
        </tr>
    </thead>
  <tbody>


<?php
 while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {    
 extract($linha);
?>

        <tr>
          <td scope="row"><img src="<?php echo $foto ?>" style=widht:100px,height:100px;></td>
          <td><?php echo $nome ?></td>
          <td><?php echo $valor ?></td>
          <td><?php echo $tamanho ?></td>
          <td><?php echo $cor ?></td>
          <td><?php echo $quantidade ?></td>
          <td><?php echo $nomecategoria ?></td>
          <td>
            <?php echo "<a href='editarprod.php?codigo=$codigoproduto'>"; ?>
            <input type="submit" class="btn btn-primary" name="editar" value="Editar">
          </td>
          
        </tr>

<?php
    }
?>

 </tbody>
</table>

<?php

}else{
    echo "Não tem registros";
}

  $qtregistro = "SELECT COUNT(codigoproduto) 
                 AS registros 
                 FROM produto";
  $resultado = $conn->prepare($qtregistro);
  $resultado->execute();
  $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

  $qnt_pagina = ceil($resposta['registros'] / $limitereg);
 
   $maximo = 2;

   echo "<a href='relproduto.php?page=1'>Primeira</a> ";
 
 for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++  ) {
     if ($anterior >= 1) {
         echo "  <a href='relproduto.php?page=$anterior'>$anterior</a> ";
     }
 }

 echo "$pag";

 for ($proxima = $pag +  1; $proxima <= $pag +  $maximo; $proxima++ ) {
     if ($proxima <= $qnt_pagina) {
         echo "<a href='relproduto.php?page=$proxima'>$proxima</a> ";
     }
 }

 echo "<a href='relproduto.php?page=$qnt_pagina'>Última</a> ";

?>