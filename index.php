<?php
	require_once('header.php');

    $banner_list = array (
        1 => array ("banner" => "assets/img/asus.png",
                    "titulo" => "¡Laptops!",
                    "descripcion" => "De las mejores marcas."),
        2 => array ("banner" => "assets/img/nvidia.png",
                    "titulo" => "Tarjetas gráficas",
                    "descripcion" => "Para la mejor experiencia."),
        3 => array ("banner" => "assets/img/amd.png",
                    "titulo" => "¡Ryden y Radeon!",
                    "descripcion" => "Los mejores procesadores."),
        4 => array ("banner" => "assets/img/intel.png",
                    "titulo" => "Nueva generación",
                    "descripcion" => "Intel presenta la décima generación.")
    );
    function banner($banner, $ruta, $titulo, $descripcion){?>
        <div class='item <?php ActiveBanner($banner);?>'>
            <img style='width:100%' src="<?php echo $ruta; ?>" alt='bootstrap ecommerce templates'>
            <div class='carousel-caption'>
                <h4><?php echo $titulo; ?></h4>
                <p><span> <?php echo $descripcion; ?></span></p>
            </div>
        </div>
    <?php }

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
                        for($i = 1; $i <= count($banner_list); $i++){
                            banner($i, $banner_list[$i]["banner"], $banner_list[$i]["titulo"], $banner_list[$i]["descripcion"]);
                        }
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