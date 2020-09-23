<?php
	require_once('header.php');
	$multi_productos = array(
        1 => array ("id_producto" => "1",
                    "imagen" => "assets/img/auricular1.png", 
					"nombre" => "MEMECOLEOUS H112", 
					"descripción" => "El Redragon Memecoleous ofrece un increíble nivel de sonido a gamers gracias a su sonido diseñado a medida. Su estilo de diseño único y su espectro de frecuencia combinados entregan una precisión impresionante.",
					"precio" => "ARS 5.299",
					"id_marca" => "1",
					"id_categoria" => "1",
                    "destacado" => true,
                    "especificaciones" => array("Retroiluminación" => "Si, retroiluminado rojo",
                                                "Sensibilidad" => "109.8 dB",
                                                "Vibración" => "Si. Motor de vibración 30 mm",
                                                "Material Diadema" => "Metálica, flexible. Integrada a la estructura",
                                                "Tipo de salida" => "Stereo",
                                                "Peso" => "450 gr")),            

        2 => array ("id_producto" => "2",
                    "imagen" => "assets/img/laptop1.png",
					"nombre" => "Laptop Lenovo",
					"descripción" => "Garantía Oficial Lenovo 12 Meses",
					"precio" => "ARS 60.000",
					"id_marca" => "4",
					"id_categoria" => "5",
					"destacado" => false,
					"especificaciones" => array("Procesador" => "AMD",
												"Memoria" => "4GB DDR4",
												"Almacenamiento" => "500 GB",
												"OS" => "Windows 10")),
	
        3 => array("id_producto" => "3",
                    "imagen" => "assets/img/teclado.jpg",
					"nombre" => "Teclado Sentey Iluxion Gaming",
					"descripción" => "Teclado Retroiluminado USB",
					"precio" => "ARS 1200",
					"id_marca" => "3",
					"id_categoria" => "2",
                    "destacado" => false,
                    "especificaciones" => array("Conector" => "USB 2.0",
                                            "Longitud Cable" => "1.5mts",
                                            "Dimensión" => "446 * 142 * 318 mm",
                                            "Aspecto" => "Negro Mate",
                                            "Peso" => "490 gr")),
        4 => array("id_producto" => "4",
                    "imagen" => "assets/img/mouse1.jpg",
                    "nombre" => "Mouse Centrophorus M601 USB 3200DPI",
                    "descripción" => "El Centrophorus se abre paso en el mercado demostrando que no es solo una cara bonita y una construcción sólida, sus switches Omron y su sensor Pixart 3317 óptico, aseguran movimiento fluído y clicks precisos. Todo conectado a la PC mediante una ficha USB recubierta en oro que la hace inoxidable y aporta la mejor conductividad posible.",
                    "precio" => "ARS 2.060",
                    "id_marca" => "1",
                    "id_categoria" => "3",
                    "destacado" => false,
                    "especificaciones" => array("Orientación" => "Ambidiestro",
                                            "Conexión" => "Cableado USB",
                                            "Retroiluminación" => "Si, roja",
                                            "DPI Maximo" => "3200",
                                            "DPI Minimo" => "400",
                                            "Frecuencia de respuesta" => "1000 Hz",
                                            "Dimensiones" => "12x7x3.9 cm",
                                            "Modelo Sensor" => "Pixart 3317 óptico")),
        5 => array("id_producto" => "5",
                    "imagen" => "assets/img/silla1.jpg",
                    "nombre" => "Silla Gamer Aureox G200 Entry Black/Red",
                    "descripción" => "La experiencia de jugar como un verdadero PRO. Este modelo viene con todo lo necesario para que puedas vivir intensamente cada partida.  Además cuenta con un sistema regulable en altura, y una reclinacion de hasta 180°.",
                    "precio" => "ARS 20.100",
                    "id_marca" => "2",
                    "id_categoria" => "4",
                    "destacado" => false,
                    "especificaciones" => array("Modelo" => "Aureox G200",
                                            "Superficie" => "Cuero Sintético ",
                                            "Estructura" => "Acero",
                                            "Espuma de Alta Densidad" => "No",
                                            "Ajuste de Altura" => "Si",
                                            "Cilindro de Gas" => "Clase 3",
                                            "Apoyabrazos" => "Fijos",
                                            "Almohadones" => "Si",
                                            "Peso Recomendado" => "110Kg",
                                            "Peso" => "16Kg")));

	$f_producto = fopen("productos.json", "w");
	fwrite($f_producto, json_encode($multi_productos));
	fclose($f_producto);
