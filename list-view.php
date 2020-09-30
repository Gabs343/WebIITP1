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
				switch($_GET["page"]){
					case 1:
						$producto = 1;
					break;
					case 2:
						$producto = 10;
					break;
					case 3: 
						$producto = 19;
					break;
					default:
						$producto = 1;
					break;
				}
				for($i = 1; $i <= 9; $i++){
					productos($producto, $multi_productos[$producto]["imagen"], $multi_productos[$producto]["nombre"], $multi_productos[$producto]["descripción"], $multi_productos[$producto]["precio"]);
					echo "<hr class='soften'>";
					if($producto == count($multi_productos)){
					break;
					}else{
						$producto++;
					}
		
				}	
			echo "</div>";
		echo "</div>";
	echo "</div>";
?>
<div id="paginas" class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		 
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="#">Prev</a></li>
			  <li><a href="list-view.php?page=1">1</a></li>
			  <li><a href="list-view.php?page=2">2</a></li>
			  <li><a href="list-view.php?page=3">3</a></li>
			  <li><a href="#">Next</a></li>
			</ul>	
		  </div>
		</div>
	</div>
</div>
<?php
	require_once("footer.php");
?>
