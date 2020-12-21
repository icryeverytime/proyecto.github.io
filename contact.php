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
        <div id="navbar">
            <header>
                <a href="index.html">
                    <img src="img/Logo2.png" class="img-centrar" id="head">
                </a>
                <br>
                </header>
                <nav>
                    <ul>
                        <li><a id="hide" href="index.html"><br>Inicio</a></li>
                        <li><a href="aas.html" id="hide"><br>Tienda</a></li>
                        <li><a href="acercade.html" id="hide"><br>Acerca de</a></li>
                        <li><a class="active" href="contact.php" id="hide"><br>Contáctanos</a></li>
                        <li><a href="faq.html" id="hide"><br>Ayuda</a></li>
                        <li style="float: right;"> <button href="login.html" id="log">Login</li>
                        <li onclick="tres()">
                          <img src="img/menu.png" width="40px" height="40px" id="show">
                        </li>
                        <li style="float: right;"><a href="login.html" style="height: 50.8px;"><img src="img/cart.png" width="31px" height="40px"></a></li>
                      </ul>
                </nav> 
                <div id="mostrar">
                  <a href=# id="muestra" onclick="dos()">X</a>
                  <a href="index.html" class="active" id="muestra" style="background-color:  #0466C8;">Inicio</a>
                  <a href="aas.asp" id="muestra">Tienda</a>
                  <a href="acercade.html" id="muestra">Acerca de</a>
                  <a href="contact.php" id="muestra">Contáctanos</a>
                  <a href="faq.html" id="muestra">Ayuda</a>
                </div>
        </div>
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

        <footer>
          <div class="pie">
             <div>
               <h2>Sobre nosotros</h2>
               <a href="acercade.html" class="linkpie">Más información</a>
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
    </body>
</html>