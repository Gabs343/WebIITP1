<?php
	include_once('header.php');

	function productosDescripcion($a_productos, $numeroProducto, $carrito){ ?>
	
		<div class='row-fluid'>
			<div class="span2">
				<img src=' <?php echo $a_productos[$numeroProducto]['imagen']; ?>' alt=''>
			</div>
			<div class='span6'>
				<h5><?php echo $a_productos[$numeroProducto]['nombre']; ?></h5>
				<p><?php echo cortar($a_productos[$numeroProducto]['descripción'], 90); ?></p>
			</div>
			<div class='span4 alignR'>
				<form action='list-view.php?page' method='POST' class='form-horizontal qtyFrm'>
					<h3>ARS $<?php echo $a_productos[$numeroProducto]['precio']; ?></h3>
		 
					<div class='btn-group'>
					<button type='submit' name='item' value='<?php echo $numeroProducto; ?>' class='defaultBtn'><span class='icon-shopping-cart'></span> Add to cart</button>
    				<?php if (isset($_POST["item"])) {
        				$carrito["id_producto"][] = $_POST["item"];
        				file_put_contents("carrito.json", json_encode($carrito));
    				}
   	 				?>
					<a href='product_details.php?product=<?php echo $numeroProducto?>' class='shopBtn'>VIEW</a>
					</div>
				</form>
			</div>
		</div>
	<?php
	}

	echo "<div class='row'>";
		include_once('left_menu.php');
		echo "<div class='span9'>";
			echo "<div class='well well-small'>";
				foreach($multi_productos as $clave){
					static $contador = 1;
					if(($clave["id_categoria"] == $_GET["categoria"] && $clave["id_marca"] == $_GET["marca"]) || ($clave["id_categoria"] == $_GET["categoria"] && $_GET["marca"] == 0) || ($clave["id_marca"] == $_GET["marca"] && $_GET["categoria"] == 0)){ 
						productosDescripcion($multi_productos, $contador, $carrito);
					}
					$contador ++;
				}		
			echo "</div>";
		echo "</div>";
	echo "</div>";
	include_once('footer.php');
?>