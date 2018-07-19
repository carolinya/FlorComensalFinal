<?php
$host     = 'localhost';
$user     = 'root';
$password = 'RARO97';
$db       = 'comolaflor';

$conection = @mysqli_connect($host, $user, $password, $db);
if (!$conection) {

    echo "Error en la conexion";
}
