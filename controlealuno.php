<?php
include_once 'conexao.php' ;


try{
$dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);
}

if (!empty($dadoscad['btncad'])) {

    $sql = "insert into aluno(nome, sexo,datadenascimento,telefone,cpf,rg,cep,numerocasa,complemento,foto,email,senha)
    values(:nome,:sexo,:datadenascimento,:telefone,:cpf,:rg,:cep,:numerocasa,:complemento,:foto,:email,:senha)";
    
    $salvar= $conn->prepare($sql);
    $salvar -> bindParam (':nome', $dadoscad['nome'],PDO::PARM_STR);
    $salvar -> bindParam (':sexo', $dadoscad['sexo'],PDO::PARM_STR);
    $salvar -> bindParam (':datadenascimento', $dadoscad['datadenascimento'],PDO::PARM_STR);
    $salvar -> bindParam (':telefone', $dadoscad['telefone'],PDO::PARM_STR);
    $salvar -> bindParam (':cpf', $dadoscad['cpf'],PDO::PARM_STR);
    $salvar -> bindParam (':rg', $dadoscad['rg'],PDO::PARM_STR);
    $salvar -> bindParam (':cep', $dadoscad['cep'],PDO::PARM_STR);
    $salvar -> bindParam (':numerodecasa', $dadoscad['numero'],PDO::PARM_INT);
    $salvar -> bindParam (':compleneto', $dadoscad['complemento'],PDO::PARM_STR);
    $salvar -> bindParam (':foto', $dadoscad['foto'],PDO::PARM_STR);
    $salvar -> bindParam (':email', $dadoscad['email'],PDO::PARM_STR);
    $salvar -> bindParam (':senha', $dadoscad['senha'],PDO::PARM_STR);

    if ($salvar->rowCount()) {
        echo "Usuário cadastrado com sucesso!</p>";
        unset($dadoscad);
    }else{
        echo"usuário não cadastrado com sucesso"!</p>";
    }
}
}
cath(PDOException $erro){
    echo $erro;
}
?>