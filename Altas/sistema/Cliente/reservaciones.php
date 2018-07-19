<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />
    <link rel="stylesheet" href="css/estilocarta.css">

    <!--
												//////////////////////////////////////////////////////

												FREE HTML5 TEMPLATE
												DESIGNED & DEVELOPED by FreeHTML5.co

												Website: 		http://freehtml5.co/
												Email: 			info@freehtml5.co
												Twitter: 		http://twitter.com/fh5co
												Facebook: 		https://www.facebook.com/fh5co

												//////////////////////////////////////////////////////
												-->
    <?php include "include/scrips.php"; ?>

</head>

<body>
  <div class="container-fluid">
    
        <section>
         <br><br>
           <a id="menu1"><h2 class="text-center">PLATILLOS</h2></a>
           <hr>
           <div class="container-fluid" id="contenido">
         
           </div>
        </section>

        <section>
          <br>
           <a id="menu2"><h2 class="text-center">POSTRES</h2></a>
           <hr>
           <div class="container-fluid" id="contenido2">
         
           </div>
        </section>

        <section>
          <br>
           <a id="menu3"><h2 class="text-center">BEBIDAS</h2></a>
           <hr>
           <div class="container-fluid" id="contenido3">
         
           </div>
        </section>

  </div>
  


  </div>
  
  <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <h4><a href="salir.php"><img class="close" src="" alt="" title="Salir">Cerrar Sesion</a></h4>
   
  </div>
  

</footer>


<?php include "include/scrips.php"; ?>

  <script>

 $(document).ready(function() {
        $("#menu1").click(function(event) {
          $("#contenido").load('platillo.php');
        });
      });

$(document).ready(function() {
        $("#menu2").click(function(event) {
          $("#contenido2").load('platillo.php');
        });
      });

$(document).ready(function() {
        $("#menu3").click(function(event) {
          $("#contenido3").load('platillo.php');
        });
      });

  </script>
</body>

</html>

