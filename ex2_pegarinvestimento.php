<?php

$nome = '';
$valorinv = '';
$sitinv = '';
$banco = '';

if(isset($_POST['btn_mostrar']))
{
  $ul = '';
  $li = '';
  $nome = trim($_POST['nome_usuario']);
  $valorinv = trim($_POST['valor_invesimento']);
  $sitinv = strtoupper(trim($_POST['situacao_investimento']));
  $banco = strtoupper(trim($_POST['banco']));
  
  if($nome == '')
{
    $li = '<li>Preencher o campo NOME</li>';
}
  if($valorinv =='')
{
    $li = $li . '<li>Preencher o campo Valor do Investimento</li>';
}  
  if($sitinv =='')
{
    $li = $li . '<li>Preencher o campo Situação do Investimento</li>';
}
  if($valorinv != 'G' && $valorinv != 'P')
{
    $li = $li .'<li>Favor usar as siglas P ou G</li>';
}
  if($banco =='')
{
    $li = $li .'<li>Preencher o campo Banco</li>';
}
  if($banco != 'IT' && $banco != 'SA' && $banco != 'SI')
{
    $li = $li .'<li>Favor usar as siglas IT, SA ou SI</li>';
}
  
  //Verifica se tem algo dentro da variável $li, se houver, mostra a mensagem
  if($li != ''){
    $ul ="<ul>$li</ul>";
  }
  else
  {
    $parametros = "nome=$nome&valor_investimento=$valorinv&situacao_investimento=$sitinv&banco=$banco";
header("location: mostrar_dados.php?$parametros");
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
    <?= $ul ?>
  </body>
</html>
