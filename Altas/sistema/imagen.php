<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['comentario'];

 $ins = $con -> query("INSERT INTO platillos (id,nombre,precio,descripcion) VALUES ('','$nombre','$precio','$descripcion')");
if ($ins == 1){
	 header("location:platillos.php");

}

?>
