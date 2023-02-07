<?php
    session_start();
    ob_start();
    require_once 'conexao.php';



    $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    $codigoproduto = $dados["codigo"];

    if(!empty($dados["excluir"])){

        $sqlexcluir = "DELETE from carrinho WHERE codigoproduto = $codigoproduto";
        $resulexcuir =$conn->prepare($sqlexcluir);
        $resulexcuir->execute();
        $_SESSION["quant"] -= 1;

    }else{
        if(!isset($_SESSION['nome']))
        $_SESSION["carrinho"] = true;
        echo "<script>
        alert('Faça Login para Finalizar sua Compra!!!');
        </script";
    }
    else{
        //acessar pagamento;
        $data = date('y-m-d');
        $valor = $_SESSION['totalcompra'];
        $matricula = $_SESSION["matricula"];

        $sqlvenda = "INSERT into venda(data,valor,matricula)values(:data,:valor,:matricula)";
        $salvarvenda= $conn->prepare($sqlvenda);
        $salvarvenda->binParam(':data',$data,PDO::PARAM_STR);
        $salvarvenda->bindParam(':valor',$valor,PDO::PARAM_STR);
        $salvarvenda->bindParam(':matricula',$matricula,PDO::PARAM_STR);
        $salvarvenda->execute();

        


    }
        



    ?>