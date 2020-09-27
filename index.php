<?php
	require_once('header.php');
                                           
    $f_productoR = fopen("productos.json", "r");
    $json_producto = fread($f_productoR, filesize("productos.json"));
    fclose($f_productoR);
    $multi_productos = json_decode($json_producto, true);

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
            
            echo "<div class='well well-small'>";
                echo "<h3>New Products </h3>";
                echo "<hr class='soften'/>";
                echo "<div class='row-fluid'>";
                    echo "<ul class='thumbnails'>";
                        productos(1, $multi_productos[1]["imagen"], $multi_productos[1]["nombre"], $multi_productos[1]["precio"]);
	                    productos(2, $multi_productos[2]["imagen"], $multi_productos[2]["nombre"], $multi_productos[2]["precio"]);
	                    productos(3, $multi_productos[3]["imagen"], $multi_productos[3]["nombre"], $multi_productos[3]["precio"]);
                    echo "</ul>";
                echo "</div>";
            echo "</div>";
          
            /*FEATURED PRODUCTS*/
            echo "<div class='well well-small'>";
                echo "<h3><a class='btn btn-mini pull-right' href='products.php' title='View More'>View More<span class='icon-plus'></span></a>Featured Products</h3>";
                echo "<hr class='soften'/>";
                echo "<div class='row-fluid'>";
                    echo "<ul class='thumbnails'>";
                        featuredProducts(4, $multi_productos[4]["imagen"], $multi_productos[4]["nombre"], $multi_productos[4]["precio"]);
                        featuredProducts(5, $multi_productos[5]["imagen"], $multi_productos[5]["nombre"], $multi_productos[5]["precio"]);
                        featuredProducts(6, $multi_productos[6]["imagen"], $multi_productos[6]["nombre"], $multi_productos[6]["precio"]);
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
