<nav>
			<ul>
				<li><a href="sistema/salir.php">Inicio</a></li>
				<li class="principal">
				<?php 
                    if($_SESSION['rol'] == 1){
                    ?>
				
					<a href="#">Empleados</a>
					<ul>
						<li><a href="Registro_Usuario.php">Registro de Empleados</a></li>
						<li><a href="Lista_Usuarios.php">Lista de Empleados</a></li>
					</ul>
				</li>
				<?php } ?>
				<?php 
                    if($_SESSION['rol'] == 2 || $_SESSION['rol']==1){
                        
                        
                      ?>  
				<li class="principal">
					<a href="#">Clientes</a>
					<ul>
						<li><a href="#">Reservaciones</a></li>
						<li><a href="#">Lista de reservaciones</a></li>
					</ul>
				</li>
				<?php }  ?>
				<?php 
                    if($_SESSION['rol'] == 3 || $_SESSION['rol']==1){
                        
                      ?> 
				<li class="principal">
					<a href="#">Registro Platillos</a>
					<ul>
						<li><a href="platillos.php">Nuevos Platillos</a></li>
						<li><a href="lista_platillos.php">Lista de Platillos</a></li>
					</ul>
				</li>
				<?php }  ?>
				<?php 
                    if($_SESSION['rol'] ==4 ){
                        header("location: Cliente/reservaciones.php");
                      ?>  
				<li class="principal">
					<a href="#">Ordenar Pedidos</a>
					<ul>
						<li><a href="#">Ordenar pedidos</a></li>
						<li><a href="#">Lista de Pedidos</a></li>
					</ul>
				</li>
				<?php }  ?>
				<?php 
                    if($_SESSION['rol'] == 3 || $_SESSION['rol']==1){
                        
                      ?> 
				<li class="principal">
					<a href="#">Facturas</a>
					<ul>
						<li><a href="#">Nuevo Factura</a></li>
						<li><a href="#">Facturas</a></li>
					</ul>
				</li>
				<?php }  ?>
			</ul>
		</nav>
