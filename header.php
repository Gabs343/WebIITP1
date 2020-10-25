<?php

$f_productoR = fopen("productos.json", "r");
$json_producto = fread($f_productoR, filesize("productos.json"));
fclose($f_productoR);
$multi_productos = json_decode($json_producto, true);

$f_carritoR = fopen("carrito.json", "r");
$json_carrito = fread($f_carritoR, filesize("carrito.json"));
fclose($f_carritoR);
$carrito = json_decode($json_carrito, true);

$items_navlist = array(1 => array("archivo" => "index.php",
								"nombre" => "Inicio"),
						2 => array("archivo" => "list-view.php?page",
									"nombre" => "Lista de productos"),
						3 => array("archivo" => "grid-view.php",
									"nombre" => "Productos en cuadrículas"),
						4 => array("archivo" => "newProducts.php",
									"nombre" => "Nuevos productos"),
						5 => array("archivo" => "contact.php",
									"nombre" => "Contacto"));

function navlist($a_nav){
	echo "<ul class='nav'>";
	foreach($a_nav as $clave => $valor){
		echo "<li><a href=".$valor["archivo"].">".$valor["nombre"]."</a></li>";	
	}
	echo "</ul>";
}

function productosNuevos($num, $ruta, $a_nombre, $a_precio){
	echo <<< tt
	
	<li class='span4'>
	<div class='thumbnail'>
	<a href='product_details.php?product=$num' class='overlay'></a>
	<a class='zoomTool' href='product_details.php?product=$num' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
	<a href='product_details.php?product=$num'><img src='$ruta' alt=''></a>
	<a href='#' class='tag'></a>
	<div class='caption cntr'>
	<p>$a_nombre</p>
	<p><strong>$a_precio</strong></p>
	<h4><a class='shopBtn' href='#' title='add to cart'> Add to cart </a></h4>
	<div class='actionList'>
	<a class='pull-left' href='#'>Add to Wish List </a> 
	<a class='pull-left' href='#'> Add to Compare </a>
	</div> 
	<br class='clr'>
	</div>
	</div>
	</li>
	tt;

}

function productos($num, $ruta, $a_nombre, $a_precio){
	echo <<< tt
	
	<li class='span4'>
	<div class='thumbnail'>
	<a href='product_details.php?product=$num' class='overlay'></a>
	<a class='zoomTool' href='product_details.php?product=$num' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
	<a href='product_details.php?product=$num'><img src='$ruta' alt=''></a>
	<div class='caption cntr'>
	<p>$a_nombre</p>
	<p><strong>$a_precio</strong></p>
	<h4><a class='shopBtn' href='#' title='add to cart'> Add to cart </a></h4>
	<div class='actionList'>
	<a class='pull-left' href='#'>Add to Wish List </a> 
	<a class='pull-left' href='#'> Add to Compare </a>
	</div> 
	<br class='clr'>
	</div>
	</div>
	</li>
	tt;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo "DGamer/"; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
	
	<link href="estilos.css" rel="stylesheet"/>	
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
			<div class="pull-left socialNw">
      			<p><strong>Todo lo que un gamer necesita, lo encontras aquí.</strong></p>
				</div>	
				<div class="span4 pull-right alignR">
					<p><strong> Nuestro Whatsapp:  0800 1234 678 </strong></p>
				</div>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4 offset4">
	<h1>
	<a class="logo" href="index.php">
		<img src="assets/img/pagina.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<?php
				navlist($items_navlist); 
			?>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Ingresa <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Contraseña">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Recuerdame
					</label>
					<button type="submit" class="shopBtn btn-block">Ingresar</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	</div>
</div>