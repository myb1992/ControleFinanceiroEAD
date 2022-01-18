<?php

$nome = '';
$valorinv = '';
$sitinv = '';
$banco = '';

if(isset($_POST['btn_mostrar']))
{
  $nome = trim($_POST['nome_usuario']);
  $valorinv = trim($_POST['valor_invesimento']);
  $sitinv = trim($_POST['situacao_investimento']);
  $banco = trim($_POST['banco']);
  
  if($nome == '')
{
    echo 'Preencher o campo NOME';
}
  else if($valorinv =='')
{
    echo 'Preencher o campo Valor do Investimento';
}  
  else if($sitinv =='')
{
    echo 'Preencher o campo Situação do Investimento';
}
    else if($valorinv != 'G' && $valorinv != 'P')
{
    echo 'Favor usar as siglas P ou G';
}
  else if($banco =='')
{
    echo 'Preencher o campo Banco';
}
  else if($banco != 'IT' && $banco != 'SA' && $banco != 'SI')
{
    echo 'Favor usar as siglas IT, SA ou SI';
}
  
  else
{
   header("location: mostrar_dados.php?nome=$nome&valor_investimento=$valorinv&situacao_investimento=$sitinv&banco=$banco"); 
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
    <form action="ex2_pegarinvestimento.php" method="get">
      <b><label>Nome</label></b>
      <br>
      <input tipe="text" name="nome_usuario" placeholder="Digite seu nome" value="<?= $nome ?>">
      <br><br>
      <b><label>Valor Investimento</label></b>
      <br>
      <input type="text" name="valor_investimento" placeholder="Digite o valor do Invest." value="<?= $valorinv ?>">
      <br><br>
      <b><label>Situação Investimento. Usar G para: Ganho de 3% e P para: Perca 5%</label></b>
      <br><br>
      <b><input type="text" name="situacao_investimento"value="<?= $sitinv ?>"></b>
      <br><br>
      <b><label>Banco. Usar 'SA' para Santander, 'IT' para Itaú e 'SI' para Sicredi.</label></b>
      <br><br>
      <b><input type="text" name="banco"value="<?= $banco ?>"></b>
      <button name="btn_mostrar">Ver Resultado</button>
    </form>
  </body>
</html>
