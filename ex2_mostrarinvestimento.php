<?php

if(
  isset($_GET['nome']) && $_GET['nome'] != '' &&
  isset($_GET['valor_invesimento']) && $_GET['valor_invesimento'] != '' &&
  isset($_GET['situacao_investimento']) && $_GET['situacao_investimento'] != '' &&
  isset($_GET['banco']) && $_GET['banco'] != '' &&
  ){
  $nome = $_GET['nome'];
  $valorinv = $_GET['valor_investimento'];
  $sitinv = $_GET['situacao_investimento'];
  $banco = $_GET['banco'];
}else{
  header('location: ex2_pegarinvestimento.php');
  exit;
}
if($sitinv == 'G'){
  $resultado = $valorinv + (($valorinv / 100)*3);
  Echo 'Ganho de 3%';
}else if($sitinv == 'P'){
  $resultado = $valorinv - (($valorinv/ 100)*5);
  Echo 'Perda de 5%';
}
if($banco == 'IT'){
  Echo 'Itaú';
}else if($banco == 'SA'){
  Echo ' Santander';
}else if($banco == 'SI'){
  Echo ' Sicredi';
}
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Document</title>
  </head>
  
  <body>
    <div>
      
      <h4>Resultado:</h4>
      <? = $nome ?>, seu valor de investimento foi de R$ <?= $valorinv ?>,
      a sigla de sua simulação escolhida foi <?= $sitinv ?> <?

