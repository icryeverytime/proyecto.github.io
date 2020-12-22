<?php
	session_start();
	$_SESSION['num']=rand(1,2);
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
			<div class="title-section">Productos destacados</div>
			<div class="products-list" id="space-list">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					let band=0;
					let num1='<?php echo $_SESSION['num'];?>';
					console.log(num1);	
                    html+='<h1 style="text-align: center;">Nueva generacion</h1><div style="text-align: center;">';
					for (var i = 0; i < data.datos.length; i++) {
						var obj=data.datos[i]
                        if(band==0 && data.datos[i].catpro=='Antigua Generación')
                            {
                                html+='</div><h1 style="text-align: center;">Antigua generacion</h1><div style="text-align: center;">';
                                band=1; 
							}
						if(num1==i)
						{
							html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img class="zoom" src="assets/products/'+data.datos[i].rutimapro+'" width="216px" height="216px">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-categoria">'+data.datos[i].catpro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+desc_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
						<?php

						?>
						}
						else{
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img class="zoom" src="assets/products/'+data.datos[i].rutimapro+'" width="216px" height="216px">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-categoria">'+data.datos[i].catpro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
						}	
					}
                    html+='</div>';
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
			let float1=parseFloat(svalor);
			console.log(svalor);
			console.log(float1-100);
			let array=svalor.split(".");
			return "$"+array[0]+".<span>"+array[1]+"</span>" +" mex";
		}
		function desc_precio(valor){
			let svalor=valor.toString();
			let float1=parseFloat(svalor);
			float1=float1-100;
			console.log(svalor);
			console.log(float1-100);
			let array=svalor.split(".");
			return '<div style="text-decoration-line: line-through;">'+"$"+array[0]+".<span>"+array[1]+"</span> </div>&nbsp;"+"$"+float1+"mex";
		}
	</script>
	<?php include("layouts/footer.php"); ?>
</body>
</html>