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
        <div class="item <?php ActiveBanner($banner);?>">
            <img style='width:100%' src="<?php echo $ruta; ?>" alt='bootstrap ecommerce templates'>
            <div class='carousel-caption'>
                <h4><?php echo $titulo; ?></h4>
                <p><span> <?php echo $descripcion; ?></span></p>
            </div>
        </div>
    <?php }  ?>
    <div class='row'>
        <?php include_once('left_menu.php');?>
        <div class='span9'>
            <!--CAROUSEL-->
            <div class='well np'>
                <div id="myCarousel" class='carousel slide homCar'>
                    <div class='carousel-inner'>
                        <?php
                            for($i = 1; $i <= count($banner_list); $i++){
                                banner($i, $banner_list[$i]["banner"], $banner_list[$i]["titulo"], $banner_list[$i]["descripcion"]);
                            }
                        ?>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide='prev'>&lsaquo;</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            <hr>
            <div class='well well-small'>
                <h3>Productos.</h3>
                <hr class='soften'/>
                <div class='row-fluid'>
                    <ul class='thumbnails'>
                        <?php
                        productos($multi_productos, 1, $items_navlist, $carrito);
                        productos($multi_productos, 2, $items_navlist, $carrito);
                        productos($multi_productos, 3, $items_navlist, $carrito);
                        
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
                        productos($multi_productos, 4, $items_navlist, $carrito);
                        productos($multi_productos, 5, $items_navlist, $carrito);
                        productos($multi_productos, 7, $items_navlist, $carrito);
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once('footer.php');
    ?>