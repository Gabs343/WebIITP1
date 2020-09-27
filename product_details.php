<?php
	require_once("header.php");
	$f_productoR = fopen("productos.json", "r");
	$json_producto = fread($f_productoR, filesize("productos.json"));
	fclose($f_productoR);
    $multi_productos = json_decode($json_producto, true);

    $multi_comentarios = array(1 => array("id_producto" => 1,
                                                    "correo" => "prueba01@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            2 => array("id_producto" => 2,
                                                    "correo" => "prueba02@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            3 => array("id_producto" => 3,
                                                    "correo" => "prueba03@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            4 => array("id_producto" => 4,
                                                    "correo" => "prueba04@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            5 => array("id_producto" => 5,
                                                    "correo" => "prueba05@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            6 => array("id_producto" => 6,
                                                    "correo" => "prueba06@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            7 => array("id_producto" => 7,
                                                    "correo" => "prueba07@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            8 => array("id_producto" => 8,
                                                    "correo" => "prueba08@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            9 => array("id_producto" => 9,
                                                    "correo" => "prueba09@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            10 => array("id_producto" => 10,
                                                    "correo" => "prueba10@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            11 => array("id_producto" => 11,
                                                    "correo" => "prueba11@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            12 => array("id_producto" => 12,
                                                    "correo" => "prueba12@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            13 => array("id_producto" => 13,
                                                    "correo" => "prueba13@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            14 => array("id_producto" => 14,
                                                    "correo" => "prueba14@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            15 => array("id_producto" => 15,
                                                    "correo" => "prueba15@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            16 => array("id_producto" => 16,
                                                    "correo" => "prueba16@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            17 => array("id_producto" => 17,
                                                    "correo" => "prueba17@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            18 => array("id_producto" => 18,
                                                    "correo" => "prueba18@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            19 => array("id_producto" => 19,
                                                    "correo" => "prueba19@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            20 => array("id_producto" => 20,
                                                    "correo" => "prueba20@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            
                            21 => array("id_producto" => 20,
                                                    "correo" => "prueba21@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            22 => array("id_producto" => 19,
                                                    "correo" => "prueba22@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            23 => array("id_producto" => 18,
                                                    "correo" => "prueba23@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            24 => array("id_producto" => 17,
                                                    "correo" => "prueba24@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            25 => array("id_producto" => 16,
                                                    "correo" => "prueba25@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            26 => array("id_producto" => 15,
                                                    "correo" => "prueba26@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            27 => array("id_producto" => 14,
                                                    "correo" => "prueba27@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            28 => array("id_producto" => 13,
                                                    "correo" => "prueba28@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            29 => array("id_producto" => 12,
                                                    "correo" => "prueba29@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            30 => array("id_producto" => 11,
                                                    "correo" => "prueba30@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            31 => array("id_producto" => 10,
                                                    "correo" => "prueba31@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            32 => array("id_producto" => 9,
                                                    "correo" => "prueba32@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            33 => array("id_producto" => 8,
                                                    "correo" => "prueba33@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            34 => array("id_producto" => 7,
                                                    "correo" => "prueba34@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            35 => array("id_producto" => 6,
                                                    "correo" => "prueba35@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            36 => array("id_producto" => 5,
                                                    "correo" => "prueba36@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            37 => array("id_producto" => 4,
                                                    "correo" => "prueba37@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            38 => array("id_producto" => 3,
                                                    "correo" => "prueba38@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            39 => array("id_producto" => 2,
                                                    "correo" => "prueba39@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            40 => array("id_producto" => 1,
                                                    "correo" => "prueba40@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            41 => array("id_producto" => 1,
                                                    "correo" => "prueba41@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            42 => array("id_producto" => 2,
                                                    "correo" => "prueba42@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            43 => array("id_producto" => 3,
                                                    "correo" => "prueba43@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            44 => array("id_producto" => 4,
                                                    "correo" => "prueba44@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            45 => array("id_producto" => 5,
                                                    "correo" => "prueba45@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            46 => array("id_producto" => 6,
                                                    "correo" => "prueba46@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            47 => array("id_producto" => 7,
                                                    "correo" => "prueba47@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            48 => array("id_producto" => 8,
                                                    "correo" => "prueba48@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            49 => array("id_producto" => 9,
                                                    "correo" => "prueba49@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            50 => array("id_producto" => 10,
                                                    "correo" => "prueba50@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            51 => array("id_producto" => 11,
                                                    "correo" => "prueba51@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            52 => array("id_producto" => 12,
                                                    "correo" => "prueba52@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            53 => array("id_producto" => 13,
                                                    "correo" => "prueba53@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            54 => array("id_producto" => 14,
                                                    "correo" => "prueba54@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            55 => array("id_producto" => 15,
                                                    "correo" => "prueba55@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            56 => array("id_producto" => 16,
                                                    "correo" => "prueba56@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            57 => array("id_producto" => 17,
                                                    "correo" => "prueba57@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            58 => array("id_producto" => 18,
                                                    "correo" => "prueba58@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            59 => array("id_producto" => 19,
                                                    "correo" => "prueba59@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            60 => array("id_producto" => 20,
                                                    "correo" => "prueba60@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            
                            61 => array("id_producto" => 20,
                                                    "correo" => "prueba61@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            62 => array("id_producto" => 19,
                                                    "correo" => "prueba62@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            63 => array("id_producto" => 18,
                                                    "correo" => "prueba63@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            64 => array("id_producto" => 17,
                                                    "correo" => "prueba64@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            65 => array("id_producto" => 16,
                                                    "correo" => "prueba65@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            66 => array("id_producto" => 15,
                                                    "correo" => "prueba66@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            67 => array("id_producto" => 14,
                                                    "correo" => "prueba67@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            68 => array("id_producto" => 13,
                                                    "correo" => "prueba68@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            69 => array("id_producto" => 12,
                                                    "correo" => "prueba69@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            70 => array("id_producto" => 11,
                                                    "correo" => "prueba70@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            71 => array("id_producto" => 10,
                                                    "correo" => "prueba71@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            72 => array("id_producto" => 9,
                                                    "correo" => "prueba72@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            73 => array("id_producto" => 8,
                                                    "correo" => "prueba73@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            74 => array("id_producto" => 7,
                                                    "correo" => "prueba74@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            75 => array("id_producto" => 6,
                                                    "correo" => "prueba75@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            76 => array("id_producto" => 5,
                                                    "correo" => "prueba76@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            77 => array("id_producto" => 4,
                                                    "correo" => "prueba77@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            78 => array("id_producto" => 3,
                                                    "correo" => "prueba78@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"),
                            79 => array("id_producto" => 2,
                                                    "correo" => "prueba79@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            80 => array("id_producto" => 1,
                                                    "correo" => "prueba80@gmail.com",
                                                    "comentario" => "Se puede mejorar",
                                                    "valoración" => "3"));
    
    $f_comentario = fopen("comentarios.json", "w");
    fwrite($f_comentario, json_encode($multi_comentarios));
    fclose($f_comentario);
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
            <li><a href="products.php">Items</a> <span class="divider">/</span></li>
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
                            
                            
                        }
                        foreach ($multi_comentarios as $clave) {
                            if ($clave["id_producto"] == $_GET["product"]) {
                                foreach ($clave as $subclave => $subvalor) {
                                    if($subclave == "id_producto"){
                                        continue;
                                    }else{
                                        echo "<li>";
                                        echo $subclave, ": ",$subvalor, "<br>";
                                        echo "</li>";
                                    } 
                                }
                            }
                        }

                    ?>
                    
                </div>
            </div>

        </div>
    </div>
</div> <!-- Body wrapper -->
<?php
	require_once("footer.php");
?>