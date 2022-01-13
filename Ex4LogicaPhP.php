<?php
$salario = '';
$aumento = '';
$salario_final = '';
$salario_aumento = '';
$media = '';

if(isset($_POST['btn_calcular'])){
$salario = trim($_POST['salario']);
$aumento = trim($_POST['aumento']);
$salario_final = $salario + ($salario * $aumento / 100);
$salario_aumento = $salario * $aumento / 100;

if($salario == '' || $aumento == ''){
echo 'Preencher o(s) campo(s) obrigatório(s)';
} else if (!is_numeric($salario) || is_numeric($aumento)){
echo 'Número(s) incorreto(s). Favor corrigí-lo(s)';
} else {
} if($salario_aumento >= 0 && $salario_aumento <= 100){
echo 'Aumento Nível 1';
} else if($salario_aumento >= 101 && $salario_aumento <= 200){
echo 'Aumento Nível 2';
} else if($salario_aumento >= 201 && $salario_aumento <= 300){
echo 'Aumento Nível 3';
} else if($salario_aumento >= 301 && $salario_aumento <= 400){
echo 'Aumento Nível 4';
} else if($salario_aumento > 400){
echo 'Aumento Nível 5';
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
      <label>Salário</label>
      <input type="text" name="salario" value="<?php $salario ?>">
      <label>Aumento</label>
      <input type="text" name="aumento" value="<?= $aumento ?>">
      
      <buton name="btn_calcular">Calcular</button>
      <input disabled value="<?= $salario_final ?>">
    </form>
  </body>
</html>

