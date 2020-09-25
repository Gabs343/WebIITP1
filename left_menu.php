<?php
	$marca = array(1 => "Redradon",
					2 => "Aureox",
					3 => "Sentey",
					4 => "Lenovo",
					5 => "Asus",
					6 => "Cougar",
					7 => "Nvidia");


	$categoria = array(1 => "Auricular",
						2 => "Teclado",
						3 => "Mouse",
						4 => "Silla",
						5 => "Laptop",
						6 => "Placa de Video",
						7 => "Gamepad");

?>

<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<?php
			for($i = 1; $i <= count($categoria); $i++){
				echo "<li><a href='products.php?categoria=$i'><span class='icon-chevron-right'></span>$categoria[$i]</a>";
				echo "<ul class= 'nav nav-list'>";
					for($j = 1; $j <= count($marca); $j++){
						echo "<li><a href='products.php?categoria=$i&marca=$j'><span class='icon-chevron-right'></span>$marca[$j]</a></li>";
				}
				echo "</ul>";
                echo "</li>";
			}
		?>

		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="cart.php"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>