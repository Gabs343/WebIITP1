<?php
	include_once('header.php');
	$f_productoR = fopen("productos.json", "r");
	$json_producto = fread($f_productoR, filesize("productos.json"));
	fclose($f_productoR);
	$multi_productos = json_decode($json_producto, true);
?>
<!-- 
Body Section 
-->
	<div class="row">
<?php
	include_once('left_menu.php');
?>
<div class="span9">
<div class="well well-small">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/auricular1.png" alt="">
		</div>
		<div class="span6">
			<h5><?php echo $multi_productos["1"]["nombre"];?></h5>
			<p><?php echo $multi_productos["1"]["descripción"];?></p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3><?php echo $multi_productos["1"]["precio"];?></h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php?product=1" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php?product=1" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/laptop1.png" alt="">
		</div>
		<div class="span6">
			<h5><?php echo $multi_productos["2"]["precio"];?></h5>
			<p><?php echo $multi_productos["2"]["descripción"];?></p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3><?php echo $multi_productos["2"]["precio"];?></h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php?product=2" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php?product=2" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/teclado1.jpg" alt="">
		</div>
		<div class="span6">
			<h5><?php echo $multi_productos["3"]["nombre"];?></h5>
			<p><?php echo $multi_productos["3"]["descripción"]; ?></p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3><?php echo $multi_productos["3"]["precio"];?></h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php?product=3" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php?product=3" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/mouse1.jpg" alt="">
		</div>
		<div class="span6">
			<h5><?php echo $multi_productos["4"]["nombre"];?></h5>
			<p><?php echo $multi_productos["4"]["descripción"];?></p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3><?php echo $multi_productos["4"]["precio"];?></h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php?product=4" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php?product=4" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/silla1.jpg" alt="">
		</div>
		<div class="span6">
			<h5><?php echo $multi_productos["5"]["nombre"];?></h5>
			<p><?php echo $multi_productos["5"]["descripción"];?>
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3><?php echo $multi_productos["5"]["precio"];?></h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php?product=5" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php?product=5" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/f.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/g.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/h.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/i.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/a.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/b.jpg" alt="">
		</div>
		<div class="span6">
			<h5>Product Name </h5>
			<p>
			Nowadays the lingerie industry is one of the most successful business spheres.
			We always stay in touch with the latest fashion tendencies - 
			that is why our goods are so popular..
			</p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> $140.00</h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="product_details.php" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>
</div>
</div>
</div>

<?php
include_once('footer.php');
?>