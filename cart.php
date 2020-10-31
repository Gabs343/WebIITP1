<?php
require_once("header.php");

?>
<!-- 
Body Section 
-->
<div class="row">
	<div class="span12">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a> <span class="divider">/</span></li>
			<li class="active">Check Out</li>
		</ul>
		<div class="well well-small">
			<h1>Check Out <small class="pull-right"><?php echo count($carrito["id_producto"]); ?> Items are in the cart </small></h1>
			<hr class="soften" />

			<table class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th>Product</th>
						<th>Nombre</th>
						<th>Remove</th>
						<th>Total</th>

					</tr>
				</thead>

				<?php
				if(isset($_GET["deleteItem"])){
					foreach($carrito as $clave => $valor){
						foreach($valor as $subclave => $subvalor){
							if($subvalor == $_GET["deleteItem"]){
								unset($carrito["id_producto"][$subclave]);
								file_put_contents("carrito.json", json_encode($carrito));
							}
						}

					}
				}
				$total = 0;
				echo "<tbody>";
				foreach ($carrito as $claveC => $valor) {
					foreach ($valor as $subclave => $subvalor) {
						foreach ($multi_productos as $claveP) {
							if ($claveP["id_producto"] == $subvalor) {
								$item = $claveP["id_producto"]; ?>
								<tr id="producto-<?php echo $item ?>">
									<td><img width='100' src=<?php echo $claveP["imagen"]; ?> alt=''></td>
									<td><?php echo $claveP["nombre"]; ?></td>
									<td>
										<div class='input-append'>
											<form action="cart.php" method="$_POST">
												<button class='btn btn-mini btn-danger' name="deleteItem" value="<?php echo $item?>" type='submit' onclick="deleteItem('<?php echo $item; ?>')"><span class='icon-remove'></span></button>
											</form>
										</div>
									</td>
									<td> ARS $<?php echo $claveP["precio"]; ?></td>
								</tr>
								<?php $total += $claveP["precio"];
							}
						}
					}
				}
				?>

				<script>
					function deleteItem(item) {
						//document.getElementById(item).style.color = "red";
					
					}
				</script>


				<tr>
					<td colspan='6' class='alignR'>Total products:</td>
					<td class='label label-primary'>ARS $<?php echo $total; ?></td>
				</tr>
				</tbody>

			</table><br />

			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>
							<form class="form-inline">
								<label style="min-width:159px"> VOUCHERS Code: </label>
								<input type="text" class="input-medium" placeholder="CODE">
								<button type="submit" class="shopBtn"> ADD</button>
							</form>
						</td>
					</tr>

				</tbody>
			</table>
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>ESTIMATE YOUR SHIPPING & TAXES</td>
					</tr>
					<tr>
						<td>
							<form class="form-horizontal">
								<div class="control-group">
									<label class="span2 control-label" for="inputEmail">Country</label>
									<div class="controls">
										<input type="text" placeholder="Country">
									</div>
								</div>
								<div class="control-group">
									<label class="span2 control-label" for="inputPassword">Post Code/ Zipcode</label>
									<div class="controls">
										<input type="password" placeholder="Password">
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button type="submit" class="shopBtn">Click to check the price</button>
									</div>
								</div>
							</form>
						</td>
					</tr>
				</tbody>
			</table>
			<a href="list-view.php?page" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
			<a href="login.php" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

		</div>
	</div>
</div>
<?php
require_once("footer.php");
?>