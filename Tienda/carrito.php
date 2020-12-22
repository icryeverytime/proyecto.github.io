<?php
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi sistema E-Commerce</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<?php include("layouts/_main-header.php"); ?>
	<div class="main-content">
		<div class="content-page">
			<h3>Mi carrito</h3>
			<div class="body-pedidos" id="space-list">
			</div>
			<form action="servicios/pedido/eliminar_carrito.php" method="post">
			  <p>Eliminar producto: <input type="number" name="delete_produc"></p>
			  <p>
				<input type="submit" value="Enviar">
				<input type="reset" value="Borrar">
			  </p>
			</form>
			<input class="ipt-procom" type="text" id="dirusu" placeholder="Dirección">
			<br>
			<input class="ipt-procom" type="text" id="telusu" placeholder="Celular">
			<br>
			<button onclick="procesar_compra()" style="margin-top: 5px;">Procesar compra</button>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/pedido/get_porprocesar.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					let sumaMonto=0;
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="item-pedido">'+
							'<div class="pedido-img">'+
								'<img class="zoom" src="assets/products/'+data.datos[i].rutimapro+'""width="216px" height="216px">'+
							'</div>'+
							'<div class="pedido-detalle">'+
								'<h3>'+data.datos[i].nompro+'</h3>'+
								'<h5>'+data.datos[i].codped+'</h5>'+
								'<p><b>Precio:</b> S/ '+data.datos[i].prepro+'</p>'+
								'<p><b>Fecha:</b> '+data.datos[i].fecped+'</p>'+
								'<p><b>Estado:</b> '+data.datos[i].estado+'</p>'+
								'<p><b>Dirección:</b> '+data.datos[i].dirusuped+'</p>'+
								'<p><b>Celular:</b> '+data.datos[i].telusuped+'</p>'+
							'</div>'+
						'</div>';
						sumaMonto+=parseInt(data.datos[i].prepro)+1;
					}
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		
		function procesar_compra(){
			let dirusu=document.getElementById("dirusu").value;
			let telusu=$("#telusu").val();
			if (dirusu=="" || telusu=="") {
				alert("Complete los campos");
			}else{
				$.ajax({
					url:'servicios/pedido/confirm.php',
					type:'POST',
					data:{
						dirusu:dirusu,
						telusu:telusu
					    },
					success:function(data){
						console.log(data);
						if (data.state) {
							window.location.href="pedido.php";
						}else{
							alert(data.detail);
						}
					},
					error:function(err){
						console.error(err);
					}
			  });
			}
		}
	</script>
	<?php include("layouts/footer.php"); ?>
</body>
</html>