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
               <h2>Nome da Empresa*</h2>
               <h5>Aqui você poderá cadastrar suas empresas</h5>
             </div>
           </div>
           <!--/. ROW -->
           <hr />
           <div class="form-group">
             <label>Nome da empresa*</label>
             <input class="form-control" placeholder="Digite o nome da empresa..."</label>
           </div>   
           <div class="form-group">
             <label>Telefone</label>
             <input class="form-control" placeholder="Digite o telefone da empresa..."</label>
           </div>
              <div class="form-group">
             <label>Endereço</label>
             <input class="form-control" placeholder="Digite o endereço da empresa..."</label>
           </div>
             <button type="submit" class="btn btn-success">Gravar</button>
           </div>
           <!--/. PAGE INNER -->
         </div>
       </body>
    </html>
