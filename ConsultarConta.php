<?php
include_once '_head.php';
?>

<body>
 <div id="wrapper">
 <?php
 include_once '_topo.php';
 include_once '_menu.php';
 ?>
 <!-- /. NAV SIDE -->
 <div id="page-wrapper">
   <div id="page-inner">
     <div class="row">
      <div class="col-md-12">
       <h2>Consultar Contas</h2>
       <h5> Consulte todas as suas Contas aqui</h5>
       </div>
       </div>
       <!--/. ROW -->
       <hr />
       <div class="row">
       <div class="col-md-12">
       (PROCURAR UMA DIV CHAMADA "ADVANCED TABLES NO table.html")
       <!-- Advanced Tables -->
       <div class="panel panel-default">
       <div class="panel-heading">
         Contas cadastradas. Caso deseja alterar, clique no botão
         </div>
         <div class="panel-body">
         <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" id="
         <thead>
         <tr>
         <th>Banco</th>
         <th>Agência</th>
         <th>Número da conta</th>
         <th>Saldo</th>
         <th>Ação</th>
         </tr>
         </thead>
         <tbody>
         <tr class="odd gradeX">
         <td>(banco)</td>
         <td>(ag)</td>
         <td>(num. conta)</td>
         <td>(saldo)</td>                      
         <td>
         <a href="alterar_conta.php" class="btn btn-warning btn-sm">Alterar</a>
         </td>
         <td></td>
         <td class="center">4</td>
         <td class="center">X</td>
