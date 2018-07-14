<?php
   session_start();
if($_SESSION['rol'] == 3)
{
  //  header("location: ./");
}
    include"../conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Lista de Platillo</title>
</head>
<body>
    <?php include "includes/header.php"; ?>
	<section id="container">
		<h1>Lista de Reservaciones</h1>
		<!--<a href="platillos.php" class="btn_new">Ingresar un Platillo Nuevo</a>-->
		<table>
		    <tr>
            <th>Fecha</th>
		        <th>Nombre del Cliente</th>
		        <th># de Celular</th>
            <th># de de Personas</th>
            <th>Tipo de Evento</th>
            <th>Hora</th>
            <th>Acciones</th>

		    </tr>
		    <?php
            //paginador
            $sql_registe = mysqli_query($conection, "SELECT COUNT(*) as total_registro FROM platillos");

            $result_register = mysqli_fetch_array($sql_registe);
            $total_registro = $result_register['total_registro'];

            $por_pagina = 5;

            if(empty($_GET['pagina']))
            {
                $pagina = 1;
            }else{
                $pagina = $_GET['pagina'];
            }

            $desde = ($pagina-1) * $por_pagina;
            $total_paginas = ceil($total_registro/$por_pagina);

            $query = mysqli_query($conection,"SELECT nombre,celular,personas,tipo,fecha,hora FROM reservar order by fecha ASC LIMIT $desde,$por_pagina");

            $result = mysqli_num_rows($query);

            if($result > 0)
            {
              while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $data["fecha"]; ?></td>
		        <td><?php echo $data["nombre"]; ?></td>
		        <td><?php echo $data["celular"]; ?></td>
            <td><?php echo $data["personas"]; ?></td>
		        <td><?php echo $data["tipo"]; ?></td>
            <td><?php echo $data["hora"]; ?></td>
		        <td>
		            <a class="link_edit" href="Editar_Usuario.php?id=<?php echo $data["nombre"]; ?>">Editar</a>
		            <?php if($data["nombre"] != 1){?>
		            -
		            <a class="link_delete" href="Eliminar_Confirmar_Usuario.php?id=<?php echo $data["nombre"]; ?>">Eliminar</a>
		            <?php } ?>
		        </td>
		    </tr>
            <?php
              }
            }

            ?>

		</table>
		<div class="paginador">
		    <ul>
            <?php
                if($pagina != 1)
                {
                ?>
		        <li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
		        <li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
		        <?php
                }
                for($i=1; $i <= $total_paginas; $i++)
                {
                    if($i == $pagina)
                    {
                        echo '<li class="pageSelected">'.$i.'</li>';
                    }else{
                      echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                    }

                }
                if($pagina != $total_paginas)
                {
                ?>

		        <li><a href="?pagina=<?php echo $pagina+1; ?>">>></a></li>
		        <li><a href="?pagina=<?php echo $total_paginas; ?>">>|</a></li>
		        <?php }    ?>
		    </ul>
		</div>
	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>