?>
<!-- 
Body Section 
-->
<div class="row">
    <?php
			include_once('left_menu.php');
		?>
    <div class="span9">
        <div class="well np">
            <div id="myCarousel" class="carousel slide homCar">
                <div class="carousel-inner">
                    <div class="item">
                        <img style="width:100%" src="assets/img/bootstrap_free-ecommerce.png"
                            alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                            <h4>Bootstrap shopping cart</h4>
                            <p><span>Very clean simple to use</span></p>
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:100%" src="assets/img/carousel1.png" alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                            <h4>Bootstrap Ecommerce template</h4>
                            <p><span>Highly Google seo friendly</span></p>
                        </div>
                    </div>
                    <div class="item active">
                        <img style="width:100%" src="assets/img/carousel3.png" alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                            <h4>Twitter Bootstrap cart</h4>
                            <p><span>Very easy to integrate and expand.</span></p>
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:100%" src="assets/img/bootstrap-templates.png" alt="bootstrap templates">
                        <div class="carousel-caption">
                            <h4>Bootstrap templates integration</h4>
                            <p><span>Compitable to many more opensource cart</span></p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <!--
New Products
-->
        <div class="well well-small">
            <h3>New Products </h3>
            <hr class="soften" />
            <div class="row-fluid">
                <div id="newProductCar" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_detaiphp" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.php"><img src="assets/img/bootstrap-ring.png"
                                                alt="bootstrap-ring"></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.php"><img src="assets/img/i.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.php"><img src="assets/img/g.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.php"><img src="assets/img/s.png" alt=""></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.php"><img src="assets/img/i.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.php"><img src="assets/img/f.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.php"><img src="assets/img/h.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                                class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.php"><img src="assets/img/j.jpg" alt=""></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4">
						<!--Primer Producto-->
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.php?product=1" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.php?product=1"><img src="assets/img/auricular1.png" alt=""></a>
                            <div class="caption cntr">
                                <p><?php echo $multi_productos["1"]["nombre"];?></p>
                                <p><strong><?php echo $multi_productos["1"]["precio"]?></strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <!--Segundo Producto-->
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.php?product=2" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.php?product=2"><img src="assets/img/laptop1.png" alt=""></a>
                            <div class="caption cntr">
                                <p><?php echo $multi_productos["2"]["nombre"];?></p>
                                <p><strong><?php echo $multi_productos["2"]["precio"]?></strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <!--Tercer Producto-->
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.php?product=3" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.php?product=3"><img src="assets/img/teclado1.jpg" alt=""></a>
                            <div class="caption cntr">
                                <p><?php echo $multi_productos["3"]["nombre"];?></p>
                                <p><strong><?php echo $multi_productos["3"]["precio"];?></strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--
	Featured Products
	-->
        <div class="well well-small">
            <h3><a class="btn btn-mini pull-right" href="products.php" title="View more">VIew More<span
                        class="icon-plus"></span></a> Featured Products </h3>
            <hr class="soften" />
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.php"><img src="assets/img/d.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Manicure & Pedicure</h5>
                                <h4>
                                    <a class="defaultBtn" href="product_details.php" title="Click to view"><span
                                            class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.php"><img src="assets/img/e.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Manicure & Pedicure</h5>
                                <h4>
                                    <a class="defaultBtn" href="product_details.php" title="Click to view"><span
                                            class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.php" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="product_details.php"><img src="assets/img/f.jpg" alt="" /></a>
                            <div class="caption">
                                <h5>Manicure & Pedicure</h5>
                                <h4>
                                    <a class="defaultBtn" href="product_details.php" title="Click to view"><span
                                            class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Popular Products
        </div>
        <hr>
        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Best selling Products
        </div>
    </div>
</div>

<?php
	include_once('footer.php');
?>

