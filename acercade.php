<?php 
session_start();
?>

<!DOCTYPE html>
<html id="sw" lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Principal</title>
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="stylesheet" href="estilos/estilos.css" />
  <link rel="stylesheet" href="estilos/estilos2sw.css">
  <script src="https://kit.fontawesome.com/cebbaaaaab.js" crossorigin="anonymous"></script>
  <script src="js/funciones.js"></script>

</head>

<body id="sw">

  <div id="navbar">
    <header>
      <a href="index.php">
        <img src="img/Logo2.png" class="img-centrar" id="head">
      </a>
      <br>
    </header>
    <nav>
      <ul>
        <li><a id="hide" href="index.php"><br>Inicio</a></li>
        <li><a href="tienda.php" id="hide"><br>Tienda</a></li>
        <li><a class="active" href="acercade.php" id="hide"><br>Acerca de</a></li>
        <li><a href="contact.php" id="hide"><br>Contáctanos</a></li>
        <li><a href="faq.php" id="hide"><br>Ayuda</a></li>
        <?php if(empty($_SESSION["usuario"])): ?>
            <button id="log" onclick="document.getElementById('id01').style.display='block'">Login</button>
            <?php else: ?>
          <li style="float: right;"> <button id="log2" onclick="location.href='logout.php'; ">Logout</li>
          <?php endif; ?>

          </li>
          <li style="float: right;">

            <div class="nompadre">
              <div class="nomhijo">
                <?php 
        if(!empty($_SESSION["usuario"])) {
          echo $_SESSION["usuario"] ; 
        }
          ?>
              </div>
            </div>
        <li onclick="tres()">
          <img src="img/menu.png" width="40px" height="40px" id="show">
        </li>
        <li style="float: right;"><a href="login.php" style="height: 50.8px;"><img src="img/cart.png" width="31px"
              height="40px"></a></li>
      </ul>
    </nav>
    <div id="mostrar">
      <a href=# id="muestra" onclick="dos()">X</a>
      <a href="index.php" class="active" id="muestra" style="background-color:  #0466C8;">Inicio</a>
      <a href="tienda.php" id="muestra">Tienda</a>
      <a href="acercade.php" id="muestra">Acerca de</a>
      <a href="contact.php" id="muestra">Contáctanos</a>
      <a href="about.asp" id="muestra">Ayuda</a>
    </div>
  </div>


  <div class="content" style="padding-bottom: 20px;">

    <div style="overflow:hidden; position:absolute;width:50px; height:25px; left: -5px;">
      <div style="margin-top:-290px;">
        <object width="420" height="315">
          <param name="movie"
            value="https://www.youtube.com/v/EjMNNpIksaI?version=3&amp;hl=en_US&autoplay=1&amp;autohide=2">
          </param>
          <param name="allowFullScreen" value="true">
          </param>
          <param name="allowscriptaccess" value="always">
          </param>
          <embed src="https://www.youtube.com/v/EjMNNpIksaI?version=3&amp;hl=en_US&autoplay=1&amp;autohide=2"
            type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always"
            allowfullscreen="true"></embed>
        </object>

      </div>
    </div>

    <p id="start">Hace poco tiempo en una galaxia muy, muy cercana&hellip;</p>

    <div id="titles">
      <div id="titlecontent">

        <p class="center">EPISODIO III<br />
          El fin de un semestre.</p>

        <p>Nuestra historia.</p>

        <p>Todo esto comienza con un grupo de estudiantes de la carrera de I.S.C quienes deben sobrevivir a los
          proyectos finales del semestre en línea.</p>

        <p>Gracias a la pandemia del COVID-19, nuestra empresa Midnight Professional, se ha visto en la necesidad de
          cerrar tiendas físicas y abrirlas en línea.</p>

        <p>No obstante, hemos decidido que nuestros clientes son lo primero en esta galaxia, y de ahora en adelante les
          brindaremos un servicio sin igual. </p>

        <p class="center">Misión</p>

        <p>Nuestra misión como empresa es brindar un servicio de calidad a todas las personas quienes estén</p>

        <p>interesadas en todo lo que esté relacionado con el mundo de los videojuegos, figuras de acción, </p>

        <p>series de TV, películas y demás coleccionables. Siempre tendremos una variedad de productos con un precio</p>

        <p>flexible para que tú y los demás no se queden sin jugar.</p>

        <p class="center">Visión</p>

        <p>Queremos ser una de las más grandes empresas a nivel nacional, y convertirnos en tu primer opcion.</p>

        <p>Y poner en alto a México, dentro del mundo del Gaming; a su vez queremos comenzar</p>

        <p>con un proyecto que tenemos para llevar a más mexicanos a competiciones de eSports.</p>
        <p>Gracias por su atencion utiliza el codigo ST4RW3S para un descuento en la tienda</p>
      </div>
    </div>
    <iframe style="visibility:hidden" width="420" height="315" src="https://www.youtube.com/embed/1KAOq7XX2OY"
      frameborder="0" allowfullscreen></iframe>
  </div>
  <footer>
    <div class="pie">
      <div>
        <h2>Sobre nosotros</h2><br>
        <a href="acercade.php" class="linkpie">Más información</a>
      </div>
      <div>
        <h2>Síganos</h2><br>
        <a href="https://www.facebook.com/Midnight-Profesional-113600053882887"><img src="img/facebook-icon.png"
            width="40px" height="40px"></a>
        <a href="https://www.instagram.com/midnightprofessional/"><img src="img/Instagram.png" width="40px"
            height="40px"></a>
        <a href="https://twitter.com/MidnightProfes1"><img src="img/Twitter-icon.png" width="40px" height="40px"></a>
      </div>
      <div>
        <h2>Contáctanos</h2><br>
        <a href="contact.php" class="linkpie">Formulario de contacto</a>
      </div>
    </div>
    <div class="copyright">
      <div class="contenido">
        <img id="banco" src="img/pagos.png" alt=""><br><br>
        Copyright © 2020 Midnight Professional
      </div>
    </div>
  </footer>


  <logi>

<div id="id01" class="modal">

  <form class="modal-content animate" action="validar.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>
      <img src="img/logologin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Nombre de usuario" name="usuario" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingrese contraseña" name="contraseña" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Recordarme
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'"
        class="cancelbtn">Cancelar</button>
      <span class="psw">No tienes cuenta? <a href="registro.html">Suscribete</a></span>
    </div>
  </form>
</div>

<script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
</logi>

</body>

</html>