<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <div class="row">
          <div class="col-md-12">
            <h2>Consultar Empresa</h2>
            <h5>Consule todas as suas empresas cadastradas aqui</h5>
          </div>
        </div>
        <!-- /. ROW -->
        <hr />
        <div class="row">
          <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
              <div class="panel-heading">
                Empresas Cadastradas. Caso queira alterar, clique no botão
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nome da Empresa</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Ação</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>(nome)</td>
                        <td>(telefone)</td>
                        <td>(endereço)</td>
                        <td>
                           <a href="alterar_empresa.php" class="btn btn-warning btn-sm">Alterar</a>
                         </td>
                         </tr>
                      
            
