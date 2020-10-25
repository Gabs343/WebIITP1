<?php
	require_once("header.php");

	echo "<ul class='thumbnails'>";
		productos(1, $multi_productos[1]["imagen"], $multi_productos[1]["nombre"], $multi_productos[1]["precio"]);
		productos(2, $multi_productos[2]["imagen"], $multi_productos[2]["nombre"], $multi_productos[2]["precio"]);
		productos(3, $multi_productos[3]["imagen"], $multi_productos[3]["nombre"], $multi_productos[3]["precio"]);
		productos(4, $multi_productos[4]["imagen"], $multi_productos[4]["nombre"], $multi_productos[4]["precio"]);
	echo "</ul>";
	echo "<ul class='thumbnails'>";
		productos(5, $multi_productos[5]["imagen"], $multi_productos[5]["nombre"], $multi_productos[5]["precio"]);
		productos(6, $multi_productos[6]["imagen"], $multi_productos[6]["nombre"], $multi_productos[6]["precio"]);
		productos(7, $multi_productos[7]["imagen"], $multi_productos[7]["nombre"], $multi_productos[7]["precio"]);
		productos(8, $multi_productos[8]["imagen"], $multi_productos[8]["nombre"], $multi_productos[8]["precio"]);
	echo "</ul>";
	echo "<ul class='thumbnails'>";
		productos(9, $multi_productos[9]["imagen"], $multi_productos[9]["nombre"], $multi_productos[9]["precio"]);
		productos(10, $multi_productos[10]["imagen"], $multi_productos[10]["nombre"], $multi_productos[10]["precio"]);
	echo "</ul>";
	require_once("footer.php");
?>