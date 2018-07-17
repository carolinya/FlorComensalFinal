<?php

session_start();
if($_SESSION['rol'] == 3)
{
   // header("location:/../../.");
}
include "../conexion.php";

if (!empty($_POST)) {
    $alert = '';
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol'])) {
        $alert = '<p class="msn_error">Todos los campos son abligatorios.</p>';
    } else {

        $nombre = $_POST['nombre'];
        $email  = $_POST['correo'];
        $user   = $_POST['usuario'];
        $clave  = md5($_POST['clave']);
        $rol    = $_POST['rol'];

        $query  = mysqli_query($conection, "SELECT*FROM usuario WHERE usuario = '$user' OR correo = '$email'");
        $result = mysqli_fetch_array($query);
        if ($result > 0) {
            $alert = '<p class="msg_error">El correo o el usuario ya existe.</p>';
        } else {
            $query_insert = mysqli_query($conection, "INSERT INTO usuario(nombre,correo,usuario,clave,rol)
            VALUES('$nombre','$email','$user','$clave','$rol')");
            if ($query_insert) {
                $alert = '<p class="msg_save">Usuario creado correctamente</p>';
            } else {
                $alert = '<p class="msg_error">Error al crear el usuario.</p>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <?php include "includes/scripts.php";?>
    <title>Registro Usuario</title>

   <script>
$(document).ready(function(){
     $("#texto").toggle(0);
 $("#cambia").click(function(){
 $("#texto").toggle(1000);
 });
});

$(document).ready(function(){
 $("#texto2").toggle(0);
 $("#cambia2").click(function(){
 $("#texto2").toggle(1000);
 });
});

$(document).ready(function(){
 $("#texto3").toggle(0);
 $("#cambia3").click(function(){
 $("#texto3").toggle(1000);
 });
});
</script>
</head>

<body>
    <?php include "includes/header.php";?>
    <section id="container">

        <div class="form_register">
            <a id="#cambia" href="#"><h2>PLATILLOS</h2></a>
            <hr>
            <div id="texto">
            <div class="alert">
                <?php echo isset($alert) ? $alert : ''; ?>
            </div>

            <form action="" method="post">
                <label for="nombre">Nombre del Platillo</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del Platillo">
                <label for="correo">Precio</label>
                <input type="text" name="correo" id="correo" placeholder="Precio">
                <label for="usuario">Descripcion</label>
                <textarea rows="10" cols="42" name="comment" form="usrform">
                  </textarea>

                <input type="submit" value="Agregar Nuevo Usuario" class="btn_save">
            </form>



        </div>
</div>
<div class="form_register">
            <a id="#cambia2" href="#"><h2>POSTRES</h2></a>
            <hr>
            <div id="texto2">
            <div class="alert">
                <?php echo isset($alert) ? $alert : ''; ?>
            </div>

            <form action="" method="post">
                <label for="nombre">Nombre del Platillo</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del Platillo">
                <label for="correo">Precio</label>
                <input type="text" name="correo" id="correo" placeholder="Precio">
                <label for="usuario">Descripcion</label>
                <textarea rows="10" cols="42" name="comment" form="usrform">
                  </textarea>

                <input type="submit" value="Agregar Nuevo Usuario" class="btn_save">
            </form>



        </div>
</div>
<div class="form_register">
            <a id="#cambia3" href="#"><h2>BEBIDAS</h2></a>
            <hr>
            <div id="texto3">
            <div class="alert">
                <?php echo isset($alert) ? $alert : ''; ?>
            </div>

            <form action="" method="post">
                <label for="nombre">Nombre del Platillo</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del Platillo">
                <label for="correo">Precio</label>
                <input type="text" name="correo" id="correo" placeholder="Precio">
                <label for="usuario">Descripcion</label>
                <textarea rows="10" cols="42" name="comment" form="usrform">
                  </textarea>

                <input type="submit" value="Agregar Nuevo Usuario" class="btn_save">
            </form>



        </div>
</div>

    </section>
    <?php include "includes/footer.php";?>
</body>

</html>
