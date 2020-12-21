<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link rel="stylesheet" href="estilos/estilos.css"/>

    <link rel="stylesheet" href="estilos/faq.css">

</head>
<body>
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
                        <li><a href="contact.php" id="hide"><br>Contáctanos</a></li>
                        <li><a href="about.asp" id="hide"><br>Ayuda</a></li>
                        <li><a href="admin.php" id="hide" class="active">Admin</a></li>
                        <li style="float: right;"> <button href="login.html" id="log">Login</li>
                        <li onclick="tres()">
                        <img src="img/menu.png" width="40px" height="40px" id="show">
                        </li>
                        <li style="float: right;"><a href="login.html" style="height: 50.8px;"><img src="img/cart.png" width="31px" height="40px"></a></li>
                    </ul>
                </nav> 
                <div id="mostrar">
                <a href=# id="muestra" onclick="dos()">X</a>
                <a href="index.html" id="muestra" style="background-color:  #0466C8;">Inicio</a>
                <a href="aas.asp" id="muestra">Tienda</a>
                <a href="acercade.html" id="muestra">Acerca de</a>
                <a href="contact.php" id="muestra">Contáctanos</a>
                <a href="admin.php" id="muestra" class="active">Admin</a>
                <a href="about.asp" id="muestra">Ayuda</a>
                </div>
        </div>
    <div id="content">

    <div id="faq" class="faq-body" style="text-align:center;">
    <div class="faq-header">
      <h3 class="faq-title">Bienvendio Admin elige la opcion que quiere realizar</h3>
      <div class="seperator"></div>
      <div class="faq-list">
        <div>
          <details>
            <summary title="Agregar productos">Agregar productos</summary>
            <p class="faq-content">
                <form>
                    <label for="nombre">Nombre de producto:</label>
                    <br>
                    <input type="text" id="nombre" name="nombre">
                    <br>
                    <br>
                    <label for="descripcion">Descripcion del producto:</label>
                    <br>
                    <textarea id="descripcion" name="descripcion" rows="4" columns="50"></textarea>
                    <br><br>
                    <label for="precio">Precio del producto:</label>
                    <br>
                    <input type="number" id="precio" name="precio" min="1">
                    <br>
                    <br>
                    <label for="Estado">Estado del producto</label>
                    <br>
                    <input type="number" id="Estado" name="Estado" min="1" max="2">
                    <br><br>
                    <input type="submit" value="Agregar producto">
                </form>
            </p>
          </details>
        </div>
        <div>
          <details>
            <summary title="Actualizar productos">Actualizar productos</summary>
            <p class="faq-content">
              <form>
                <label for="nombreActu">Nombre de producto a actualizar:</label>
          
                <input type="text" id="nombreActu" name="nombreActu">
                <br><br>
                <input type="submit" value="Actualizar producto">
            </form>
            </p>
          </details>
        </div>
        <div>
          <details>
            <summary title="Borrar productos">Borrar productos</summary>
            <p class="faq-content">
            <form>
                <label for="nombreEli">Nombre de producto a eliminar:</label>
          
                <input type="text" id="nombreEli" name="nombreEli">
                <br><br>
                <input type="submit" value="Eliminar producto">
            </form>
            </p>
          </details>
        </div>
        <div>
          <details>
            <summary title="Grafica">Grafica</summary>
            <p class="faq-content">
              <input type="submit" value="Grafica">
            </p>
          </details>
        </div>
      </div>
    </div>
  </div>
    <br><br><br><br><br><br><br>

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
</body>
</html>