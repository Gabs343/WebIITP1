<?php
	include_once('header.php');
	$f_productoR = fopen("productos.json", "r");
	$json_producto = fread($f_productoR, filesize("productos.json"));
	fclose($f_productoR);
	$multi_productos = json_decode($json_producto, true);



	function productos($num, $ruta, $a_nombre, $a_descripcion, $a_precio){
		echo <<< tt
		<div class='row-fluid'>
			<div class="span2">
				<img src=$ruta alt''>
			</div>
			<div class='span6'>
				<h5>$a_nombre</h5>
				<p>$a_descripcion</p>
			</div>
			<div class='span4 alignR'>
				<form class='form-horizontal qtyFrm'>
					<h3>$a_precio</h3>
					<label class='checkbox'>
						<input type='checkbox'>Adds product to compair
					</label><br>
					<div class='btn-group'>
						<a href='product_details.php?product=$num' class='defaultBtn'><span class='icon-shopping-cart'></span>Add to cart</a>
						<a href='product_details.php?product=$num' class='shopBtn'>VIEW</a>
					</div>
				</form>
			</div>
		</div>
		tt;
	}

	echo "<div class='row'>";
		include_once('left_menu.php');
		echo "<div class='span9'>";
			echo "<div class='well well-small'>";
				foreach($multi_productos as $clave){
					static $contProducto = 1;
					if($clave["id_categoria"] == $_GET["categoria"] && $clave["id_marca"] == $_GET["marca"]){ 
						productos($contProducto, $multi_productos[$contProducto]["imagen"],$multi_productos[$contProducto]["nombre"], $multi_productos[$contProducto]["descripción"], $multi_productos[$contProducto]["precio"]);
					}else if($clave["id_categoria"] == $_GET["categoria"] && $_GET["marca"] == 0){
						productos($contProducto, $multi_productos[$contProducto]["imagen"],$multi_productos[$contProducto]["nombre"], $multi_productos[$contProducto]["descripción"], $multi_productos[$contProducto]["precio"]);
					}
					$contProducto ++;
				}				
			echo "</div>";
		echo "</div>";
	echo "</div>";
	include_once('footer.php');
?>