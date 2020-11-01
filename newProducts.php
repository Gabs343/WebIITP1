<?php
	require_once("header.php");

	echo "<h3>New Products</h3>";
	echo "<ul id='galeria' class='thumbnails'>";
		for($i = 1; $i <= count($multi_productos); $i++){
            if ($multi_productos[$i]["nuevo"]) {
				productos($multi_productos, $i);
            }
		}	
	echo "</ul>";
	require_once("footer.php");
?>
