<?php

require_once '';

$num1 = '';
$num2 = '';
$num3 = '';
$num4 = '';
$num5 = '';
$num6 = '';
$num7 = '';
$num8 = '';
$num9 = '';
$num10 = '';

if (isset($_POST['btnCalcular'])) {

    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    $num3 = trim($_POST['num3']);
    $num4 = trim($_POST['num4']);
    $num5 = trim($_POST['num5']);
    $num6 = trim($_POST['num6']);
    $num7 = trim($_POST['num7']);
    $num8 = trim($_POST['num8']);
    $num9 = trim($_POST['num9']);
    $num10 = trim($_POST['num10']);


    $res1 = Calcular1($num1, $num2, $num3);
    $res2 = Calcular2($num4, $num5, $num6, $res1);
    $res3 = Calcular3($num7, $num8, $num9, $num10, $res1, $res2);

    if ($res1 == false || $res2 == false || $res3 == false) {
        echo 'Preencher todos os campos';
    } else {

        echo "O resultado do primeiro calculo é: $res1<br>";
        echo "O resultado do segundo calculo é $res2<br>";
        echo "O resultado do terceiro calculo é: $res3<br>";
    }
        
   
           
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="fnc_calculosloucos.php" method="POST">
        <label>Número 1:</label>
        <input name="num1" value="<?= $num1 ?>"><br><br>

        <label>Número 2:</label>
        <input name="num2" value="<?= $num2 ?>"><br><br>

        <label>Número 3:</label>
        <input name="num3" value="<?= $num3 ?>"><br><br>

        <label>Número 4:</label>
        <input name="num4" value="<?= $num4 ?>"><br><br>

        <label>Número 5:</label>
        <input name="num5" value="<?= $num5 ?>"><br><br>

        <label>Número 6:</label>
        <input name="num6" value="<?= $num6 ?>"><br><br>

        <label>Número 7:</label>
        <input name="num7" value="<?= $num7 ?>"><br><br>

        <label>Número 8:</label>
        <input name="num8" value="<?= $num8 ?>"><br><br>

        <label>Número 9:</label>
        <input name="num9" value="<?= $num9 ?>"><br><br>

        <label>Número 10:</label>
        <input name="num10" value="<?= $num10 ?>"><br><br>

        <button name="btnCalcular">Calcular</button>
    </form>

</body>

</html>
