<?php
$tabuada = '';
$contagem = '';

--BUGADO--

if (isset($_POST['btn_calcular'])) {
    $tabuada = is_numeric($_POST['tabuada']);
    $contagem = is_numeric($_POST['contagem']);
    for ($i = 1; $i <= $contagem; $i++) {
        $r = ($tabuada * $i);
        echo $tabuada . ' X ' . $i . ' = ' . $r; 
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

    <form method="post" action="ex3_for.php">
        <label>Tabuada:</label>
        <input type="text" name="tabuada" value="<?= $tabuada ?>">
        <label>Ir até:</label>
        <input type="text" name="contagem" value="<?= $contagem ?>">
        <button name="btn_calcular">Calcular</button>
    </form>


</body>

</html>
