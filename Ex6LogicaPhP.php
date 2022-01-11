<?php
$salario = '';
$aumento15 = '';
$aumento18 = '';
$salario15 = '';
$salario18 = '';
$soma_aumentos = '';


if(isset($_POST['btn_calcular'])){
$salario = trim($_POST['salario']);
$salario15 =$salario + (($salario * (15/100)) / 100)
$salario18 =$salario +(($salario * (18/100)) / 100)
$soma_aumentos = $salario15 + $salario18;

if($salario == ''){
echo 'Preencher o(s) campo(s) obrigatório(s)';
} else if (!is_numeric($salario)){
echo 'Número(s) incorreto(s). Favor corrigí-lo(s)';
} else {
} if($soma_aumentos >= 0 && $salario_aumento <= 100){
echo '<span style='color:red;'>Aumento RUIM</span>';
} else if($soma_aumentos >= 101 && $salario_aumento <= 200){
echo '<span style='color:yellow;'>Aumento RAZOAVEL</span>';
} else if($soma_aumentos >= 201 && $salario_aumento <= 300){
echo '<span style='color:teal;'>Aumento BOM</span>';
} else if($soma_aumentos >= 301 && $salario_aumento <= 400){
echo '<span style='color:blue;'>Aumento ÓTIMO</span>';
} else if($soma_aumentos > 401){
echo '<span style='color:green;'>Aumento EXCELENTE</span>';
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  
  <form method="post" action="Ex6LogicaPhP.php">
      <label>Salário</label>
      <input type="text" name"salario" value="<?php $salario ?>">
      
      <buton name="btn_calcular">Calcular</button>
    <br>
     <label>Aumento 15%</label>
      <input disabled value="<?= $salario15 ?>">
    <br>
    <label>Aumento 18%</label>
    <input disabled value="<?= $salario18 ?>">
    <br>
    <label>Aumento TOTAL</label>
    <input disabled value="<?= $soma_aumentos ?>">
    </form>
