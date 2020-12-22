<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Principal</title>
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="stylesheet" href="estilos/estilos.css" />
  <link rel="stylesheet" href="estilos/captcha.css" />

  <script src="https://kit.fontawesome.com/cebbaaaaab.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/funciones.js"></script>


  <script>
    var Index = 0;
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var xbox = document.getElementsByClassName("logoxbox");
      var play = document.getElementsByClassName("logoplay");
      var nintendo = document.getElementsByClassName("logonintendo");
      var slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
</head>

<body>

      <header>
    <div id="navbar">
        <a href="index.php">
          <img src="img/Logo2.png" class="img-centrar" id="head">
        </a>
        <br>
      <nav>
        <ul>
          <li><a class="active" id="hide" href="index.php"><br>Inicio</a></li>
          <li><a href="aas.php" id="hide"><br>Tienda</a></li>
          <li><a href="acercade.php" id="hide"><br>Acerca de</a></li>
          <li><a href="contact.php" id="hide"><br>Contáctanos</a></li>
          <li><a href="faq.php" id="hide"><br>Ayuda</a></li>
          <li style="float: right;">


            <?php if(empty($_SESSION["usuario"])): ?>
            <button id="log" onclick="document.getElementById('id01').style.display='block'">Login</button>
            <?php else: ?>
          <li style="float: right;"> <button id="log2" onclick="location.href='logout.php';">Logout</li>
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
          <li style="float: right;"><a href="" style="height: 50.8px;"><img src="img/cart.png" width="31px"
                height="40px"></a></li>
        </ul>
      </nav>
      <div id="mostrar">
        <a href=# id="muestra" onclick="dos()">X</a>
        <a href="index.php" class="active" id="muestra" style="background-color:  #0466C8;">Inicio</a>
        <a href="aas.asp" id="muestra">Tienda</a>
        <a href="acercade.php" id="muestra">Acerca de</a>
        <a href="contact.php" id="muestra">Contáctanos</a>
        <a href="faq.php" id="muestra">Ayuda</a>

        </div>
      </div>
  </header>
    
  <div
    style="text-align: center; color: #FFF; display: flex; flex-direction: column; align-items: center; justify-content: center;  letter-spacing: 1px;">
    <h1
      style="background-image:url(https://media.giphy.com/media/3ornjHyjf1FiUneGGI/giphy.gif); background-size: cover; color: transparent; -moz-background-clip: text; -webkit-background-clip:text; text-transform: uppercase; font-size: 100px; line-height: .75; margin:10px 0;">
      it's all<br />about<br />gaming</h1>
  </div>

  <div class="content">
    <h2 style="text-align: center;">Encuentra todas las consolas de la nueva generación</h2>
    <div style="text-align:center">
      <img class="logoplay" src="img/playlogo.png" height="100px" width="100px" onclick="currentSlide(1)"
        onmouseover="currentSlide(1)">
      <img class="logonintendo" src="img/nintendo.png" height="100px" width="265px" onclick="currentSlide(2)"
        onmouseover="currentSlide(2)">
      <img class="logoxbox" src="img/xboxlogo.png" height="100px" width="100px" onclick="currentSlide(3)"
        onmouseover="currentSlide(3)">
    </div>
    <div class="slideshow-container">

      <div class="mySlides fade" style="display: inline-block;">
        <img src="img/ps5.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="img/switch.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="img/xboxseriesx.jpg" style="width:100%">
      </div>

    </div>
    <div class="back">
      <br><br><br><br><br>
      <button id="butt">Utiliza el codigo JPG12D43 para 10% de descuento sobre los productos de la ultima
        generacion</button>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <button id="butt" onclick="location.href='tienda.php';">Ir a tienda</button>
      <br><br>
    </div>
    <br>
    <div id="suscripcion">
      <br><br>
      <h2>Unete a nuestra lista de correo y seras primero en conocer lo nuevo</h2>
      <form action="promocion/enviar-correo.php" id="unate" method="post">
        <label for="cor" id="lab">Correo:</label><br><br>
        <input type="email" id="cor" name="email" placeholder="Direccion de correo" required=""
          oninvalid="this.setCustomValidity('Por favor ingrese correo valido')" oninput="setCustomValidity('')"><br><br>
        <input id="bot" type="submit" value="Suscribete ahora">
        <br><br><br><br>
      </form>
    </div>
    <br><br><br>
  </div>
  
  <footer>
    <div class="pie">
      <div>
        <h2>Sobre nosotros</h2>
        <a href="acercade.php" class="linkpie">Más información</a>x
      </div>
      <div>
        <h2>Síganos</h2>
        <a href="https://www.facebook.com/Midnight-Profesional-113600053882887"><img src="img/facebook-icon.png"
            width="40px" height="40px"></a>
        <a href="https://www.instagram.com/midnightprofessional/"><img src="img/Instagram.png" width="40px"
            height="40px"></a>
        <a href="https://twitter.com/MidnightProfes1"><img src="img/Twitter-icon.png" width="40px" height="40px"></a>
      </div>
      <div>
        <h2>Contáctanos</h2>
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


  <script>
    window.onscroll = function () {
      myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    var xl = window.matchMedia('(min-width: 1200px)');
    var l = window.matchMedia('(min-width: 992px)');
    var m = window.matchMedia('(min-width: 768px)');
    var s = window.matchMedia('(min-width: 600px)');
    var xs = window.matchMedia('(max-width: 600px)');

    function myFunction() {
      var dos = document.getElementById("mostrar");
      dos.style.display = "none";
      if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky");
        if (xl.matches) {
          document.getElementById("head").style.height = '120px';
          document.getElementById("head").style.width = '462px';
        }
        if (l.matches) {
          document.getElementById("head").style.height = '100px';
          document.getElementById("head").style.width = '385px';
        }
        if (m.matches) {
          document.getElementById("head").style.height = '80px';
          document.getElementById("head").style.width = '308px';
        }
        if (s.matches) {
          document.getElementById("head").style.height = '60px';
          document.getElementById("head").style.width = '231px';
        }
        if (xs.matches) {
          document.getElementById("head").style.height = '40px';
          document.getElementById("head").style.width = '231px';
        }
      } else {
        navbar.classList.remove("sticky");
        if (xl.matches) {
          document.getElementById("head").style.height = '180px';
          document.getElementById("head").style.width = '752px';
        }
        if (l.matches) {
          document.getElementById("head").style.height = '160px';
          document.getElementById("head").style.width = '616px';
        }
        if (m.matches) {
          document.getElementById("head").style.height = '140px';
          document.getElementById("head").style.width = '539px';
        }
        if (s.matches) {
          document.getElementById("head").style.height = '120px';
          document.getElementById("head").style.width = '462px';
        }
        if (xs.matches) {
          document.getElementById("head").style.height = '100px';
          document.getElementById("head").style.width = '385px';
        }
      }
    }
  </script>





  <logi>
    
    <div id="id01" class="modal">

      <form class="modal-content animate" action="validar.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
          <img src="img/logologin.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="usuario"><b>Usuario</b></label>
          <input type="text" placeholder="Nombre de usuario" name="usuario" required>

          <label for="psw"><b>Contraseña</b></label>
          <input type="password" placeholder="Ingrese contraseña" name="contraseña" required>

        <table>
        
          <tr>
            <td>
              <input type="text" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha"
                size="4" readonly>
            </td>
            <td>
              <input type="text" name="txtcopia" id="txtcopia" size="10" placeholder="Ingrese el captcha" required>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          
          </table>
          <button type="submit" onclick="validar();">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Recordarme
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancelar</button>
          <span class="psw">No tienes cuenta? <a href="registro.html">Suscribete</a></span>
          Olvidaste tu contraseña? <a href="enviacontra.php">Recuperar contraseña</a>
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

<?php
    function codigo_captcha(){
      $k="";
      $paramentros="ABCDEFGHIJKLMNOPQRSTUVXYZ015";
      $maximo=strlen($paramentros)-1;
      for($i=0; $i<5; $i++){
        $k.=$paramentros[mt_rand(0,$maximo)];
      }
      return $k;
  }
  ?>


    <script type="text/javascript">
      function validar() {

        var copia = document.getElementById("txtcopia").value;
        var captcha = document.getElementById("captcha").value;

        if (copia != captcha) {
          alert("Captcha incorrecto");
          //window.location.href = 'incorrecto.php';
          window.open("logoutNI.php");
          window.close();
        } 
          
        
      }
    </script>


  </logi>


</body>

</html>