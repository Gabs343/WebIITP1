<?php
	require_once("header.php");
	$f_productoR = fopen("productos.json", "r");
	$json_producto = fread($f_productoR, filesize("productos.json"));
	fclose($f_productoR);
	$multi_productos = json_decode($json_producto, true);

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
	/*BODY*/
	echo "<div class='row'>";
		require_once("left_menu.php");
		echo "<div class='span9'>";
			echo "<div class='well well-small'>";
				echo "<h3>Our Products </h3>";
				echo "<div class='row-fluid'>";
					echo "<ul class='thumbnails'>";
						productos(1, $multi_productos["1"]["imagen"], $multi_productos["1"]["nombre"], $multi_productos["1"]["precio"]);
						productos(2, $multi_productos["2"]["imagen"], $multi_productos["2"]["nombre"], $multi_productos["2"]["precio"]);
						productos(3, $multi_productos["3"]["imagen"], $multi_productos["3"]["nombre"], $multi_productos["3"]["precio"]);
					echo "</ul>";
				echo "</div>";
				echo "<div class='row-fluid'>";
					echo "<ul class='thumbnails'>";
						productos(4, $multi_productos["4"]["imagen"], $multi_productos["4"]["nombre"], $multi_productos["4"]["precio"]);
						productos(5, $multi_productos["5"]["imagen"], $multi_productos["5"]["nombre"], $multi_productos["5"]["precio"]);
						productos(6, $multi_productos["6"]["imagen"], $multi_productos["6"]["nombre"], $multi_productos["6"]["precio"]);
					echo "</ul>";
				echo "</div>";
				echo "<div class='row-fluid'>";
					echo "<ul class='thumbnails'>";
						productos(7, $multi_productos["7"]["imagen"], $multi_productos["7"]["nombre"], $multi_productos["7"]["precio"]);
						productos(8, $multi_productos["8"]["imagen"], $multi_productos["8"]["nombre"], $multi_productos["8"]["precio"]);
						productos(9, $multi_productos["9"]["imagen"], $multi_productos["9"]["nombre"], $multi_productos["9"]["precio"]);
					echo "</ul>";
				echo "</div>";
				echo "<div class='row-fluid'>";
					echo "<ul class='thumbnails'>";
						productos(10, $multi_productos["10"]["imagen"], $multi_productos["10"]["nombre"], $multi_productos["10"]["precio"]);
					echo "</ul>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	echo "</div>";
	require_once("footer.php")
?>
