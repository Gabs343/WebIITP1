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
					echo "<ul id='galeria'class='thumbnails'>";
						for($i = 1; $i <= count($multi_productos); $i++){
							if($i < 16){
								productos($i, $multi_productos[$i]["imagen"], $multi_productos[$i]["nombre"], $multi_productos[$i]["precio"]);
							}else{
								break;
							}
						}
						
					echo "</ul>";
				echo "</div>";
				
			echo "</div>";
		echo "</div>";
	echo "</div>";
	require_once("footer.php")
?>
