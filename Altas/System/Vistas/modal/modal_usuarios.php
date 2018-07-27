		<div class="modal fade" id="usuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Nuevo Usuario</h4>
					</div>
					<div class="modal-body">
			<form method="post">
          <div class="row">
			  <div class="col-md-6">
			    <label for="formGroupExampleInput">Nombre Usuario</label>
			    <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el Nombre de Usuario" required="">
			  </div>
			  <div class="col-md-6">
            
			    <label for="formGroupExampleInput">Correo</label>
			    <input type="email" name="correo" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el Nombre de Usuario" required="">
			  </div>
			  <div class="col-md-6">			  
			 
			    <label for="formGroupExampleInput">Nombre Usuario</label>
			    <input type="text" name="usuario" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el Nombre de Usuario" required="">
			  </div>
			  
			  <div class="col-md-6">
			    <label for="formGroupExampleInput">Contraseña Usuario</label>
			    <input type="text" name="clave" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Contraseña para el Usuario" required="">
			  </div>
           <div class="col-md-6">
			    <label for="formGroupExampleInput">Contraseña Usuario</label>
			    <input type="text" name="clave" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la Contraseña para el Usuario" required="">
			  </div>
            

         <!--   
             <div class="col-md-6">
              <label for="recipient-name" class="form-control-label">Tipo Usuario:</label>
              <select class="form-control chosen-select" id="idrol" name="idrol">
           <option value="0"  required="" >SELECCIONA UN TIPO DE USUARIO</option>
          <?php             
         //   $consulta = $conexion->query("SELECT * FROM rol order by rol asc");
           // while ($fila=$consulta->fetch(PDO::FETCH_OBJ)) {                    
            //echo '<option value="'.$fila->idrol.'">'.ucwords($fila->rol).  '</option> ';
           // }?>
                </select>
            </div>-->
           <div class="col-md-12">
       <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						<button type="submit" name="guardarUsuario" class="btn btn-primary">Gurdar usuarios</button>
                   </div>
                
			 </div>		
					</div>
           </form>
					
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<?php 

		 $usuario = new UsuariosController();
		 $usuario->ingresarUsuariocontroller();
         $usuario->deleteUsuariosController();

		 ?>