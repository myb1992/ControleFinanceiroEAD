<?php

$nome = '';
$valorinv = '';
$sitinv = '';
$banco = '';

if(isset($_POST['btn_mostrar']))
{
  $nome = $_POST['nome_usuario'];
  $sobre = $_POST['sobrenome_usuario'];
  
  if(trim($nome) == '')
{
    echo 'Preencher o campo NOME';
}
  else if(trim($valorinv) =='')
{
    echo 'Preencher o campo Valor do Investimento';
}  
  else if(trim($sitinv) =='')
{
    echo 'Preencher o campo Situação do Investimento';
}
    else if($valorinv != 'G' || $valorinv != 'P')
{
    echo 'Favor usar as siglas P ou G';
}
  else if(trim($banco) =='')
{
    echo 'Preencher o campo Banco';
}
  else if($banco != 'IT' || $banco != 'SA' || $banco != 'SI')
{
    echo 'Favor usar as siglas IT, SA ou SI';
}
  
  else
{
   header("location: mostrar_dados.php?nome=$nome&sobrenome=$sobre"); 
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
    <form action="mostrar_dados.php" method="get">
      <label>Nome</label>
      <input name="nome_usuario" value="<?= $nome ?>">
      <label>Valor Investimento</label>
      <input type="text" name="valor_investimento"value="<?= $valorinv ?>">
      <label>Situação Investimento. Usar G para: Ganho de 3% e P para: Perca 5%</label>
      <input type="text" name="situacao_investimento"value="<?= $sitinv ?>">
      <label>Banco. Usar 'SA' para Santander, 'IT' para Itaú e 'SI' para Sicredi.</label>
      <input type="text" name="banco"value="<?= $banco ?>">
      <button name="btn_mostrar">Ver Resultado</button>
    </form>
  </body>
</html>
