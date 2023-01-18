<?php
session_star();
ob_start();


$id = filter_input(INPUT_GET, "matricula",FILTER_SANITIZE_NUMBER_INP);

If (empty($id)) {
    $_SESSION['msg'] = " Erro: Usuário não encontrado";
    header("Location: realunos.php");
    exit();
}



?>
