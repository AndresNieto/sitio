<?php ob_start() ?>
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nuevo</center></h4>
      </div><form action="/CMS/index.php/enter_user_model" method="post" >
      <div class="modal-body">
        
           
               <div class="row">
                   <div class="col-md-12">
                       <label>Nombre de Usuario</label>
                       <input class="form-control" id="" name="user_name" required><br>
                       <label>Contraseña</label>
                       <input class="form-control" name="user_password" type="password"></input>
                   </div>
                   <div class="col-md-12"><br>
                       <label>Tipo de Usuario</label>
                       <select class="form-control" name="user_type">
                         <option>Administrador</option>
                         <option>Contenidos</option>
                       </select>
                   </div>   
               </div>
           
      </div>
      <div class="modal-footer">
      <center>
      <button type="submit" class="btn btn-success">Ingresar</button>
      <a type="button"class="btn btn-primary " data-toggle="modal" data-dismiss="modal">Cancelar</a>
      </center>
      </div></form>

      
    </div>
  </div>
</div>
<div id="page-wrapper">   <br>        

      <div class="row">
        <div class="col-lg-12">
          <center><h2>Usuarios</h2></center>  
          <div class="panel panel-primary">
            <div class="panel-heading">
            <a type="button"class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new" id="btn_new"></a>

            </div>
            <div class="panel-body">
              <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead id="nom2" name="rol">
                  <tr>
                      <th data-field="id" data-sortable="true" data-align="center" id="name" class="1">Nombre de Usuario</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Tipo de Usuario</th>  
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Acciones</th>
                  </tr>
                  </thead>
                  <?php if(isset($user)){?>
                    <tbody id="Fila">
                  
                    <?php foreach($user as $user){ ?>
                    <tr >                                 
                      <td ><?php echo $user['user'];?></td>
                      <td ><?php echo $user['type_user'];?></td> 
                      <td>
                        <div class="col-md-6">
                        <form action="/CMS/index.php/verusuario" method="post"> 
                          <input name="id" value="<?php echo $user['id'];?>" hidden>
                          <button type="submit" class="btn btn-warning glyphicon glyphicon-repeat"></button>
                        </form></div>
                        <div class="col-md-6">
                        <form action="/CMS/index.php/delete_user_model" method="post"> 
                          <input name="id" value="<?php echo $user['id'];?>" hidden>
                          <button type="submit" class="btn btn-danger glyphicon glyphicon-remove"></button>
                        </form></div>
                      </td>                                               
                    </tr>
                  <?php }}  ?>
                    </tbody>
              </table>

            </div>
          </div>
        </div>
      </div><!--/.row-->
        </div>


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>




