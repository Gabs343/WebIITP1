<?php
	$marca = array(1 => "Redragon",
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
<div class="well well-small marca">
	<ul class="nav nav-list">
		<?php
			for($i = 1; $i <= count($categoria); $i++){
				echo "<li><a href='products.php?categoria=$i&marca=0'><span class='icon-chevron-right'></span>$categoria[$i]</a>";
				echo "<ul class= 'nav nav-list'>";
					for($j = 1; $j <= count($marca); $j++){
						echo "<li><a href='products.php?categoria=$i&marca=$j'><span class='icon-chevron-right'></span>$marca[$j]</a></li>";
				}
				echo "</ul>";
                echo "</li>";
			}
		?>

		<li style="border:0"> &nbsp;</li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>¡Hasta 3 cuotas sin intereses!</h2>
				  <p> 
					 Aceptamos todas las tarjetas.<br>
				  </p>
			  </div>
			
			<h3 class="shopBtn btn-block"> Próximos productos <br></h3>

			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
		
				<img src="assets/img/nuevo1.jpg" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4 class="text-center">Armado de PCs.</h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<img src="assets/img/microfono.png" alt="shopping cart template">
				<div class="caption">
				  <h4 class="text-center">Micrófonos para gamers.</h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<img src="assets/img/mesa.png" alt="bootstrap template">
				<div class="caption">
				  <h4 class="text-center">Escritorios.</h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>