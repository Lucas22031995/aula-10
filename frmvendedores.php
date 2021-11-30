<?php

    include('conexao.php');

    try {

      $sql = "insert into tblvendedores (vendedores,dataadmissao,salario) values (:vendedores,:dataadmissao,:salario)";

      $stmt = $con->prepare($sql);

      

      $stmt->bindValue(":vendedores",$_POST["vendedores"]);

      $stmt->bindValue(":dataadmissao",$_POST["dataadmissao"]);

      $stmt->bindValue(":salario",$_POST["salario"]);

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

    <title>vendedores</title>

</head>

<body>

    <h1>Cadastro de vendedores</h1>

    <!-- método de envio são 2 

        * method="GET" - Enviar sem segurança pois exibe os dados na url - mais rápido

        * method="POST" - Oculta os dados da url - mais lento

    -->

    <form method="post">

        vendedores <input type="text" name="vendedores"><br>

        <br>

        dataadmissao   <input type="date" name="dataadmissao"><br>

        <br>
       
        salario   <input type="number" name="salario"><br>

        <br>
        <input type="submit" value="Cadastrar">

    </form>

</body>

</html>