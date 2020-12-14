<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Principal</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="stylesheet" href="estilos/estilos.css"/>
        <script src="https://kit.fontawesome.com/cebbaaaaab.js" crossorigin="anonymous"></script>
      <script>
        function tres(){
          var tres=document.getElementById("mostrar");
            tres.style.display="block";
        }
        function dos()
        {
          var dos=document.getElementById("mostrar");
          dos.style.display="none";
        }
      </script>
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
                        <li><a class="active" id="hide" href="index.html"><br>Inicio</a></li>
                        <li><a href="aas.html" id="hide"><br>Tienda</a></li>
                        <li><a href="contact.asp" id="hide"><br>Acerca de</a></li>
                        <li><a href="about.asp" id="hide"><br>Contáctanos</a></li>
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

        </div>
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
        <script>
            window.onscroll = function() {myFunction()};
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;
            var xl=window.matchMedia('(min-width: 1200px)');
            var l=window.matchMedia('(min-width: 992px)');
            var m=window.matchMedia('(min-width: 768px)');
            var s=window.matchMedia('(min-width: 600px)');
            var xs=window.matchMedia('(max-width: 600px)');
            
            function myFunction() {
              var dos=document.getElementById("mostrar");
              dos.style.display="none";
              if (window.pageYOffset > sticky) {
                navbar.classList.add("sticky");
                if(xl.matches)
                {
                  document.getElementById("head").style.height='120px';
                  document.getElementById("head").style.width='462px'; 
                }
                if(l.matches)
                {
                  document.getElementById("head").style.height='100px';
                document.getElementById("head").style.width='385px';
                }
                if(m.matches)
                {
                  document.getElementById("head").style.height='80px';
                document.getElementById("head").style.width='308px';
                }
                if(s.matches)
                {
                  document.getElementById("head").style.height='60px';
                document.getElementById("head").style.width='231px';
                }
                if(xs.matches)
                {
                  document.getElementById("head").style.height='40px';
                document.getElementById("head").style.width='231px';
                }  
              } else {
                navbar.classList.remove("sticky");
                if(xl.matches)
                {
                  document.getElementById("head").style.height='180px';
                  document.getElementById("head").style.width='752px'; 
                }
                if(l.matches)
                {
                  document.getElementById("head").style.height='160px';
                document.getElementById("head").style.width='616px';
                }
                if(m.matches)
                {
                  document.getElementById("head").style.height='140px';
                document.getElementById("head").style.width='539px';
                }
                if(s.matches)
                {
                  document.getElementById("head").style.height='120px';
                document.getElementById("head").style.width='462px';
                }
                if(xs.matches)
                {
                  document.getElementById("head").style.height='100px';
                document.getElementById("head").style.width='385px';
                }  
              }
            }
            </script>
    </body>
</html>