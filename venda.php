<?php

$nome = '';
$valor = '';
$quantidade = '';


if(isset($_POST['btn_calcular'])){
    $nome = $_POST['nome_produto'];
    $valor = $_POST['valor_unitario'];
    $quantidade = $_POST['quantidade'];

    if(trim($nome) == ''){
        echo 'Prencher o campo Nome do Produto' . '<br>';

    }if (trim($valor) == ''){
        echo 'Prencher o campo Valor Unitario' . '<br>';

    }if (trim($quantidade) == ''){
        echo 'Prencher o campo Quatidade' . '<br>';

    }else{
        header("location: ex_conclusaodavenda.php?nome_produto=$nome&valor_unitario=$valor&quantidade=$quantidade");
        
    }
    
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
    <form action="venda.php" method="post">
        
        <label>Nome do produto</label>
        <input name="nome_produto" value="<?= $nome?>">

        <label>Valor Unitario</label>
        <input name="valor_unitario" value="<?= $valor?>">

        <label>Quantidade</label>
        <input name="quantidade" value="<?= $quantidade?>">

        <button name="btn_calcular">Calcular</button>


    </form>

</body>
</html>
