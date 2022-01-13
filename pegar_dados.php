<?php

$nome = '';
$sobre = '';

if(isset($_POST['btn_mostrar']))
{
  $nome = $_POST['nome_usuario'];
  $sobre = $_POST['sobrenome_usuario'];
  
  if(trim($nome) == '')
{
    echo 'Preencher o campo NOME';
}
  else if(trim($sobre) =='')
{
    echo 'Preencher o campo SOBRENOME';
}
  else
{
   header("location: mostrar_dados.php?nome=$nome&sobrenome=$sobre"); 
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
    <form action="mostrar_dados.php" method="get">
      <label>Nome</label>
      <input name="nome_usuario" value="<?= $nome ?>">
      <label>Sobrenome</label>
      <input type="text" name="sobrenome_usuario"value="<?= $sobre ?>">
      <button name="btn_mostrar">Mostrar</button>
    </form>
  </body>
</html>

    
