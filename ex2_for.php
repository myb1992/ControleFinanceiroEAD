<?php
$frutas = array();
$fruta1 = '';
$fruta2 = '';
$fruta3 = '';
$fruta4 = '';
$fruta5 = '';


if (isset($_POST['btn_mostrar'])) {
    $frutas = array(
        $fruta1 = $_POST['fruta1'],
        $fruta2 = $_POST['fruta2'],
        $fruta3 = $_POST['fruta3'],
        $fruta4 = $_POST['fruta4'],
        $fruta5 = $_POST['fruta5'],
    );

    for ($i = 0; $i < count($frutas); $i++) {
        echo 'FRUTA GUARDADA NA POSICAO ' . $i . ' é :  ' . $frutas[$i] . '<br>';
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

    <form method="post" action="ex2_for.php">
        <label>Fruta 1</label>
        <input type="text" name="fruta1" value="<?= $fruta1 ?>">
        <label>Fruta 2</label>
        <input type="text" name="fruta2" value="<?= $fruta2 ?>">
        <label>Fruta 3</label>
        <input type="text" name="fruta3" value="<?= $fruta3 ?>">
        <label>Fruta 4</label>
        <input type="text" name="fruta4" value="<?= $fruta4 ?>">
        <label>Fruta 5</label>
        <input type="text" name="fruta5" value="<?= $fruta5 ?>">

        <button name="btn_mostrar">Mostrar</button>
    </form>


</body>

</html>
