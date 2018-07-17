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
                $alert = 'Usurio y/o contraseña incorrecta';
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
</head>
<body>
    <section id="container">
       <form action="" method="post">
        <h3>Iniciar sesion</h3>
           <img class="img" src="sistema/img/logotipo.png" alt="logotipo" width="400px" height="850px">
           <input type="text" name="usuario" placeholder="Usuario">
           <input type="password" name="clave" placeholder="contraseña">
           <div class="alert"> <?php echo isset($alert) ? $alert : '' ?></div>
           <input type="submit" value="Ingresar">
       </form>
    </section>
</body>
</html>