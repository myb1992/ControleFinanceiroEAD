<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once'_head.php';
?>

<body>
   <div id="wrapper">
      <?php
      include_once '_topo.php';
      include_once '_menu.php';
      ?>
      <!--/. NAV SIDE -->
      <div id="page-wrapper">
        <div id="page-inner">
           <div class="row">
             <div class="col-md-12">
               <h2>Nova Conta</h2>
               <h5>Aqui você poderá cadastrar todas as suas contas </h5>
               
               </div>
               </div>
               <!--/. ROW -->
               <hr />
               <div class="form-group">
               <label>Nome do Banco*</label>
               <input class="form-control" placeholder="Digite o nome do banco..." />
               </div>
            <div class="form-group">
               <label>Agência*</label>
               <input class="form-control" placeholder="Digite o nome da agência..." />
               </div>
            <div class="form-group">
               <label>Número da conta*</label>
               <input class="form-control" placeholder="Digite o numero da conta..." />
               </div>
            <div class="form-group">
               <label>Saldo*</label>
               <input class="form-control" placeholder="Digite o saldo..." />
               </div>
               <button type="submit" class="btn btn-success">Gravar</button>
               </div>
               <!--/. PAGE INNER -->
               </div>
               <!-- /. PAGE WRAPPER -->
               </div>
