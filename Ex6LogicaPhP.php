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
echo 'Aumento RUIM';
} else if($soma_aumentos >= 101 && $salario_aumento <= 200){
echo 'Aumento RAZOAVEL';
} else if($soma_aumentos >= 201 && $salario_aumento <= 300){
echo 'Aumento BOM';
} else if($soma_aumentos >= 301 && $salario_aumento <= 400){
echo 'Aumento ÓTIMO';
} else if($soma_aumentos > 401){
echo 'Aumento EXCELENTE';
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
      <input type="text" name="salario" value="<?php $salario ?>">
      
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
  </body>
</html>
