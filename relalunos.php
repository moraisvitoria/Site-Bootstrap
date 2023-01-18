<?php 
require_once 'head.php';
include_once 'conexao.php' ;

$pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$pag = (!empty($pagatual)) ? $pagatual : 1;

$limitereg = 3;

$inicio = ($limitereg * $pag) - $limitereg;

$busca= "SELECT matricula,cpf, nome, telefone, email 
From aluno LIMIT $inicio,$limitereg" ;

$resultado = $conn->prepare($busca);
$resultado->execute();

if(($resultado) AND ($resultado->rowCount() != 0)){
    echo "<h1>Relatório de alunos</h1><br>";
    ?>

    <table class="table">
    <thead>
      <tr>
        
        <th scope="col">matricula</th>
        <th scope="col">Cpf</th>
        <th scope="col">nome</th>
        <th scope="col">telefone</th>
        <th scope="col">email</th>
        <th scope="col">função</th>
        
        
        
        
      </tr>
   

    
  


<?php



while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
  extract($linha);
?>

  <tr>
        <td scope="row"><?php echo $matricula ?></td>
        <td><?php echo $cpf ?></td>
        <td><?php echo $nome ?></td>
        <td><?php echo $telefone ?></td>
        <td><?php echo $email?></td>
        <td>
        <?php echo"<a href='editar.php?matricula=$matricula'>" ; ?>
        <input type="submit" class="btn btn-primary" name="editar" value="Editar">
        </td>
        <td>
        <?php echo"<a href='excluir.php?matricula=$matricula'>" ; ?>
        <input type="submit" class="btn btn-danger"  name="excluir" value="Excluir">
        </td>
        </tr>
    
      

  
<?php
}
?>
</thead>
<tbody>
  
<?php

}else{
    echo"Não tem registros";
}

//contar os registros no banco
$qtregistro = "SELECT COUNT(matricula) AS registros FROM aluno";
$resultado = $conn->prepare($qtregistro);
$resultado->execute();
$resposta = $resultado->fetch(PDO::FETCH_ASSOC);

//Quantidade de páginas serão usadas-quantidade de registros
//dividido pela quantidade de registro por página

$qnt_pagina = ceil($resposta['registros'] / $limitereg);
 
// Maximo de liks

$maximo = 2;

echo "<a href= 'relalunos.php?page=1'>Primeira</a>";
for ($anterior = $pag - $maximo;$anterior<=$pag-1;$anterior++){
    if ($anterior>=1){
    echo "<a href= 'relalunos.php?page=$anterior'>$anterior</a>";
    }
}

echo "$pag";

for ($proxima = $pag + 1;$proxima <=$pag + $maximo;$proxima++){
    if ($proxima<= $qnt_pagina) {
        echo "<a href='realunos.php?page=$proxima'</a> ";
    }
}

echo "<a href='relalunos.php?page=$qnt_pagina'>última</a> ";




?>


