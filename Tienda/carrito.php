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
			  <p>Eliminar producto: <input type="number" class="ipt-procom" name="delete_produc"></p>
			  <p>
				<input type="submit" style="margin-top: 5px;" value="Enviar">
				<input type="reset" style="margin-top: 5px;" value="Borrar">
			  </p>
			</form>

			<h5>TOTAL:</h5>
			<div class="total-pedidos" id="total">
			</div>
			<h5>GASTO POR ENVIO:</h5>
			<p>Si eres de Aguascalientes no hay gasto de envio.</p>
			<p>Si eres de otro estado diferente se cobra $100 mex.</p>
			<div class="gastos" id="gasto-envio">
			</div>
			<h5>IMPUESTOS:</h5>
			<p>Se cobra un 10% del total de impuestos.</p>


			<h3>METODOS DE PAGO:</h3>
			<div>
				<h5>POR TARJETA</h5>
				<img src="assets/products/santander.jpg" width="220px" height="115px">
				<br>
				<label for="tarjeta">Numero de Tarjeta</label><br>
				<input type="number" id="tarjeta" name="tarjeta">
				<br><br>
				<label for="fecha">Mes:</label><br>
				<input type="month" id="fecha" name="fecha">
				<br><br>
				<label for="anio">Año:</label><Br>
				<input type="number" min="2020" max="2030" id="anio" name="anio">
				<br>
				<br>
				<label for="pin">Numero de CCV:</label><br>
				<input type="passwordd" maxlength="4" id="pin" name="pin">
				<br><br>
				<h2>Pago con Mastercard</h2>
				<img src="assets/products/mastercard.jpg" width="220px" height="147px">
				<br>
				<label for="tarjetaM">Numero de Tarjeta</label><br>
				<input type="number" id="tarjetaM" name="tarjetaM">
				<br><br>
				<label for="fechaM">Mes:</label><br>
				<input type="month" id="fechaM" name="fechaM">
				<br><br>
				<label for="anioM">Año:</label><Br>
				<input type="number" min="2020" max="2030" id="anioM" name="anioM">
				<br><br>
				<label for="pinM">Numero de CCV:</label><br>
				<input type="passwordd" maxlength="4" id="pinM" name="pinM">
			</div>
			<div>
				<h5>POR OXXO</h5>
				<img src="assets/products/oxxo.jpg" width="220px" height="101px">
					<br>
					<button onclick="alerta()" style="background-color: red; color: white; font-size: large;">Generea pago en Oxxo</button> 
					<br>
					<script>
						function alerta()
						{
							alert("Ahorita no esta disponible");    
						}
					</script> 
			</div>
			<div>				
			<h5>POR TRANSFERENCIA</h5>	
			<form action="pedido.php" method="post">
			<input class="ipt-procom" type="text" id="dirusu" name="dirisu" placeholder="Dirección">
			<br>
			<input class="ipt-procom" type="text" id="telusu" placeholder="Celular">
			<br>
			<input type="submit" style="margin-top: 5px;" value="Enviar">
			</form>
			<button onclick="procesar_compra()" style="margin-top: 5px;">Procesar compra</button>
			</div>
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

					let dirre=document.getElementById("dirusu").value;
					let gasto = 0;
					if(dirre == 'Aguascalientes'){
						let gasto = 0;
					}else{
						let gasto = 100;
					}
				
					document.getElementById("space-list").innerHTML=html;
					document.getElementById("total").innerHTML=sumaMonto;
					document.getElementById("gasto-envio").innerHTML=gasto;
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