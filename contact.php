<?php
	require_once("header.php");

	function consulta($txt) {?>
		<script>alert("<?php echo $txt; ?>")</script>
	<?php }
?>
<!-- 
Body Section 
-->
	<hr class="soften">
	<div class="well well-small">
	<h1>¿Dónde nos encontramos?</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">
		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105045.10146632943!2d-58.607159858850494!3d-34.6380460301668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca25d18ad68b%3A0xf3698defdb8ec4b9!2sGezatek!5e0!3m2!1ses!2sar!4v1605213211861!5m2!1ses!2sar"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Visitanos</h4>
		<h5>
			Av. Carabobo 11,<br/>
			Caballito, Buenos Aires<br/>
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Contactanos</h4>
		<form method="post" action="contact.php" class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="Nombre" name="nombre" class="input-xlarge" required/>
           
          </div>
		  <div class="control-group">
           
              <input type="text" placeholder="Apellido" name="apellido" class="input-xlarge" required/>
           
          </div>
		  <div class="control-group">
           
		   <input type="email" placeholder="@example.com" name="email" class="input-xlarge" required/>
		
	   </div>
		 <div class="control-group">
		
		   <input type="tel" placeholder="Celular" name="celular" class="input-xlarge"/>
	   
		   </div>
	   <div class="control-group">
		 Area de la empresa:
			 <select name="area" class="input-xlarge">
				 <option value="soporte" selected="selected">Soporte de sistema</option>
				 <option value="ventas">Sector de ventas</option>  
				 <option value="productos">Area de productos</option>
				 <option value="rrhh">Recursos Humanos</option>
			 </select>
		   
	   </div>

	   <div class="control-group">
		   <textarea rows="3" id="textarea" name="mensaje" class="input-xlarge"></textarea>
		
	   </div>

		 <button class="shopBtn" type="submit" name="enviar">Enviar</button>

	 </fieldset>
   </form>

<?php


$f_consultar = fopen("contactanos.json", "r");
$json_consulta = fread($f_consultar, filesize("contactanos.json"));
fclose($f_consultar);
$multi_consulta = json_decode($json_consulta, true);

if (isset($_POST["enviar"])){
	array_pop($_POST);
    array_push($multi_consulta, $_POST);
	file_put_contents("contactanos.json", json_encode($multi_consulta));
	consulta('Muchas gracias por su consulta, '.$_POST["nombre"].', ya nos contactaremos con vos.');
}


?>
		</div>
	</div>	
</div>
<?php
	require_once("footer.php");
?>
