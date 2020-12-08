<?php
	require_once("header.php");

	echo "<h3>Productos destacados.</h3>";
	echo "<ul id='galeria' class='thumbnails'>";
		for($i = 1; $i <= count($multi_productos); $i++){
            if ($multi_productos[$i]["destacado"]) {
				productos($multi_productos, $i, $items_navlist, $carrito);
            }
		}	
	echo "</ul>";
	require_once("footer.php");
?>
