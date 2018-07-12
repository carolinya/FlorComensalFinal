<?php
include"../conexion.php";

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['nombre'])|| empty($_POST['correo'])||empty($_POST['usuario'])||empty($_POST['clave'])||empty($_POST['rol']))
    {
        $alert = '<p class="msn_error">Todos los campos son abligatorios.</p>';
    }else{

        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $user = $_POST['usuario'];
        $clave = md5($_POST['clave']);
        $rol = $_POST['rol'];

        $query = mysqli_query($conection,"SELECT*FROM usuario WHERE usuario = '$user' OR correo = '$email'");
        $result = mysqli_fetch_array($query);
        if($result > 0){
            $alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
        }else{
            $query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,clave,rol)
            VALUES('$nombre','$email','$user','$clave','$rol')");
            if($query_insert){
                $alert = '<p class="msg_save">Usuario creado correctamente</p>';
            }else{
                $alert='<p class="msg_error">Error al crear el usuario.</p>';
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include "includes/scripts.php"; ?>
    <title>Registro Usuario</title>
</head>

<body>
    <?php include "includes/header.php"; ?>
    <section id="container">
        <div class="form_register">
            <h1>Platillos</h1>
            <hr>
            <div class="alert">
                <?php echo isset($alert)? $alert : ''; ?>
            </div>
            <form action="imagen.php" method="POST" >
                <label for="nombre">Nombre del Platillo</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del Platillo" required>
                <label for="correo">Precio</label>
                <input type="text" name="precio" id="correo" placeholder="Precio" required>
                <label for="usuario">Descripcion</label>
                <textarea rows="10" cols="42" name="comentario" required>
                </textarea>
                <input type="submit" value="Agregar a la Base de Datos" class="btn_save">
            </form>
        </div>
    </section>
    <?php include "includes/footer.php"; ?>
</body>

</html>
