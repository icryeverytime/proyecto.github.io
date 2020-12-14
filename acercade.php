<!DOCTYPE html>
<html id="sw" lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Principal</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="stylesheet" href="estilos/estilos.css"/>
        <link rel="stylesheet" href="estilos/estilos2sw.css">
        <script src="https://kit.fontawesome.com/cebbaaaaab.js" crossorigin="anonymous"></script>
        <script src="js/funciones.js"></script>

    </head>
    <body id="sw">
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
                        <li><a class="active" href="acercade.php" id="hide"><br>Acerca de</a></li>
                        <li><a href="contact.php" id="hide"><br>Contáctanos</a></li>
                        <li><a href="about.asp" id="hide"><br>Ayuda</a></li>
                        <li style="float:right;text-align: center;height: 50.8px;"><a href="login.html">Login</a></li>
                        <li onclick="tres()">
                          <img src="img/menu.png" width="40px" height="40px" id="show">
                        </li>
                        <li style="float:right;text-align: center;"><a href="login.html" ><img src="img/cart.png" width="31px" height="30px"></a></li>
                      </ul> 
                </nav> 
                <div id="mostrar">
                  <a href=# id="muestra" onclick="dos()">X</a>
                  <a href="index.html" class="active" id="muestra" style="background-color:  #0466C8;">Inicio</a>
                  <a href="aas.asp" id="muestra">Tienda</a>
                  <a href="acercade.php" id="muestra">Acerca de</a>
                  <a href="contact.php" id="muestra">Contáctanos</a>
                  <a href="about.asp" id="muestra">Ayuda</a>
                </div>
        </div>

        <div class="content">

        <div style="overflow:hidden; position:absolute;width:50px; height:25px; left: -5px;">
  <div style="margin-top:-290px;">
  <object width="420" height="315">
    <param name="movie" value="https://www.youtube.com/v/EjMNNpIksaI?version=3&amp;hl=en_US&autoplay=1&amp;autohide=2"></param>
    <param name="allowFullScreen" value="true"></param>
    <param name="allowscriptaccess" value="always"></param>
    <embed src="https://www.youtube.com/v/EjMNNpIksaI?version=3&amp;hl=en_US&autoplay=1&amp;autohide=2" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed>
  </object>
  
  </div>
</div>

<p id="start">Hace poco tiempo en una galaxia muy, muy cercana&hellip;</p>

<div id="titles">
  <div id="titlecontent">

    <p class="center">EPISODIO III<br />
      LA VENGANZA DE LA MAESTRA GINA</p>

    <p>Nuestra historia.</p>

    <p>Todo esto comienza con un grupo de estudiantes de la carrera de I.S.C quienes deben sobrevivir a los proyectos finales del semestre en línea.</p>

    <p>Gracias a la pandemia del COVID-19, nuestra empresa Midnight Professional, se ha visto en la necesidad de cerrar tiendas físicas y abrirlas en línea.</p>

    <p>No obstante, hemos decidido que nuestros clientes son lo primero en esta galaxia, y de ahora en adelante les brindaremos un servicio sin igual. </p>

    <p>The scrolling titles work well in Chrome, Safari and Firefox. Opera doesn't implement 3D transforms yet, but the text will scroll. IE users receive a blank page. A shame, but IE10 should support it.</p>

    <p>So how does it work? Well, it's fairly simple. We have an outer absolute DIV (#titles) which is rotated along the X-axis using perspective to give the impression of depth. The same DIV also has an :after psuedo-element which applies a linear gradient so the text appears to fade out.</p>

    <p>Inside, we have another absolutely-positioned DIV which contains the text (#titlecontent). The top is set to 100% to ensure it starts off-screen then uses CSS3 animation to move it upward over time. No JavaScript is required.</p>

    <p>You will probably need to adjust the movement amount and timing depending on the quantity of text you want to show. The 3D depth can also be tweaked in the #titles declaration.</p>

    <p>All the code is contained in this single HTML file&hellip;</p>

    <p class="center">Misión</p>
  
    <p>Sorry. Couldn't resist it.</p>
  
    <p>You're welcome to use this demonstration code in your own sites. Please link back to the original article at:</p>

    <p class="center">Visión</p>

    <p>and give me a shout on Twitter <a href="https://twitter.com/craigbuckler">@craigbuckler</a> &ndash; I'd love to see how you use and abuse it!</p>

    <p>Finally, Han shot first and the original, unadulterated movies remain the best. Stop fiddling with them, George!</p>
    </div>
</div>
<iframe style="visibility:hidden" width="560" height="315" src="https://www.youtube.com/embed/1KAOq7XX2OY" frameborder="0" allowfullscreen></iframe>
        </div>
        <footer>
          <div class="pie">
             <div>
               <h2>Sobre nosotros</h2><br>
               <a href="acercade.php" class="linkpie">Más información</a>
             </div>
             <div>
               <h2>Síganos</h2><br>
               <a href="https://www.facebook.com/Midnight-Profesional-113600053882887"><img src="img/facebook-icon.png" width="40px" height="40px"></a>
               <a href="https://www.instagram.com/midnightprofessional/"><img src="img/Instagram.png" width="40px" height="40px"></a>
               <a href="https://twitter.com/MidnightProfes1"><img src="img/Twitter-icon.png" width="40px" height="40px"></a>
             </div>
             <div>
              <h2>Contáctanos</h2><br>
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