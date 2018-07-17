<?php
$host     = 'localhost:8080';
$user     = 'root';
$password = 'tania1189';
$db       = 'comensal';

$conection = @mysqli_connect($host, $user, $password, $db);
if (!$conection) {

    echo "Error en la conexion";
}
