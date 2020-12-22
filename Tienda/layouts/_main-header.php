<head>
	<style>
		/* -LOGIN- */

		/* Full-width input fields */
		logi input[type=text],
		logi input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		/* Set a style for all buttons */
		logi button {
			background-color: #0466C8;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		logi button:hover {
			opacity: 0.8;
		}

		/* Extra styles for the cancel button */
		logi .cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the image and position the close button */
		logi .imgcontainer {
			text-align: center;
			margin: 1px 0 12px 0;/* 24 0 12 */
			position: relative;
		}

		logi img.avatar {
			width: 20%;
			border-radius: 50%;
		}

		logi .container {
			padding: 16px;
		}

		logi span.psw {
			float: right;
			padding-top: 16px;
		}

		/* The Modal (background) */
		logi .modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
			padding-top: 60px;
		}

		/* Modal Content/Box */
		logi .modal-content {
			background-color: #fefefe;
			margin: 1% auto 15% auto;
			/* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 30%;
			/* Could be more or less, depending on screen size */
		}

		/* The Close Button (x) */
		logi .close {
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		logi .close:hover,
		logi .close:focus {
			color: red;
			cursor: pointer;
		}

		/* Add Zoom Animation */
		logi .animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {
				-webkit-transform: scale(0)
			}

			to {
				-webkit-transform: scale(1)
			}
		}

		@keyframes animatezoom {
			from {
				transform: scale(0)
			}

			to {
				transform: scale(1)
			}
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			logi span.psw {
				display: block;
				float: none;
			}

			logi .cancelbtn {
				width: 100%;
			}
		}

		/* -FIN LOGIN- */

		.nompadre {
			display: flex;
			align-items: center;
		}

		.nomhijo {
			color: white;
			font-size: 18px;
			padding: 10px;

		}
	</style>

</head>
<header>
	<div class="logo-place"><a href="../index.php"><img src="assets/logo.png"></a></div>
	<div class="search-place">
		<input type="text" id="idbusqueda" placeholder="Encuenta lo que necesitas..."
			value="<?php if(isset($_GET['text'])){echo $_GET['text'];}else{echo '';} ?>">
		<button class="btn-main btn-search" onclick="search_producto()"><i class="fa fa-search"
				aria-hidden="true"></i></button>
	</div>
	<div class="options-place">
		<?php
		if (isset($_SESSION['codusu'])) {
			echo
			'<div class="item-option"><i class="fa fa-user-circle-o" aria-hidden="true"></i><p>'.$_SESSION['nomusu'].'</p></div>';
		}else{
		?>
		<div class="nompadre">
			<div class="nomhijo">
				<?php 
					if(!empty($_SESSION["usuario"])) {
					echo $_SESSION["usuario"] ; 
					}
					?>
			</div>
		</div>

		<?php if(empty($_SESSION["usuario"])): ?>

		<div class="item-option" title="Registrate">
			<a href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-user-circle-o"
					aria-hidden="true"></i></a>
		</div>

		<?php else: ?>

		<div class="item-option" title="Salir">
			<a href="logout2.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
		</div>

		<?php endif; ?>


		<?php
		}
		?>
		<div class="item-option" title="Mis compras">
			<a href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
			</a>
		</div>
		<p color="white" ><?php echo "<p class='item-actCarr'>". $_SESSION['cant_carr'] ."</p>";?></p>
	</div>
</header>

<logi>

	<div id="id01" class="modal">

		<form class="modal-content animate" action="login2.php" method="post">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close"
					title="Close Modal">&times;</span>
				<img src="../img/logologin.png" alt="Avatar" class="avatar">
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

			<div class="container" style="background-color:#888">
				<button type="button" onclick="document.getElementById('id01').style.display='none'"
					class="cancelbtn">Cancelar</button>
				<span class="psw">No tienes cuenta? <a href="../registro.html" style="color="
						blue";">Suscribete</a></span>
			<br>
			Olvidaste tu contraseña? <a href="../registro.html"> Haz click aqui para recuperarla</a>
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