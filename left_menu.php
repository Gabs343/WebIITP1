<?php

	$marca = json_decode(file_get_contents('marcas.json'), true);

	$categoria = json_decode(file_get_contents('categorias.json'), true);

?>

<div id="sidebar" class="span3">
<div class="well well-small marca">
	<ul class="nav nav-list">
		<?php
			echo "<li><span class='icon-chevron-right'><a href='products.php?categoria=&marca='>Categorias</a></span> ";
			echo "<ul class= 'nav nav-list'>";
			foreach($categoria as $clave => $valor){
				if(isset($_GET["marca"])){
					if($clave == $_GET["categoria"]){
						echo "<li class='active'a><a href='products.php?categoria=0&marca=$_GET[marca]'><span class='icon-chevron-right'></span>$valor[nombre]</a></li>";
					}else{
						echo "<li><a href='products.php?categoria=$clave&marca=$_GET[marca]'><span class='icon-chevron-right'></span>$valor[nombre]</a></li>";
					}
				}else{
					echo "<li><a href='products.php?categoria=$clave&marca=0'><span class='icon-chevron-right'></span>$valor[nombre]</a></li>";
				}
				
			}
			echo "</ul>";
			echo "</li>";
			echo"<li style='border:0'> &nbsp;</li>";

			echo "<li><span class='icon-chevron-right'><a href='products.php?categoria=&marca='>Marcas</a></span> ";
			echo "<ul class= 'nav nav-list'>";
			foreach($marca as $clave => $valor){
				if(isset($_GET["categoria"])){
					if($clave == $_GET["marca"]){
						echo "<li class='active'><a href='products.php?categoria=$_GET[categoria]&marca=0'><span class='icon-chevron-right'></span>$valor[nombre]</a></li>";
					}else{
						echo "<li><a href='products.php?categoria=$_GET[categoria]&marca=$clave'><span class='icon-chevron-right'></span>$valor[nombre]</a></li>";
					}
				}else{
					echo "<li><a href='products.php?categoria=0&marca=$clave'><span class='icon-chevron-right'></span>$valor[nombre]</a></li>";
				}
				
			}
			echo "</ul>";
			echo "</li>";
			echo"<li style='border:0'> &nbsp;</li>";
		?>
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