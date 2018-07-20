





<?php

$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
    header('location: sistema/');
} else {

    if (!empty($_POST)) {
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = 'Ingrese su usuario y contraseña';
        } else {
            require_once "conexion.php";
            $user = mysqli_real_escape_string($conection, $_POST['usuario']);
            $pass = md5(mysqli_real_escape_string($conection, $_POST['clave']));

            $query = mysqli_query($conection, "SELECT * FROM usuario WHERE usuario='$user' AND clave='$pass'");
            mysqli_close($conection);
            $result = mysqli_num_rows($query);

            if ($result > 0) {
                $data               = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['idUsuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email']  = $data['email'];
                $_SESSION['user']   = $data['usuario'];
                $_SESSION['rol']    = $data['rol'];

                header('location: sistema/');
            } else {
                $alert = 'Usuario y/o contraseña incorrecta';
                session_destroy();
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
    <section id="container">
       <form action="" method="post">
      <img class="img" src="sistema/img/logo.png" alt="logotipo" width="200px" height="100px">
             <h4>Iniciar sesion</h4>

           <input type="text" name="usuario" placeholder="Usuario">
           <input type="password" name="clave" placeholder="contraseña">
           <input type="submit" value="Ingresar">
           <a href="" ><center>Salir</center></a>
           <div class="alert"> <?php echo isset($alert) ? $alert : '' ?></div>

           
       </form>
    </section>
</body>
</html>
















