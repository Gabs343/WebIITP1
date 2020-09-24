<?php
	require_once("header.php");
	$f_productoR = fopen("productos.json", "r");
	$json_producto = fread($f_productoR, filesize("productos.json"));
	fclose($f_productoR);
    $multi_productos = json_decode($json_producto, true);

    $multi_comentarios = array(20190115143015 => array("id_producto" => "1",
                                                    "correo" => "prueba01@gmail.com",
                                                    "comentario" => "¡¡Excelentes!!",
                                                    "valoración" => "5"),
                            20191028011007 => array("id_producto" => "2",
                                                    "correo" => "prueba02@gmail.com",
                                                    "comentario" => "No era lo que esperaba",
                                                    "valoración" => "2"),
                            20200503204550 => array("id_producto" => "3",
                                                    "correo" => "prueba03@gmail.com",
                                                    "comentario" => "Muy bueno pero con algunos problemas",
                                                    "valoración" => "4"),
                            20200723141343 => array("id_producto" => "2",
                                                    "correo" => "prueba04@gmail.com",
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
                            <!--<div class="item">
                                <a href="#"> <img src="assets/img/b.jpg" alt="" style="width:100%"></a>
                            </div>
                            <div class="item">
                                <a href="#"> <img src="assets/img/e.jpg" alt="" style="width:100%"></a>
                            </div>-->
                        </div>
                        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>-->
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
                        <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
                    </form>
                </div>
            </div>
            <hr class="softn clr" />


            <ul id="productDetail" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
                <!--<li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceseries <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#cat1" data-toggle="tab">Category one</a></li>
                        <li><a href="#cat2" data-toggle="tab">Category two</a></li>
                    </ul>
                </li>-->
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
					<form action="<?php $_PHP_SELF ?>" class="form_comments" method="POST">
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
                            $tiempo = date("ymdhms");

                            
                        }
                        print_r($multi_comentarios)
						/*echo "El usuario ", $_POST["id_correo"], " comento:<br>";
						echo $_POST["comentario"], "<br>";
						echo "valoracion: ", $_POST["valoracion"];*/

					?>
		        </div>
				

                <!--<div class="tab-pane fade" id="profile">
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soft">
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soft" />
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soft" />
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften" />
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cat1">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo
                        retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft
                        beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                        banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever
                        gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you
                        probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu
                        synth chambray yr.</p>
                    <br>
                    <br>
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften" />
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften" />
                </div>
                <div class="tab-pane fade" id="cat2">

                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften" />
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften" />
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften" />
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/d.jpg" alt="">
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
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.php" class="defaultBtn"><span
                                            class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.php" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften" />

                </div>-->
            </div>

        </div> 
    </div> 
</div> <!-- Body wrapper -->
<?php
	require_once("footer.php");
?>