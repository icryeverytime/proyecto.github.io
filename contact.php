<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Principal</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="stylesheet" href="estilos/estilos.css"/>
        <script src="https://kit.fontawesome.com/cebbaaaaab.js" crossorigin="anonymous"></script>
        <script src="js/funciones.js"></script>
        <link rel="stylesheet" href="estilos/estilocontac.css"/>
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
        <li><a href="aas.php" id="hide"><br>Tienda</a></li>
        <li><a href="acercade.php" id="hide"><br>Acerca de</a></li>
        <li><a href="contact.php" id="hide"><br>Contáctanos</a></li>
        <li><a href="about.asp" id="hide"><br>Ayuda</a></li>

        <li style="float: right;">
          <button href="index.php" id="log" role="button" class=""
            onclick="document.getElementById('id01').style.display='block'">Login</button>
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
      <a href="aas.asp" id="muestra">Tienda</a>
      <a href="acercade.php" id="muestra">Acerca de</a>
      <a href="contact.php" id="muestra">Contáctanos</a>
      <a href="about.asp" id="muestra">Ayuda</a>
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
          <form action="">
					<input type="text" required />
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
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" size="40"  required/> 
					<label>Número de teléfono</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
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
               <a href="https://www.facebook.com/Midnight-Profesional-113600053882887"><img src="img/facebook-icon.png" width="40px" height="40px"></a>
               <a href="https://www.instagram.com/midnightprofessional/"><img src="img/Instagram.png" width="40px" height="40px"></a>
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
        <img src="img/logologin.png" alt="Avatar" class="avatar" width="50px" height="50px">
      </div>

      <div class="container">
        <form method="POST">
        <label for="uname"><b>Nombre de usuario</b></label>
        <input type="text" placeholder="Usuario" id="usuario" name="usuario" required>

        <label for="psw"><b>Contraseña</b></label>
        <input type="password" placeholder="123" name="contraseña" required>

        <button type="submit" onclick="validar.php">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Recordarme
        </label>
        </form>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancelar</button>
        <span class="psw">No tienes cuenta? <a href="registro.php">Registrate</a></span>
      </div>
    </form>
  </div>
<logi>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




    </body>
</html>