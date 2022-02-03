<?php   
    if(
        isset($_GET['nome_produto']) && $_GET['nome_produto'] != '' &&
        isset($_GET['valor_unitario']) && $_GET['valor_unitario'] != '' &&
        isset($_GET['quantidade']) && $_GET['quantidade'] != '' 
      ){  
        $nome_pruduto = $_GET['nome_produto'];
        $valor_produto = $_GET['valor_unitario'];
        $quantidade_produto = $_GET['quantidade'];

        $conclusao = $valor_produto * $quantidade_produto;
         
         echo  "<b>Produto:</b> $nome_pruduto <br>
         <b>O valor unitario é de R$:</b> $valor_produto <br>
         <b>A quantidade foi:</b> $quantidade_produto <br>";
    }else{
        header('location:ex_venda.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label><b>Valor total R$ </b> <?= $conclusao?></label>    
</body>
</html>
