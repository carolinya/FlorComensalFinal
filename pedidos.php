<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$personas=$_POST['personas'];
$tipo=$_POST['tipo'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];


 $ins = $con -> query("INSERT INTO reservar (id,nombre,correo,celular,personas,tipo,fecha,hora) VALUES ('','$nombre','$correo','$celular','$personas','$tipo','$fecha','$hora')");
if ($ins == 1){
	 header("location:reservaciones.php");

}

?>
