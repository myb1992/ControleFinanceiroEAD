<?php
$nota1 = '';
$nota2 = '';
$nota3 = '';
$nota4 = '';
$media = '';

if(isset($_POST['btn_calcular'])){
$nota1 = trim($_POST['nota1']);
$nota2 = trim($_POST['nota2']);
$nota3 = trim($_POST['nota3']);
$nota4 = trim($_POST['nota4']);
$media = ($nota1 + $nota2 + $nota3 + $nota4)/ 4;

if($nota1 == '' || $nota2 == '' || $nota3 == '' || $nota4 = ''){
echo 'Preencher o(s) campo(s) obrigatório(s)';
} else if (!is_numeric($nota1) || is_numeric($nota2) || is_numeric($nota3) || is_numeric($nota4)){
echo 'Número(s) incorreto(s). Favor corrigí-lo(s)';
} else {
} if($media <= 39){
echo '<span style='color:red;'>REPROVADO</span>';
} else if($media >= 40 && $media <= 59){
echo '<span style='color:yellow;'>EXAME</span>';
} else if($media >= 60){
echo '<span style='color:green;'>APROVADO</span>';
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  
  <form method="post" action="Ex3LogicaPhP.php">
      <label>Nota 1</label>
      <input type="text" name"nota1" value="<?php $nota1 ?>">
      <label>Nota 2</label>
      <input type="text" name"nota2" value="<?= $nota2 ?>">
      <label>Nota 3</label>
      <input type="text" name"nota3" value="<?php $nota3 ?>">
      <label>Nota 4</label>
      <input type="text" name"nota4" value="<?= $numero2 ?>">
      
      <buton name="btn_calcular">Calcular</button>
      <input disabled value="<?= $media ?>">
    </form>
