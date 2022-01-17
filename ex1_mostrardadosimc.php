<?php

if(
  isset($_GET['nome']) && $_GET['nome'] != '' &&
  isset($_GET['altura']) && $_GET['altura'] != '' &&
  isset($_GET['peso']) && $_GET['peso'] != ''
){
  $nome_usuario = $_GET['nome'];
  $altura_usuario = $_GET['altura'];
  $peso_usuario = $_GET['peso'];
  $imc = $peso_usuario / ($altura_usuario * $altura_usuario);
  $sit = '';
  
}
else if($imc >= 0 && $imc <= 20)
{
  $sit = 'MAGRO';
}
else if($imc >= 21 && $imc <= 25)
{
  $sit = 'PESO IDEAL';
}
else if($imc >= 26 && $imc <= 30)
{
  $sit = 'OBESO';
}
else if($imc >= 31)
{
 $sit = 'OBESIDADE MÓRBIDA'; 
}
else{
 header('location: ex1_pegardadosimc.php');
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  </head>
<body>
  <label>Nome: <?=$nome_usuario ?></label>
  <label>IMC: <?=$imc ?></label>
  <label>Classificação do IMC: <?=$sit ?></label>
</body>
</html>
