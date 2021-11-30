<?php

    include('conexao.php');

    try {

      $sql = "insert into tblvendas (idvendedor,idproduto,qtd) values (:idvendedor,:idproduto,:qtd)";

      $stmt = $con->prepare($sql);

      

      $stmt->bindValue(":idvendedor",$_POST["idvendedor"]);

      $stmt->bindValue(":idproduto",$_POST["idproduto"]);

      $stmt->bindValue(":qtd",$_POST["qtd"]);

      $stmt->execute();

      

    } catch(PDOException $e){

        echo "Não Cadastrou. ".$e->getMessage();



    }

?>



<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>vendas</title>

</head>

<body>

    <h1>Cadastro de vendas</h1>

    <!-- método de envio são 2 

        * method="GET" - Enviar sem segurança pois exibe os dados na url - mais rápido

        * method="POST" - Oculta os dados da url - mais lento

    -->

    <form method="post">

        idvendedor <input type="text" name="idvendedor"><br>

        <br>

        idproduto  <input type="text" name="idproduto"><br>

        <br>

        qtd  <input type="text" name="qtd"><br>

        <input type="submit" value="Cadastrar">

    </form>

</body>

</html>