<?php 	
session_start();
include('conexion.php');

$producto = $_SESSION['shopping_cart'];

var_dump($producto);

foreach ($producto as $key => $value) {

	$nombre = $value["nombre"];
	$cantidad = $value["cantidad"];
	$precio= $value["precio"];
	$total = $value["precio"] * $value["cantidad"];
	
	//var_dump($value['cantidad']);
	$sql = "INSERT INTO pedido (idpedido,nombre,cantidad,precio,total) VALUES(null,'$nombre','$cantidad','$precio','$total')";

	echo $sql;
	$ins = $con->query($sql);
		# code...
}

	if ($ins) {
	echo"si";

	}else{
		echo "no";
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>


</head>

 </head>
 <body>
 	
 </body>
 </html>