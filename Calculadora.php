<?php
$numero1 = '';
$numero2 = '';
$numero3 = '';
$numero4 = '';
$numero5 = '';
$numero6 = '';
$numero7 = '';
$numero8 = '';

$soma = '';
$subtracao = '';
$multilicar = '';
$dividir = '';

if(isset($_POST['btn_somar'])){
  $numero1 = $_POST['n1'];
  $numero2 = $_POST['n2'];
  
  $soma = $numero1 + $numero2;  
}
if(isset($_POST['btn_subtrair'])){
  $numero3 = $_POST['n3'];
  $numero4 = $_POST['n4'];
  
  $subtrair = $numero3 - $numero4;  
}
if(isset($_POST['btn_multiplicar'])){
  $numero3 = $_POST['n5'];
  $numero4 = $_POST['n6'];
  
  $multiplicar = $numero5 * $numero6;  
}
if(isset($_POST['btn_dividir'])){
  $numero3 = $_POST['n7'];
  $numero4 = $_POST['n8'];
  
  $dividir = $numero7 / $numero8;  
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
    
    <form method="post" action="calculadora.php">
      <label>Número 1</label>
      <input type="text" name"n1" value="<?php echo $numero1 ?>">
      <label>Número 2</label>
      <input type="text" name"n2" value="<?= $numero2 ?>">
      
      <buton name="btn_somar">Somar</button>
      <input disabled value="<?= $soma ?>">
    </form>
    <form action="calculadora.php" method="post">
      <label>Número 1</label>
      <input type="text" name="n3" value="<?= $numero3 ?>">
      
      <label>Número 2</label>
      <input type="text" name="n4" value="<?= $numero4 ?>">
      
      <button name="btn_subtrair">Subtrair</button>
      <input disabled value"<?= $subtrair ?>">
      
    </form>
       <form action="calculadora.php" method="post">
      <label>Número 1</label>
      <input type="text" name="n5" value="<?= $numero5 ?>">
      
      <label>Número 2</label>
      <input type="text" name="n6" value="<?= $numero6 ?>">
      
      <button name="btn_multiplicar">Multiplicar</button>
      <input disabled value"<?= $multiplicar ?>">
      
    </form>
    <form action="calculadora.php" method="post">
      <label>Número 1</label>
      <input type="text" name="n7" value="<?= $numero7 ?>">
      
      <label>Número 2</label>
      <input type="text" name="n8" value="<?= $numero8 ?>">
      
      <button name="btn_dividir">Dividir</button>
      <input disabled value"<?= $dividir ?>">
      
    </form>
    
    
  </body>
</html>
    
