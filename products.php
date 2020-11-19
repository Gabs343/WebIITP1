<?php
	include_once('header.php');

	

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