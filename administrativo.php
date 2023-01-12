<?php
require_once 'head.php';
include_once 'conexao.php';

session_start();
ob_star

?>


<h1 class="text-center)">Àrea do Aluno</h1>
<?php
echo "Bem vindo(a)".$_SESSION['nome']
?>

<a href="sair.php"><button type="submit">sair</button>