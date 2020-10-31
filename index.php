<?php
	require_once('header.php');

    $banner_index = array (
        1 => array ("id_producto" => "assets/img/asus.png"),
        2 => array ("id_producto" => "assets/img/nvidia.png"),
        3 => array ("id_producto" => "assets/img/amd.png"),
        4 => array ("id_producto" => "assets/img/intel.png")
    );

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
                    echo "<span class='pull-right'>ARS $$a_precio</span>";
                echo "</h4>";
            echo "</div>";
        echo "</div>";
        echo "</li>";
    }
    ?>
    <div class='row'>
        <?php include_once('left_menu.php');?>
        <div class='span9'>
            <!--CAROUSEL-->
            <div class='well np'>
                <div id='myCarousel' class='carousel slide homCar'>
                    <div class='carousel-inner'>
                        <?php
                        bannerActive($banner_index[1]["id_producto"], "¡Laptops!", "De las mejores marcas.");
                        banner($banner_index[2]["id_producto"], "Tarjetas gráficas", "Para la mejor experiencia.");
                        banner($banner_index[3]["id_producto"], "¡Ryden y Radeon!", "Los mejores procesadores.");
                        banner($banner_index[4]["id_producto"], "Nueva generación", "Intel presenta la décima generación.");
                        ?>
                    </div>
                    <a class='left carousel-control' href='#myCarousel' data-slide='prev'>&lsaquo;</a>
                    <a class='right carousel-control' href='#myCarousel' data-slide='next'>&rsaquo;</a>
                </div>
            </div>
            <hr>
            <div class='well well-small'>
                <h3>Productos.</h3>
                <hr class='soften'/>
                <div class='row-fluid'>
                    <ul class='thumbnails'>
                        <?php
                        productos(1, $multi_productos[1]["imagen"], $multi_productos[1]["nombre"], $multi_productos[1]["precio"]);
	                    productos(2, $multi_productos[2]["imagen"], $multi_productos[2]["nombre"], $multi_productos[2]["precio"]);
	                    productos(3, $multi_productos[3]["imagen"], $multi_productos[3]["nombre"], $multi_productos[3]["precio"]);
                        ?>
                    </ul>
                </div>
            </div>
            <hr>
            <!--FEATURED PRODUCTS-->
            <div class='well well-small'>
                <h3>Productos desctados.</h3>
                <hr class='soften'/>
                <div class='row-fluid'>
                    <ul class='thumbnails'>
                        <?php
                        featuredProducts(4, $multi_productos[4]["imagen"], $multi_productos[4]["nombre"], $multi_productos[4]["precio"]);
                        featuredProducts(5, $multi_productos[5]["imagen"], $multi_productos[5]["nombre"], $multi_productos[5]["precio"]);
                        featuredProducts(6, $multi_productos[6]["imagen"], $multi_productos[6]["nombre"], $multi_productos[6]["precio"]);
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once('footer.php');
    ?>