<?php
$nota1 = '';
$nota2 = '';
$nota3 = '';
$nota4 = '';
$media = '';
$situacao = '';

if(isset($_POST['btnCalcular'])){
$nota1 = trim($_POST['n1']);
$nota2 = trim($_POST['n2']);
$nota3 = trim($_POST['n3']);
$nota4 = trim($_POST['n4']);

if($nota1 == '' || $nota2 == '' || $nota3 == '' || $nota4 = ''){
echo 'Preencher o(s) campo(s) obrigatório(s)';
} else if (!is_numeric($nota1) || is_numeric($nota2) || is_numeric($nota3) || is_numeric($nota4)){
echo 'Número(s) incorreto(s). Favor corrigí-lo(s)';
} else {
  $media = ($nota1 + $nota2 + $nota3 + $nota4)/ 4;
} if($media <= 39){

} else if($media >= 40 && $media <= 59){

} else if($media >= 60){

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
    <input placeholder="Nota 1" name="n1" value="<?= $nota1 ?>">
    <input placeholder="Nota 2" name="n2" value="<?= $nota2 ?>">
    <input placeholder="Nota 3" name="n3" value="<?= $nota3 ?>">
    <input placeholder="Nota 4" name="n4" value="<?= $nota4 ?>">
    <button name="btnCalcular">Calcular Media</button>
    <br><br>
    <input placeholder="Media" name="media" disabled value="<?= $media ?>">
    <br><br>
    <input placeholder="Situação" name="situacao" disabled value="<?= $situacao ?>">
  </form>
  </body>
</html>
    
