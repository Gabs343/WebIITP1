<?php
	include_once('header.php');

	function productosDescripcion($num, $imagen, $nombre, $descripcion, $precio){
		echo <<< tt
		<div class='row-fluid'>
			<div class="span2">
				<img src=$imagen alt''>
			</div>
			<div class='span6'>
				<h5>$nombre</h5>
				<p>$descripcion</p>
			</div>
			<div class='span4 alignR'>
				<form class='form-horizontal qtyFrm'>
					<h3>$precio</h3>
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
					if(($clave["id_categoria"] == $_GET["categoria"] && $clave["id_marca"] == $_GET["marca"]) || ($clave["id_categoria"] == $_GET["categoria"] && $_GET["marca"] == 0) || ($clave["id_marca"] == $_GET["marca"] && $_GET["categoria"] == 0)){ 
						productosDescripcion($contProducto, $multi_productos[$contProducto]["imagen"],$multi_productos[$contProducto]["nombre"], $multi_productos[$contProducto]["descripción"], $multi_productos[$contProducto]["precio"]);
					}
					$contProducto ++;
				}		
			echo "</div>";
		echo "</div>";
	echo "</div>";
	include_once('footer.php');
?>