<?php
	session_start();
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
			<section>
				<div class="part1">
					<img class="zoom" id="idimg" src="assets/products/crepe.jpg">
				</div>
				<div class="part2">
					<h2 id="idtitle">NOMBRE PRINCIPAL</h2>
					<h2 id="idcategoria"> nueva generación</h2>
					<h1 id="idprice">S/. 35.<span>99</span></h1>
					<h3 id="iddescription">Descripcion del producto</h3>
					<h4 id="idcantidad">Todavia hay </h4>
					<button onclick="iniciar_compra()">Comprar</button>
				</div>
			</section>
			<div class="title-section">Productos destacados</div>
			<div class="products-list" id="space-list">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
		var p='<?php echo $_GET["p"]; ?>';
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					let disp='En existencia';
					let nodisp='No disponible';
					
					for (var i = 0; i < data.datos.length; i++) {
						if (data.datos[i].codpro==p) {
							document.getElementById("idimg").src="assets/products/"+data.datos[i].rutimapro;
							document.getElementById("idtitle").innerHTML=data.datos[i].nompro;
							document.getElementById("idcategoria").innerHTML=data.datos[i].catpro;
							document.getElementById("idprice").innerHTML=formato_precio(data.datos[i].prepro);
							document.getElementById("iddescription").innerHTML=data.datos[i].despro;
							if(data.datos[i].cantpro > 0){
								document.getElementById("idcantidad").innerHTML=disp;
							}else{
								document.getElementById("idcantidad").innerHTML=nodisp;
							}
						}
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img class="zoom" src="assets/products/'+data.datos[i].rutimapro+'"width="216px" height="216px">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-categoria">'+data.datos[i].catpro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function formato_precio(valor){
			//10.99
			let svalor=valor.toString();
			let array=svalor.split(".");
			return "$ "+array[0]+".<span>"+array[1]+"</span>" + " mex";
		}
		function iniciar_compra(){
			$.ajax({
				url:'servicios/compra/validar_inicio_compra.php',
				type:'POST',
				data:{
					codpro:p
				},
				success:function(data){
					console.log(data);
					if (data.state) {
						//desc_compra();
						alert(data.detail);
						decreCant();
						desc_compra();
					}else{
						alert(data.detail);
						if (data.open_login) {
							open_login();
						}
					}
				},
				error:function(err){
					console.error(err);
				}
			});
		}
		function open_login(){
			//window.location.href="login.php";
		}
		function decreCant(){
			$.ajax({
				url:'servicios/compra/decrementar.php',
				type:'POST',
				data:{
					codpro:p
				},
				success:function(data){
					console.log(data);
					if (data.state) {
						alert(data.detail);
					}
				},
				error:function(err){
					console.error(err);
				}
			});
		}
		function desc_compra(){
			$.ajax({
				url:'servicios/compra/descuento.php',
				type:'POST',
				data:{
					codpro:p
				},
				success:function(data){
					console.log(data);
					if (data.state) {
						alert(data.detail);
					}
				},
				error:function(err){
					console.error(err);
				}
			});
		}
	
	</script>
	<?php include("layouts/footer.php"); ?>
</body>
</html>