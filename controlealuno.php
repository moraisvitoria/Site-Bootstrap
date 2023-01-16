<?php
include_once 'conexao.php' ;

$dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($dadoscad['btncad'])) {

    $sql = "insert into aluno("nome, sexo,datadenascimento,telefone,cpf,rg,cep,numerocasa,complemento,foto,email,senha)
    values()";
}


?>