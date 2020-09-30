<?php
    require_once("header.php");
    
	$f_productoR = fopen("productos.json", "r");
	$json_producto = fread($f_productoR, filesize("productos.json"));
	fclose($f_productoR);
    $multi_productos = json_decode($json_producto, true);

  
    $f_comentarioR = fopen("comentarios.json", "r");
    $json_comentario = fread($f_comentarioR, filesize("comentarios.json"));
    fclose($f_comentarioR);
    $multi_comentarios = json_decode($json_comentario, true);
?>
<!-- 
Body Section 
-->
<div class="row">
    <?php
			require_once("left_menu.php");
	?>
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Preview</li>
        </ul>
        <div class="well well-small">
            <div class="row-fluid">
                <div class="span5">
                    <div id="myCarousel" class="carousel slide cntr">
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#"> <img src=<?php
                                    foreach($multi_productos as $clave){
                                        if($clave["id_producto"] == $_GET["product"]){
                                            echo $clave["imagen"];
                                        }
                                    }
                                ?> alt="" style="width:100%"></a>
                            </div>
                          
                        </div>

                    </div>
                </div>
                <div class="span7">
                    <h3><?php
						foreach($multi_productos as $clave){
							if($clave["id_producto"] == $_GET["product"]){
								echo $clave["nombre"];
							}
						}
					?></h3>
                    <hr class="soft" />

                    <form action="cart.php" class="form-horizontal qtyFrm">
                        <div class="control-group">
                            <label class="control-label">
                                <span>
                                    <?php
                                    foreach($multi_productos as $clave){
                                        if($clave["id_producto"] == $_GET["product"]){
                                            echo $clave["precio"];
                                        }
                                    }
                                ?>
                                </span></label>
                            <div class="controls">
                                <input type="number" class="span6" placeholder="Qty.">
                            </div>
                        </div>
                        <h4>Descripción</h4>
                        <?php
						    foreach($multi_productos as $clave){
							    if($clave["id_producto"] == $_GET["product"]){
								    echo "<p>", $clave["descripción"], "</p>";
							    }
						    }
                        ?>
                        <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to
                            cart</button>
                    </form>
                </div>
            </div>
            <hr class="softn clr" />


            <ul id="productDetail" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
                <div class="tab-pane fade active in" id="home">
                    <h4>Información</h4>
                    <?php
                        echo "<table class='table table-striped'>";
                        echo "<tbody>";
                        foreach($multi_productos as $clave){
                            if($clave["id_producto"] == $_GET["product"]){
                                foreach($clave as $subclave){
                                    if(is_array($subclave)){
                                        foreach($subclave as $subclave2 => $subvalor){
                                            echo "<tr class='techSpecRow'>";
                                            echo "<td class='techSpecTD1'>", $subclave2, ":</td>";
                                            echo "<td class='techSpecTD2'>", $subvalor, "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                }  
                            } 
                        }
                        echo "</tbody>";
                        echo "</table>";
                        
                    ?>
                    <form action="<?php $_PHP_SELF ?>" class="form_comments" method="post">
                        <div>
                            <label for="Mail">Email:</label>
                            <input type="email" placeholder="@example.com" id="Mail" name="id_correo" required>
                        </div>
                        <div class="comment">
                            <label for="Comentario">Comentario:</label>
                            <textarea name="comentario" id="Comentario" cols="90" rows="3" required></textarea>
                        </div>
                        <div>
                            <label for="Valoracion">Califica el producto:</label>
                            <input type="radio" name="valoracion" id="Valoracion" value="1">1</input>
                            <input type="radio" name="valoracion" id="Valoracion" value="2">2</input>
                            <input type="radio" name="valoracion" id="Valoracion" value="3">3</input>
                            <input type="radio" name="valoracion" id="Valoracion" value="4">4</input>
                            <input type="radio" name="valoracion" id="Valoracion" value="5" required>5</input>
                        </div>
                        <input type="submit" name="enviar" value="Enviar comentario">
                    </form>
                    <?php
                        if(isset($_POST["enviar"])){
                            array_pop($_POST);
                            $_POST = array("id_producto" => $_GET["product"]) + $_POST;
                            
                            array_push($multi_comentarios, $_POST);
                            $f_comentario = fopen("comentarios.json", "w");
                            fwrite($f_comentario, json_encode($multi_comentarios));
                            fclose($f_comentario);
                        
                        }
                        echo "<ul>";
                        foreach ($multi_comentarios as $clave) {
                            if ($clave["id_producto"] == $_GET["product"]) {
                                echo "<li>";
                                foreach ($clave as $subclave => $subvalor) {
                                    if($subclave == "id_producto"){
                                        continue;
                                    }else{
                                        echo $subclave, ": ",$subvalor, "<br>"; 
                                    } 
                                }
                                echo "</li>";
                            }
                        }
                        echo "</ul>";
                    ?>
                    
                </div>
            </div>

        </div>
    </div>
</div> <!-- Body wrapper -->
<?php
	require_once("footer.php");
?>