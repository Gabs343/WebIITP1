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
				productos(1, $multi_productos["1"]["imagen"], $multi_productos["1"]["nombre"], $multi_productos["1"]["descripción"], $multi_productos["1"]["precio"]);
				echo "<hr class='soften'>";
				productos(2, $multi_productos["2"]["imagen"], $multi_productos["2"]["nombre"], $multi_productos["2"]["descripción"], $multi_productos["2"]["precio"]);
				echo "<hr class='soften'>";
				productos(3, $multi_productos["3"]["imagen"], $multi_productos["3"]["nombre"], $multi_productos["3"]["descripción"], $multi_productos["3"]["precio"]);
				echo "<hr class='soften'>";
				productos(4, $multi_productos["4"]["imagen"], $multi_productos["4"]["nombre"], $multi_productos["4"]["descripción"], $multi_productos["4"]["precio"]);
				echo "<hr class='soften'>";
				productos(5, $multi_productos["5"]["imagen"], $multi_productos["5"]["nombre"], $multi_productos["5"]["descripción"], $multi_productos["5"]["precio"]);
				echo "<hr class='soften'>";
				productos(6, $multi_productos["6"]["imagen"], $multi_productos["6"]["nombre"], $multi_productos["6"]["descripción"], $multi_productos["6"]["precio"]);
				echo "<hr class='soften'>";
				productos(5, $multi_productos["7"]["imagen"], $multi_productos["7"]["nombre"], $multi_productos["7"]["descripción"], $multi_productos["7"]["precio"]);
				echo "<hr class='soften'>";
			echo "</div>";
		echo "</div>";
	echo "</div>";
	include_once('footer.php');
?>
