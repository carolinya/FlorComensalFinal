<?php
$host     = 'localhost:8080';
$user     = 'root';
<<<<<<< HEAD
$password = 'tania1189';
=======
$password = '';
>>>>>>> 76c1421551f224c1cb04a39392ae4a1f95fd2b9a
$db       = 'comensal';

$conection = @mysqli_connect($host, $user, $password, $db);
if (!$conection) {

    echo "Error en la conexion";
}
