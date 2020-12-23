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
  <script src="https://kit.fontawesome.com/cebbaaaaab.js" crossorigin="anonymous"></script>
  <script src="js/funciones.js"></script>
  <link rel="stylesheet" href="estilos/estilocontac.css" />
</head>

<body>

  <header>
    <div id="navbar">
      <header>
        <a href="index.php">
          <img src="img/Logo2.png" class="img-centrar" id="head">
        </a>
        <br>
      </header>
      <nav>
        <ul>

          <li><a class="active" id="hide" href="index.php"><br>Inicio</a></li>
          <li><a href="tienda/index.php" id="hide"><br>Tienda</a></li>

          <li><a href="acercade.php" id="hide"><br>Acerca de</a></li>
          <li><a href="contact.php" class="active" id="hide"><br>Contáctanos</a></li>
          <li><a href="faq.php" id="hide"><br>Ayuda</a></li>

          <li style="float: right;">
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
          <li style="float: right;"><a href="" style="height: 50.8px;"><img src="img/cart.png" width="31px"
                height="40px"></a></li>
        </ul>
      </nav>
      <div id="mostrar">
        <a href=# id="muestra" onclick="dos()">X</a>

        <a href="index.php" class="active" id="muestra" style="background-color:  #0466C8;">Inicio</a>
        <a href="tienda.php" id="muestra">Tienda</a>

        <a href="acercade.php" id="muestra">Acerca de</a>
        <a href="contact.php" class="active" id="muestra">Contáctanos</a>
        <a href="faq.php" id="muestra">Ayuda</a>
      </div>
    </div>
  </header>
  <contacto>
    <div class="container">
      <div class="row">
        <h1>Contáctanos</h1>
      </div>
      <div class="row">
        <h4 style="text-align:center">Queremos saber tu opinión.</h4>
      </div>
      <div class="row input-container">
        <div class="col-xs-12">
          <div class="styled-input wide">
          <form action="promocion/enviar-correo2.php" method="POST">
              <input type="text" name="nom" required />
              <label>Nombre</label>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="styled-input">
            <input type="email" id="email" name="email" size="40" required />
            <label>Email</label>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="styled-input" style="float:right;">
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" size="40" required />
            <label>Número de teléfono</label>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="styled-input wide">
            <textarea name="asuntonto" required></textarea>
            <label>Asunto</label>
          </div>
        </div>
        <div class="col-xs-12">
          <button type="submit" name="sendmail" class="btn-lrg submit-btn">Enviar mensaje</button>
        </div>
        </form>
      </div>
    </div>
  </contacto>
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
        <img src="img/pagos.png" alt=""><br><br>
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