<nav class="navbar navbar-default">
    <ul>
        <li><a href="index.php">Inicio</a></li>

        <?php
                    if($_SESSION['rol'] == 1){
                    ?>
            <li class="principal">
                <div class="btn-group">
                    <a type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
					Empleados<span class="caret"></span>
	  					</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="Registro_Usuario.php">Registro de Empleados</a></li>
                        <li><a href="Lista_Usuarios.php">Lista de Empleados</a></li>
                    </ul>
                </div>
            </li>
            <?php } ?>


            <?php
                    if($_SESSION['rol'] == 2 || $_SESSION['rol']==1){


                      ?>
                <li class="principal">
                    <div class="btn-group">
                        <a type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
					Reservaciones <span class="caret"></span>
	  					</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="lista_reservaciones.php">Lista de Reservaciones</a></li>
                        </ul>
                    </div>
                </li>
                <?php }  ?>


                <?php
                    if($_SESSION['rol'] == 3 || $_SESSION['rol']==1){

                      ?>
                    <li class="principal">
                        <div class="btn-group">
                            <a type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
	    							Registro de Platillos <span class="caret"></span>
	  					</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="platillos.php">Nuevos Platillos</a></li>
                                <li><a href="lista_platillos.php">Lista de Platillos</a></li>

                            </ul>
                        </div>
                    </li>
                    <?php }  ?>

                    <?php
                    if($_SESSION['rol'] == 3 || $_SESSION['rol']==1){

                      ?>
                        <li class="principal">
                            <div class="btn-group">
                                <a type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
	    							Facturas <span class="caret"></span>
	  					</a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Nueva Factura</a>
                                    </li>
                                    <li>
                                        <a href="#">Facturas</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <?php }  ?>

                            <?php
                    if($_SESSION['rol'] == 3 || $_SESSION['rol']==1){

                      ?>
                    <li class="principal">
                        <div class="btn-group">
                            <a type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
	    							Mesas <span class="caret"></span>
	  					</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="Mesas.php">Mesas reservadas</a></li>
                                <li><a href="lista_platillos.php">Lista de mesas</a></li>

                            </ul>
                        </div>
                    </li>
                    <?php }  ?>




    </ul>
</nav>
