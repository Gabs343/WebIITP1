<?php
	require_once('header.php');
	$multi_productos = array(
        1 => array ("id_producto" => 1,
                    "imagen" => "assets/img/auricular1.png", 
					"nombre" => "MEMECOLEOUS H112", 
					"descripción" => "El Redragon Memecoleous ofrece un increíble nivel de sonido a gamers gracias a su sonido diseñado a medida. Su estilo de diseño único y su espectro de frecuencia combinados entregan una precisión impresionante.",
					"precio" => "ARS 5.299",
					"id_marca" => 1,
					"id_categoria" => 1,
                    "especificaciones" => array("Retroiluminación" => "Si, retroiluminado rojo",
                                                "Sensibilidad" => "109.8 dB",
                                                "Vibración" => "Si. Motor de vibración 30 mm",
                                                "Material Diadema" => "Metálica, flexible. Integrada a la estructura",
                                                "Tipo de salida" => "Stereo",
                                                "Peso" => "450 gr")),            

        2 => array ("id_producto" => 2,
                    "imagen" => "assets/img/laptop1.png",
					"nombre" => "Laptop Lenovo",
					"descripción" => "Garantía Oficial Lenovo 12 Meses",
					"precio" => "ARS 60.000",
					"id_marca" => 4,
					"id_categoria" => 5,
					"especificaciones" => array("Procesador" => "AMD",
												"Memoria" => "4GB DDR4",
												"Almacenamiento" => "500 GB",
												"OS" => "Windows 10")),
	
        3 => array("id_producto" => 3,
                    "imagen" => "assets/img/teclado1.jpg",
					"nombre" => "Teclado Sentey Iluxion Gaming",
					"descripción" => "Teclado Retroiluminado USB",
					"precio" => "ARS 1.200",
					"id_marca" => 3,
					"id_categoria" => 2,
                    "especificaciones" => array("Conector" => "USB 2.0",
                                            "Longitud Cable" => "1.5mts",
                                            "Dimensión" => "446 * 142 * 318 mm",
                                            "Aspecto" => "Negro Mate",
                                            "Peso" => "490 gr")),
        4 => array("id_producto" => 4,
                    "imagen" => "assets/img/mouse1.jpg",
                    "nombre" => "Mouse Centrophorus M601 USB 3200DPI",
                    "descripción" => "El Centrophorus se abre paso en el mercado demostrando que no es solo una cara bonita y una construcción sólida, sus switches Omron y su sensor Pixart 3317 óptico, aseguran movimiento fluído y clicks precisos. Todo conectado a la PC mediante una ficha USB recubierta en oro que la hace inoxidable y aporta la mejor conductividad posible.",
                    "precio" => "ARS 2.060",
                    "id_marca" => 1,
                    "id_categoria" => 3,
                    "especificaciones" => array("Orientación" => "Ambidiestro",
                                            "Conexión" => "Cableado USB",
                                            "Retroiluminación" => "Si, roja",
                                            "DPI Maximo" => "3200",
                                            "DPI Minimo" => "400",
                                            "Frecuencia de respuesta" => "1000 Hz",
                                            "Dimensiones" => "12x7x3.9 cm",
                                            "Modelo Sensor" => "Pixart 3317 óptico")),
        5 => array("id_producto" => 5,
                    "imagen" => "assets/img/silla1.jpg",
                    "nombre" => "Silla Gamer Aureox G200 Entry Black/Red",
                    "descripción" => "La experiencia de jugar como un verdadero PRO. Este modelo viene con todo lo necesario para que puedas vivir intensamente cada partida.  Además cuenta con un sistema regulable en altura, y una reclinacion de hasta 180°.",
                    "precio" => "ARS 20.100",
                    "id_marca" => 2,
                    "id_categoria" => 4,
                    "especificaciones" => array("Modelo" => "Aureox G200",
                                            "Superficie" => "Cuero Sintético ",
                                            "Estructura" => "Acero",
                                            "Espuma de Alta Densidad" => "No",
                                            "Ajuste de Altura" => "Si",
                                            "Cilindro de Gas" => "Clase 3",
                                            "Apoyabrazos" => "Fijos",
                                            "Almohadones" => "Si",
                                            "Peso Recomendado" => "110Kg",
                                            "Peso" => "16Kg")),
        6 => array("id_producto" => 6,
                    "imagen" => "assets/img/auricular2.jpg",
                    "nombre" => "Auriculares Sentey Combat Gaming Headset GS-4371",
                    "descripción" => "Calidad superior a través de potentes diafragmas de neodimio, con un excelente sonido tanto en frecuencias medias, bajas y graves. Podras utilizar combat no solo en tu computadora gamer sino tambien en tu consola PS4.",
                    "precio" => "ARS 1.769",
                    "id_marca" => 3,
                    "id_categoria" => 1,
                    "especificaciones" => array("Modelo" => "GS-4371",
                                                "Conector" => "3.5mm x 2",
                                                "Tipo de cable" => "Ultra Flexible",
                                                "Tamaño (mm)" => "210 x 210mm",
                                                "Direccionalidad" => "Omnidirectional",
                                                "Respuesta de Frecuencia" => "15~20KHz",
                                                "Apoyabrazos" => "Fijos",
                                                "Almohadones" => "Si",
                                                "Conexión PC" => "Jack 3.5mm + USB",
                                                "Impedancia" => "2,2 KΩ")),
        7 => array("id_producto" => 7,
                    "imagen" => "assets/img/laptop2.jpg",
                    "nombre" => "Notebook ASUS X512JA",
                    "descripción" => "Garantia por 12 meses.",
                    "precio" => "ARS 105.000",
                    "id_marca" => 5,
                    "id_categoria" => 5,
                    "especificaciones" => array("Procesador" => "I5 1035 G1",
                                                "Memoria" => "8GB Dual Channel (4+4) / Tipo: DDR4 SODIMM",
                                                "Almacenamiento" => "512Gb + 32Gb / Clase: SSD NVME + Intel Optane",
                                                "Pantalla" => "5.6 / Resolución: 1366x768",
                                                "OS" => "Linux",
                                                "Color" => "Gris",
                                                "Dimensiones" => "23.49cm Profundidad, 35.70cm Ancho, 1.99cm Alto",
                                                "Batería" => "2 celdas / Garantía: 12 Meses",
                                                "Conexión PC" => "Jack 3.5mm + USB",
                                                "Peso" => "1.80Kg")),
        8 => array("id_producto" => 8,
                    "imagen" => "assets/img/teclado2.jpg",
                    "nombre" => "Teclado Mecánico Cougar Ultimus RGB Español Switch Red",
                    "descripción" => "COUGAR Ultimus RGB es un teclado para el jugador comprometido. Con interruptores mecánicos, una retroiluminación RGB por tecla totalmente personalizable y uno de los diseños de teclado más resistentes que ha visto el mundo, todo lo que necesita para dominar a sus oponentes está aquí.",
                    "precio" => "ARS 11.700",
                    "id_marca" => 6,
                    "id_categoria" => 2,
                    "especificaciones" => array("Interruptores de las teclas" => "RGB Interruptores mecánicos",
                                                "N-key rollover" => "Sí",
                                                "Retroiluminación en todas las teclas" => "Sí (RGB, 16,8 millones de colores)",
                                                "Ratio de refresco" => "	1000Hz / 1ms",
                                                "Interfaz" => "	conector USB",
                                                "Longitud del cable" => "1.8m Trenzado",
                                                "Peso" => "0.95kg")),
        9 => array("id_producto" => 9,
                    "imagen" => "assets/img/placaVideo1.jpg",
                    "nombre" => "Placa de Video Palit NVIDIA GeForce GTX1650 SUPER GP 4GB GDDR6",
                    "descripción" => "La GeForce ® GTX 1650 está construida con el rendimiento gráfico revolucionario de la galardonada arquitectura NVIDIA Turing ™. Es un supercargador para los juegos más populares de la actualidad, e incluso más rápido con los títulos modernos.",
                    "precio" => "ARS 20.000",
                    "id_marca" => 7,
                    "id_categoria" => 6,
                    "especificaciones" => array("Chip" => "NVIDIA GTX1650 Super",
                                                "Tamaño de memoria" => "4Gb",
                                                "Interfaz de memoria" => "128bit",
                                                "DRAM" => "GDDR6",
                                                "Memory Speed" => "12 Gbps",
                                                "OpenGL" => "4.6",
                                                "Máxima resolución digital" => "7680x4320@60Hz",
                                                "Tamaño de la placa" => "170x115x40 mm",
                                                "Potencia de la tarjeta gráfica" => "100 W",
                                                "Potencia recomendada del sistema" => "300 W")),
        10 => array("id_producto" => 10,
                    "imagen" => "assets/img/control1.jpg",
                    "nombre" => "Gamepad Joystick Redragon Harrow G808 PC/PS3 USB Wireless",
                    "descripción" => "El Harrow es una pieza terminada sobre plástico ABS reforzado, de forma ergonómica y diseñada para todo tipo de jugadores. Tengan el agarre del mando que tengan, y cualquiera sea la cantidad de horas de uso que tengan pensadas.",
                    "precio" => "ARS 3.800",
                    "id_marca" => 1,
                    "id_categoria" => 7,
                    "especificaciones" => array("Tipo de conexión" => "Inalámbrica 2.4 Ghz",
                                                "Plataformas soportadas" => "PC / PlayStation® 3",
                                                "Interfaz" => "Dongle USB 2.0",
                                                "Botones" => "8 + 2 Sticks",
                                                "Bumpers L1/R1" => "2 tipo botón",
                                                "Triggers LT/RT" => " 2 sensitivos",
                                                "D-Pad" => "8 vías",
                                                "Vibración" => "2 motores de vibración para Force Feedback",
                                                "Tamaño" => "6 x 10 x 15 cm",
                                                "Peso" => "330 gr")));

	$f_producto = fopen("productos.json", "w");
	fwrite($f_producto, json_encode($multi_productos));
    fclose($f_producto);

    $marca = array(1 => "Redradon",
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
    
    function productos($num, $ruta, $a_nombre, $a_precio){
		echo <<< tt
		
		<li class='span4'>
		<div class='thumbnail'>
		<a href='product_details.php?product=$num' class='overlay'></a>
		<a class='zoomTool' href='product_details.php?product=$num' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
		<a href='product_details.php?product=$num'><img src='$ruta' alt=''></a>
		<div class='caption cntr'>
		<p>$a_nombre</p>
		<p><strong>$a_precio</strong></p>
		<h4><a class='shopBtn' href='#' title='add to cart'> Add to cart </a></h4>
		<div class='actionList'>
		<a class='pull-left' href='#'>Add to Wish List </a> 
		<a class='pull-left' href='#'> Add to Compare </a>
		</div> 
		<br class='clr'>
		</div>
		</div>
		</li>
		tt;

    }

    function bannerActive($ruta, $titulo, $descripcion){
        echo "<div class='item active'>";
            echo "<img style='width:100%' src=$ruta alt='bootstrap ecommerce templates'>";
            echo "<div class='carousel-caption'>";
                echo "<h4>$titulo</h4>";
                echo "<p><span>$descripcion</span></p>";
            echo "</div>";
        echo "</div>";
    }

    function banner($ruta, $titulo, $descripcion){
        echo "<div class='item'>";
            echo "<img style='width:100%' src=$ruta alt='bootstrap ecommerce templates'>";
            echo "<div class='carousel-caption'>";
                echo "<h4>$titulo</h4>";
                echo "<p><span>$descripcion</span></p>";
            echo "</div>";
        echo "</div>";
    }

    function featuredProducts($num, $ruta, $a_nombre, $a_precio){
        echo "<li class='span4'>";
        echo "<div class='thumbnail'>";
            echo "<a class='zoomTool' href='product_details.php?product=$num' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>";
            echo "<a href='product_details.php?product=$num'><img src=$ruta alt=''></a>";
            echo "<div class='caption'>";
                echo "<h5>$a_nombre</h5>";
                echo "<h4>";
                    echo "<a class='defaultBtn' href='product_details.php?product=$num' title='Click to view'><span class='icon-zoom-in'></span></a>";
                    echo "<a class='shopBtn' href='#' title='add to cart'><span class='icon-plus'></span></a>";
                    echo "<span class='pull-right'>$a_precio</span>";
                echo "</h4>";
            echo "</div>";
        echo "</div>";
        echo "</li>";
    }

    function newProducts($num, $ruta){
        echo "<li class='span3'>";
            echo "<div class='thumbnail'>";
                echo "<a class='zoomTool' href='product_details.php?product=$num' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>";
                echo "<a href='#' class='tag'></a>";
                echo "<a href='product_details.php?product=$num'><img src='$ruta' alt='bootstrap-ring'></a>";
            echo "</div>";
        echo "</li>";
    }

    echo "<div class='row'>";
        include_once('left_menu.php');
        echo "<div class='span9'>";
            /*CAROUSEL*/
            echo "<div class='well np'>";
                echo "<div id='myCarousel' class='carousel slide homCar'>";
                    echo "<div class='carousel-inner'>";
                        bannerActive("assets/img/bootstrap_free-ecommerce.png", "Prueba 1", "prueba 1");
                        banner("assets/img/bootstrap_free-ecommerce.png", "Prueba 2", "prueba 2");
                        banner("assets/img/bootstrap_free-ecommerce.png", "Prueba 3", "prueba 3");
                        banner("assets/img/bootstrap_free-ecommerce.png", "Prueba 4", "prueba 4");
                    echo "</div>";
                    echo "<a class='left carousel-control' href='#myCarousel' data-slide='prev'>&lsaquo;</a>";
                    echo "<a class='right carousel-control' href='#myCarousel' data-slide='next'>&rsaquo;</a>";
                echo "</div>";
            echo "</div>";

            /*NEW PRODUCTS*/
            echo "<div class='well well-small'>";
                echo "<h3>New Products </h3>";
                echo "<hr class='soften'/>";
                echo "<div class='row-fluid'>";
                    echo "<div id='newProductCar' class='carousel slide'>";
                        echo "<div class='carousel-inner'>";
                            echo "<div class='item active'>";
                                echo "<ul class='thumbnails'>";
                                    newProducts(1, $multi_productos["1"]["imagen"]);
                                    newProducts(2, $multi_productos["2"]["imagen"]);
                                    newProducts(3, $multi_productos["3"]["imagen"]);
                                    newProducts(4, $multi_productos["4"]["imagen"]);
                                echo "</ul>";
                            echo "</div>";
                            echo "<div class='item'>";
                                echo "<ul class='thumbnails'>";
                                    newProducts(5, $multi_productos["5"]["imagen"]);
                                    newProducts(6, $multi_productos["6"]["imagen"]);
                                    newProducts(7, $multi_productos["7"]["imagen"]);
                                    newProducts(4, $multi_productos["8"]["imagen"]);
                                echo "</ul>";
                            echo "</div>";
                        echo "</div>";
                        echo "<a class='left carousel-control' href='#newProductCar' data-slide='prev'>&lsaquo;</a>";
                        echo "<a class='right carousel-control' href='#newProductCar' data-slide='next'>&rsaquo;</a>";
                    echo "</div>";
                echo "</div>"; 
            echo "</div>";
            echo "<div class='well well-small'>";
                echo "<h3>New Products </h3>";
                echo "<hr class='soften'/>";
                echo "<div class='row-fluid'>";
                    echo "<ul class='thumbnails'>";
                        productos(1, $multi_productos["1"]["imagen"], $multi_productos["1"]["nombre"], $multi_productos["1"]["precio"]);
	                    productos(2, $multi_productos["2"]["imagen"], $multi_productos["2"]["nombre"], $multi_productos["2"]["precio"]);
	                    productos(3, $multi_productos["3"]["imagen"], $multi_productos["3"]["nombre"], $multi_productos["3"]["precio"]);
                    echo "</ul>";
                echo "</div>";
            echo "</div>";
          
            /*FEATURED PRODUCTS*/
            echo "<div class='well well-small'>";
                echo "<h3><a class='btn btn-mini pull-right' href='products.php' title='View More'>View More<span class='icon-plus'></span></a>Featured Products</h3>";
                echo "<hr class='soften'/>";
                echo "<div class='row-fluid'>";
                    echo "<ul class='thumbnails'>";
                        featuredProducts(4, $multi_productos["4"]["imagen"], $multi_productos["4"]["nombre"], $multi_productos["4"]["precio"]);
                        featuredProducts(5, $multi_productos["5"]["imagen"], $multi_productos["5"]["nombre"], $multi_productos["5"]["precio"]);
                        featuredProducts(6, $multi_productos["6"]["imagen"], $multi_productos["6"]["nombre"], $multi_productos["6"]["precio"]);
                    echo "</ul>";
                echo "</div>";
            echo "</div>";
            echo "<div class='well well-small'>";
                echo "<a class='btn btn-mini pull-right' href='#'>View more <span class='icon-plus'></span></a>Popular Products";
            echo "</div>";
            echo "<div class='well well-small'>";
                echo "<a class='btn btn-mini pull-right' href='#'>View more <span class='icon-plus'></span></a> Best selling Products";
            echo "</div>";
        echo "</div>";
    echo "</div>";
	include_once('footer.php');
?>

