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
		<h1>Check Out <small class="pull-right"><?php echo count($carrito["id_producto"]);?> Items are in the cart </small></h1>
	<hr class="soften"/>	

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
			$total = 0;
				echo "<tbody>";
				foreach($carrito as $claveC => $valor){
					foreach($valor as $subclave => $subvalor){
						foreach($multi_productos as $claveP){
							if($claveP["id_producto"] == $subvalor){
								echo <<< tt
								<tr>
								<td><img width='100' src='$claveP[imagen]' alt=''></td>
								<td>$claveP[nombre]</td>
								<td>
								<div class='input-append'>
								<button class='btn btn-mini btn-danger' type='button'><span class='icon-remove'></span></button>
								</div> </td>
								<td> ARS $$claveP[precio]</td>
								</tr>
								tt;
								$total += $claveP["precio"];
							}
						}
					}
				}
				echo "<tr>";
				echo "<td colspan='6' class='alignR'>Total products:	</td>";
				echo "<td class='label label-primary'>ARS $$total</td>";
				echo "</tr>";
				echo "</tbody>";  
			 
			?>
            </table><br/>
		
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
                <tr><td>ESTIMATE YOUR SHIPPING & TAXES</td></tr>
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