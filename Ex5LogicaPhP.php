<?php
$peso'';
$altura = '';
$imc = '';

if(isset($_POST['btn_calcular'])){
$peso = trim($_POST['peso']);
$altura = trim($_POST['altura']);
$imc = ($peso/ ($altura*$altura));

if($peso == '' || $altura == ''){
echo 'Preencher o(s) campo(s) obrigatório(s)';
} else if (!is_numeric($peso) || is_numeric($altura)){
echo 'Número(s) incorreto(s). Favor corrigí-lo(s)';
} else {
} if($imc >= 0 && $imc <= 20){
echo '<span style='color:yellow;'>MAGRO</span>';
} else if($imc >= 21 && $imc <= 25){
echo '<span style='color:green;'>PESO IDEAL</span>';
} else if($imc >= 26 && $imc <= 30){
echo '<span style='color:orange;'>OBESO</span>';
} else if($imc >= 31){
echo '<span style='color:red;'>OBESIDADE MÓRBIDA</span>';
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  
  <form method="post" action="Ex5LogicaPhP.php">
      <label>Peso 1</label>
      <input type="text" name"peso" value="<?php $peso ?>">
      <label>Altura</label>
      <input type="text" name"altura" value="<?= $altura ?>">
      
      <buton name="btn_calcular">Calcular</button>
      <input disabled value="<?= $imc ?>">
    </form>
