<?php
	require_once("header.php");
	$f_productoR = fopen("productos.json", "r");
	$json_producto = fread($f_productoR, filesize("productos.json"));
	fclose($f_productoR);
	$multi_productos = json_decode($json_producto, true);
?>
<!-- 
Body Section 
-->
<!-- 
Three column view
-->
	<h3>Three Column Product view </h3>
		<ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php?product=1" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php?product=1"><img src="assets/img/auricular1.png" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $multi_productos["1"]["nombre"];?></p>
					<p><strong><?php echo $multi_productos["1"]["precio"];?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php?product=2" class="overlay"></a>
				<a class="zoomTool" href="product_details.php?product=2" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php?product=2"><img src="assets/img/laptop1.png" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $multi_productos["2"]["nombre"];?></p>
					<p><strong><?php echo $multi_productos["2"]["precio"];?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php?product=3" class="overlay"></a>
				<a class="zoomTool" href="product_details.php?product=3" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php?product=3"><img src="assets/img/teclado1.jpg" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $multi_productos["3"]["nombre"];?></p>
					<p><strong><?php echo $multi_productos["3"]["precio"];?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>

		<ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php?product=4" class="overlay"></a>
				<a class="zoomTool" href="product_details.php?product=4" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php=product=4"><img src="assets/img/mouse1.jpg" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $multi_productos["4"]["nombre"];?></p>
					<p><strong><?php echo $multi_productos["4"]["precio"];?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php?product=5" class="overlay"></a>
				<a class="zoomTool" href="product_details.php?product=5" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php?product=5"><img src="assets/img/silla1.jpg" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $multi_productos["5"]["nombre"];?></p>
					<p><strong><?php echo $multi_productos["5"]["precio"];?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="assets/img/f.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>


		<ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="assets/img/g.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="assets/img/h.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="assets/img/i.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>


		<ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="assets/img/a.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="assets/img/b.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="assets/img/c.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
<?php
	require_once("footer.php")
?>