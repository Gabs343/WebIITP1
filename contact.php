<?php
	require_once("header.php");
?>
<!-- 
Body Section 
-->
	<hr class="soften">
	<div class="well well-small">
	<h1>Visit us</h1>
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
           
              <input type="text" placeholder="Asunto" name="asunto" class="input-xlarge"/>
          
          	</div>
		  <div class="control-group">
		    Area de la empresa:
    			<select name="area"  class="input-xlarge">
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


	   $arrayMail = [];
     $arrayMail = [];
		if (isset($_POST['enviar'])){
    	foreach ($arrayMail as $clave => $valor) {
        	if ($clave == 'area') {
            	switch ($valor) {
                	case 'soporte':
                    	$arrayMail ['destinatario'] = 'soporte@empresa.com';
                    	break;
                	case 'ventas':
                    	$arrayMail ['destinatario'] = 'ventas@empresa.com';
                    	break;
                	case 'productos':
                    	$arrayMail ['destinatario'] = 'productos@empresa.com';
                    	break;
                	case 'rrhh':
                    	$arrayMail ['destinatario'] = 'recursoshumanos@empresa.com';
                    	break;
            	}
        	}       
    	}
	}
	?>

		</div>
	</div>	
</div>
<?php
	require_once("footer.php");
?>
