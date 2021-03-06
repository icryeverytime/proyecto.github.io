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
  <link rel="stylesheet" href="estilos/faq.css">
  <script src="js/funciones.js"></script>

</head>

<body>
  <div id="navbar">
    <header>
      <a href="index.html">
        <img src="img/Logo2.png" class="img-centrar" id="head">
      </a>
      <br>
    </header>
    <nav>
      <ul>
        <li><a id="hide" href="index.php"><br>Inicio</a></li>
        <li><a href="tienda/index.php" id="hide"><br>Tienda</a></li>
        <li><a href="acercade.php" id="hide"><br>Acerca de</a></li>
        <li><a href="contact.php" id="hide"><br>Contáctanos</a></li>
        <li><a href="faq.php" class="active" id="hide"><br>Ayuda</a></li>

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
        </li>

        <li onclick="tres()">
          <img src="img/menu.png" width="40px" height="40px" id="show">
        </li>
        <li style="float: right;"><a href="login.html" style="height: 50.8px;"><img src="img/cart.png" width="31px"
              height="40px"></a></li>

      </ul>
    </nav>
    <div id="mostrar">
      <a href=# id="muestra" onclick="dos()">X</a>
      <a href="index.php" id="muestra" style="background-color:  #0466C8;">Inicio</a>
      <a href="aas.asp" id="muestra">Tienda</a>
      <a href="acercade.php" id="muestra">Acerca de</a>
      <a href="contact.php" id="muestra">Contáctanos</a>
      <a href="faq.php" class="active" id="muestra">Ayuda</a>
      <li style="float: right;">

    </div>
  </div>

  <div id="faq" class="faq-body">
    <div class="faq-header">
      <h3 class="faq-title">FAQ's</h3>
      <div class="seperator"></div>
      <div class="faq-list">
        <div>
          <details open>
            <summary title="¿Cuánto tiempo llevan como empresa?">¿Cuánto tiempo llevan como empresa?</summary>
            <p class="faq-content">Somos una empresa relativamente joven, no llevamos más de un par de meses. Sin
              embargo, esperamos durar tanto tiempo como sea posible para siempre satisfacer a nuestros clientes.</p>
          </details>
        </div>
        <div>
          <details>
            <summary title="¿Qué métodos de pago aceptan?">¿Qué métodos de pago aceptan?</summary>
            <p class="faq-content">Por lo pronto aceptamos pago por tarjeta y pagos por Oxxo.</p>
          </details>
        </div>
        <div>
          <details>
            <summary title="¿Sus productos son nuevos?">¿Sus productos son nuevos?</summary>
            <p class="faq-content">Por supuesto que sí, pero, a su vez contamos con una sección de artículos seminuevos
              o usados.</p>
          </details>
        </div>
        <div>
          <details>
            <summary title="¿Cuál es su política de reembolso o garantía?">¿Cuál es su política de reembolso o garantía?
            </summary>
            <p class="faq-content">Se cuenta con 30 días para solicitar un cambio o devolución por defectos de fábrica.
              Nosotros nos hacemos cargo de los gastos de retorno y de envío.
              Se cuenta con 7 días para solicitar un cambio o devolución de un producto el cual no se haya abierto. En
              dicho caso no nos hacemos responsables por los gastos de retorno ni de envío.
            </p>
          </details>
        </div>
        <div>
          <details>
            <summary title="¿Cobran envío?">¿Cobran envío?</summary>
            <p class="faq-content">Si el envío es dentro del centro de la república no tiene ningún costo, sin embargo,
              si son envíos al norte o al sur del país se cobrará dependiendo de las especificaciones del paquete. </p>
          </details>
        </div>
        <div>
          <details>
            <summary title="¿Con cuántas sucursales cuentan?">¿Con cuántas sucursales cuentan?</summary>
            <p class="faq-content">Por el momento solo contamos con una única sucursal, con el tiempo queremos
              expandirnos a través de todo el país.</p>
          </details>
        </div>
      </div>
    </div>
  </div>





  <footer>
    <div class="pie">
      <div>
        <h2>Sobre nosotros</h2>
        <a href="acercade.php" class="linkpie">Más información</a>
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
          <input type="text"  value="<?php if(isset($_COOKIE["usuario"])){echo $_COOKIE["usuario"];}?>" name="usuario" required>

          <label for="psw"><b>Contraseña</b></label>
          <input type="password" value="<?php if(isset($_COOKIE["contraseña"])){echo $_COOKIE["contraseña"];}?>" name="contraseña" required>

          
            
                <input type="text" name="captcha" id="captcha" value=<?php echo codigo_captcha(); ?> class="captcha rotar1"
                  size="4" readonly>
              
                <input type="text" name="txtcopia" id="txtcopia" size="10" placeholder="captcha" required>
             
            

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