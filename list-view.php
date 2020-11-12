<?php
	require_once('header.php');
	require_once('funcs.php');

	function productosDescripcion($a_productos, $numeroProducto, $carrito, $a_nav){ ?>
	
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
	?>
	<div class='row'>
		<?php include_once('left_menu.php');?>
		<div class='span9'>
			<div class='well well-small'>
				<?php
				switch($_GET["page"]){
					case 1:
						$producto = 1;
					break;
					case 2:
						$producto = 12;
					break;
					default:
						$producto = 1;
					break;
				}
				for($i = 1; $i <= 11; $i++){
					productosDescripcion($multi_productos, $producto, $carrito, $items_navlist);
					echo "<hr class='soften'>";
					if($producto == count($multi_productos)){
					break;
					}else{
						$producto++;
					}
				}
				?>	
			</div>
		</div>
	</div>
<div id="paginas" class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		 
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="list-view.php?page=<?php echo $_GET["page"] > 1 ? $_GET["page"] - 1 : "1";?>">Prev</a></li>
			  <li><a href="list-view.php?page=1">1</a></li>
			  <li><a href="list-view.php?page=2">2</a></li>
			  <li><a href="list-view.php?page=<?php echo $_GET["page"] < 2 ? $_GET["page"] + 1 : "2";?>">Next</a></li>
			</ul>	
		  </div>
		</div>
	</div>
</div>
<?php
	require_once("footer.php");
?>
