<?php
$nome = '';
$idade = '';
$vezes = '';

// : endif = {}

if (isset($_POST['btn_mostrar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $vezes = $_POST['vezes'];

    for($i = 0; $i < $vezes; $i++){
        echo 'Meu nome é :' . $nome . ' ' . 'Tenho: ' . $idade . ' Anos de Idade <br>';
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

    <form method="post" action="ex1_for.php">
        <label>Nome</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <label>Idade</label>
        <input type="text" name="idade" value="<?= $idade ?>">
        <label>Quantidade de Vezes</label>
        <input type="text" name="vezes" value="<?= $vezes ?>">

        <button name="btn_mostrar">Mostrar</button>
    </form>


</body>

</html>
