<?php
	require_once("header.php");

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
								productos($multi_productos, $i, $items_navlist, $carrito);
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
