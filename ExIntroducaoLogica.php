<?php

$ganhosJan = '';
$despesasJan = '';
$lucroJan = '';
$ganhosFev = '';
$despesasFev = '';
$lucroFev = '';
$ganhosMar = '';
$despesasMar = '';
$lucroMar = '';
$ganhosAbr = '';
$despesasAbr = '';
$lucroAbr = '';
$ganhosMai = '';
$despesasMai = '';
$lucroMai = '';
$ganhosJun = '';
$despesasJun = '';
$lucroJun = '';
$ganhosJul = '';
$despesasJul = '';
$lucroJul = '';
$ganhosAgo = '';
$despesasAgo = '';
$lucroAgo = '';
$ganhosSet = '';
$despesasSet = '';
$lucroSet = '';
$ganhosOut = '';
$despesasOut = '';
$lucroOut = '';
$ganhosNov = '';
$despesasNov = '';
$lucroNov = '';
$ganhosDez = '';
$despesasDez = '';
$lucroDez = '';
$ganhosAnual = '';
$despesasAnual = '';
$lucroAnual = '';
$ganhoAnual = '';
$percaAnual = '';
$lucroAnual = '';
if(isset($_POST['btn_calcular'])){
$ganhosJan = $_POST['$ganhosJan'];
$despesasJan = $_POST['$despesasJan'];
$lucroJan = $ganhosJan - $despesasJan;
$ganhosFev = $_POST['$ganhosFev'];
$despesasFev = $_POST['$despesasFev'];
$lucroFev = $ganhosFev - $despesasFev;
$ganhosMar = $_POST['$ganhosMar'];
$despesasMar = $_POST['$despesasMar'];
$lucroMar = $ganhosMar - $despesasMar;
$ganhosAbr = $_POST['$ganhosAbr'];
$despesasAbr = $_POST['$despesasAbr'];
$lucroAbr = $ganhosAbr - $despesasAbr;
$ganhosMai = $_POST['$ganhosMai'];
$despesasMai = $_POST['$despesasMai'];
$lucroMai = $ganhosMai - $despesasMai;
$ganhosJun = $_POST['$ganhosJun'];
$despesasJun = $_POST['$despesasJun'];
$lucroJun = $ganhosJun - $despesasJun;
$ganhosJul = $_POST['ganhosJul'];
$despesasJul = $_POST['$despesasJul'];
$lucroJul = $ganhosJul - $despesasJul;
$ganhosAgo = $_POST['$ganhosAgo'];
$despesasAgo = $_POST['$despesasAgo'];
$lucroAgo = $ganhosAgo - $despesasAgo;
$ganhosSet = $_POST['$ganhosSet'];
$despesasSet = $_POST['$despesasSet'];
$lucroSet = $ganhosSet - $despesasSet;
$ganhosOut = $_POST['$ganhosOut'];
$despesasOut = $_POST['$despesasOut'];
$lucroOut = $ganhosOut - $despesasOut;
$ganhosNov = $_POST['$ganhosNov'];
$despesasNov = $_POST['$despesasNov'];
$lucroNov = $ganhosNov - $despesasNov;
$ganhosDez = $_POST['$ganhosDez'];
$despesasDez = $_POST['$despesasDez'];
$lucroDez = $ganhosDez - $despesasDez;
$ganhoAnual = $ganhosJan + $ganhosFev + $ganhosMar + $ganhosAbr + $ganhosMai + $ganhosJun + $ganhosJul + $ganhosAgo + $ganhosSet + $ganhosOut + $ganhosNov + $ganhosDez;
$percaAnual = $despesasJan + $despesasFev + $despesasMar + $despesasAbr + $despesasMai + $despesasJun + $despesasJul + $despesasAgo + $despesasSet + $despesasOut + $despesasNov + $despesasDez;
$lucroAnual = $lucroJan + $lucroFev + $lucroMar + $lucroAbr + $lucroMai + $lucroJun + $lucroJul + $lucroAgo + $lucroSet + $lucroOut + $lucroNov + $lucroDez;

    
}
//Tentar <?php
//$ganhosJan = trim($_POST["ganhosJan"]);
//if(empty($ganhosJan) || is_null($ganhosJan)){
//echo 'Preencha o campo Ganhos Janeiro!';
//}else{
//echo 'Tudo OK';
//}
//?>
//Para ficar melhor, use sempre required nas tags HTML (dos inputs) que você quer que seja obrigatórios, exemplo:
<input type="text" name="username" required>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
<div id="wrapper">
<?php
include_once'_topo.php';
include_once'_menu.php';
?>
<!--/. NAV SIDE -->
<div id="page-wrapper">
<div id="page-inner">
<div class="row">
<div class="col-md-12">
<h2>Exercicio Balanço e Lucro</h2>
</div>
</div>
<!--/. ROW -->
<hr />
<form action="ExParrudo.php" method="post">
<div class="form-group">
<label>Ganhos do mês Janeiro: </label>
<input type="text" name="ganhosJan"value="<?= $ganhosJan ?>" required>
<label>Despesas Janeiro: </label>
<input type="text" name="despesasJan"value="<?= $despesasJan ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroJan ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Fevereiro: </label>
<input type="text" name="ganhosFev" value="<?= $ganhosFev ?>" required>
<label>Despesas Fevereiro: </label>
<input type="text" name="despesasFev" value="<?= $despesasFev ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroFev ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Março: </label>
<input type="text" name="ganhosMar" value="<?= $ganhosMar ?>" required>
<label>Despesas Março: </label>
<input type="text" name="despesasMar" value="<?= $despesasMar ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroMar ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Abril: </label>
<input type="text" name="ganhosAbr" value="<?= $ganhosAbr ?>" required>
<label>Despesas Abril: </label>
<input type="text" name="despesasAbr" value="<?= $despesasAbr ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroAbr ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Maio: </label>
<input type="text" name="ganhosMai" value="<?= $ganhosMai ?>" required>
<label>Despesas Maio: </label>
<input type="text" name="despesasMai" value="<?= $despesasMai ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroMai ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Junho: </label>
<input type="text" name="ganhosJun" value="<?= $ganhosJun ?>" required>
<label>Despesas Junho: </label>
<input type="text" name="despesasJun" value="<?= $despesasJun ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroJun ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Julho: </label>
<input type="text" name="ganhosJul" value="<?= $ganhosJul ?>" required>
<label>Despesas Julho: </label>
<input type="text" name="despesasJul" value="<?= $despesasJul ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroJul ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Agosto: </label>
<input type="text" name="ganhosAgo" value="<?= $ganhosAgo ?>" required>
<label>Despesas Agosto: </label>
<input type="text" name="despesasAgo" value="<?= $despesasAgo ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroAgo ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Setembro: </label>
<input type="text" name="ganhosSet" value="<?= $ganhosSet ?>" required>
<label>Despesas Setembro: </label>
<input type="text" name="despesasSet" value="<?= $despesasSet ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroSet ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Outubro: </label>
<input type="text" name="ganhosOut" value="<?= $ganhosOut ?>" required>
<label>Despesas Outubro: </label>
<input type="text" name="despesasOut" value="<?= $despesasOut ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroOut ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Novembro: </label>
<input type="text" name="ganhosNov" value="<?= $ganhosNov ?>" required>
<label>Despesas Novembro: </label>
<input type="text" name="despesasNov" value="<?= $despesasNov ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroNov ?>">
<br>
<div class="form-group">
<label>Ganhos do mês Dezembro: </label>
<input type="text" name="ganhosDez" value="<?= $ganhosDez ?>" required>
<label>Despesas Dezembro: </label>
<input type="text" name="despesasDez" value="<?= $despesasDez ?>" required>
<label>Lucro: </label>
<input disabled value="<?=lucroDez ?>">
<br>
<label> Ganho Anual: </label>
<input disabled value="<?=$ganhoAnual ?>">
<br>
<label> Perca Anual: </label>
<input disabled value="<?=$percaAnual ?>">
<br>
<label> Lucro Anual: </label>
<input disabled value="<?=$lucroAnual ?>">
<br>

<button name="btn_calcular">Calcular</button>
 </form>


 




