<?php
	require_once("header.php");
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
		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Newbury+Street,+Boston,+MA,+United+States&amp;aq=1&amp;oq=NewBoston,+MA,+United+States&amp;sll=42.347238,-71.084011&amp;sspn=0.014099,0.033023&amp;ie=UTF8&amp;hq=Newbury+Street,+Boston,+MA,+United+States&amp;t=m&amp;ll=42.348994,-71.088248&amp;spn=0.001388,0.006276&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Visitanos</h4>
		<h5>
			2601 Mission St.<br/>
			San Francisco, CA 94110<br/>
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>Contactanos</h4>
		<form method="post" action="contact.php" class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="Nombre" name="nombre" class="input-xlarge"/>
           
          </div>
		  <div class="control-group">
           
              <input type="text" placeholder="Apellido" name="apellido" class="input-xlarge"/>
           
          </div>
		  <div class="control-group">
           
		   <input type="text" placeholder="E-mail" name="email" class="input-xlarge"/>
		
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
    $f_consulta = fopen("contactanos.json", "w");
    fwrite($f_consulta, json_encode($multi_consulta));
	fclose($f_consulta);
    echo "<p class='text-center'><strong>Muchas gracias por tu consulta.</strong></p>";
    echo "<br>";
}


?>
		</div>
	</div>	
</div>
<?php
	require_once("footer.php");
?>
