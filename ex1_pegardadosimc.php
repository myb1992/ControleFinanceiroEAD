<?php

$nome = '';
$peso = '';
$altura = '';

if(isset($_POST['btn_calcular']))
{
  $nome = $_POST['nome_usuario'];
  $altura = $_POST['altura_usuario'];
  $peso = $_POST['peso_usuario'];
  
  if(trim($nome) == '')
{
    echo 'Preencher o campo NOME';
}
  else if(trim($altura) =='')
{
    echo 'Preencher o campo ALTURA';
}
  else if(!is_numeric($altura))
  {
   echo 'Preencher o campo ALTURA com números!'; 
  }
  else if(trim($peso) =='')
  {
   echo 'Preencher o campo PESO'; 
  }
  else if(!is_numeric($peso))
  {
   echo 'Preencher o campo PESO com números!'; 
  }
  else
{
   header("location: ex1_mostrardadosimc?nome=$nome&altura=$altura&peso=$peso"); 
}
}

?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  
  <body>
    <form action="ex1_mostrardadosimc.php" method="get">
      <label>Nome</label>
      <input name="nome_usuario" value="<?= $nome ?>">
      <label>Altura</label>
      <input type="text" name="altura_usuario"value="<?= $altura ?>">
      label>Peso</label>
      <input type="text" name="peso_usuario"value="<?= $peso ?>">
      <button name="btn_calcular">Calcular</button>
    </form>
  </body>
</html>
