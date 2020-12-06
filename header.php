<?php

require_once ("funcs.php");

$multi_productos = json_decode(file_get_contents('productos.json'), true);

$carrito = json_decode(file_get_contents('carrito.json'), true);

$multi_suscritos = json_decode(file_get_contents('correos.json'), true);

$items_navlist = array(
	1 => array(
		"archivo" => "index.php",
		"nombre" => "Inicio"
	),
	2 => array(
		"archivo" => "list-view.php",
		"nombre" => "Lista de productos"
	),
	3 => array(
		"archivo" => "grid-view.php",
		"nombre" => "Productos en cuadrículas"
	),
	4 => array(
		"archivo" => "newProducts.php",
		"nombre" => "Nuevos productos"
	),
	5 => array(
		"archivo" => "contact.php",
		"nombre" => "Contacto"
	)
);

$size_image = array(0 => array('nombre'=>'small','ancho'=>'500','alto'=>'1000')
                    /*1 => array('nombre'=>'big','ancho'=>'5000','alto'=>'10000'),
/*2 => array('nombre'=>'thumb','ancho'=>'50','alto'=>'50')*/);

for($i = 1; $i <= count($multi_productos); $i++){
    if(!is_dir("imagenes/".$i."/")){
        mkdir("imagenes/".$i."/");
        redimensionar("imagenes/".$i."/", $multi_productos[$i]["imagen"], $multi_productos[$i]["imagen"], $multi_productos[$i]["id_producto"], $size_image);
    }
}

function navlist($a_nav){ ?>
<ul class='nav'>
    <?php
		foreach ($a_nav as $clave => $valor) { ?>
    <li class=<?php Active($valor["archivo"]) ?>><a
            href="<?php echo $valor["archivo"]."?page=1" ?>"><?php echo $valor["nombre"]; ?></a></li>
    <?php
		}
		echo "</ul>";
        }

function productos($a_productos, $numeroProducto, $a_nav, $carrito){ ?>
    <li class="span4">
        <div id='<?php echo $numeroProducto; ?>'class="thumbnail">
            <?php
				echo $a_productos[$numeroProducto]["destacado"] ? "" : "<a href='product_details.php?product=$numeroProducto' class='overlay'></a>";
			?>

            <a class="zoomTool" href="product_details.php?product=<?php echo $numeroProducto; ?>"
                title="add to cart"><span class="icon-search"></span>QUICK VIEW</a>
            <a href='product_details.php?product=<?php echo $numeroProducto; ?> '><img
                    src='<?php echo $a_productos[$numeroProducto]["imagen"]; ?>' alt=''></a>

            <?php
				echo $a_productos[$numeroProducto]["nuevo"] ? "<a href='#' class='tag'></a>" : "";
			?>

            <div class="caption <?php echo $a_productos[$numeroProducto]["destacado"] && !strpos($_SERVER["PHP_SELF"], $a_nav[3]["archivo"]) ? "" : "cntr" ?>">
                <h5><?php echo $a_productos[$numeroProducto]["nombre"]; ?></h5>
                <?php
					if ($a_productos[$numeroProducto]["destacado"] && !strpos($_SERVER["PHP_SELF"], $a_nav[3]["archivo"])) { ?>
						<h4>
						<form action="index.php" class="form-horizontal qtyFrm" method="POST">
							<a class='defaultBtn' href='product_details.php?product=<?php echo $numeroProducto; ?>' title='Click to view'><span class='icon-zoom-in'></span></a>
							<button type='submit' name='item' class='shopBtn' title='add to cart' value="<?php echo $numeroProducto; ?>"><span class='icon-plus'></span></button>
                            <span class='pull-right'>ARS $<?php echo $a_productos[$numeroProducto]['precio'];?> </span>
                            
							<?php if (isset($_POST["item"])) {
								$carrito["id_producto"][] = $_POST["item"]; 
                            	file_put_contents("carrito.json", json_encode($carrito));
                        	}
                            ?>
                            
						</form>
						</h4>
					<?php } else { ?>
				<p><strong>ARS $ <?php echo $a_productos[$numeroProducto]['precio']; ?></strong></p>
				
				<form action="index.php" class="form-horizontal qtyFrm" method="POST">
                <button type='submit' name='item' value='<?php echo $numeroProducto; ?>' class='shopBtn'><span class='icon-shopping-cart'></span> Add to cart</button>
                <?php if (isset($_POST["item"])) {
                    $carrito["id_producto"][] = $_POST["item"];
                    file_put_contents("carrito.json", json_encode($carrito));
                }
                ?>
				</form>
                <br class='clr'>
                <?php } ?>
            </div>
        </div>
    </li>
<?php }

function Active($menu){
	echo strpos($_SERVER["SCRIPT_NAME"], $menu) ? "active" : "";
}

function ActiveBanner($itemBanner){
	echo $itemBanner == 1 ? "active" : "";
}

function suscripcion($txt) {?>
    <script>alert("<?php echo $txt; ?>")</script>
<?php }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo "DGamer/". basename($_SERVER["SCRIPT_NAME"]); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="script.js" language="Javascript"></script>
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet" />
    <!-- font awesome styles -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

        <!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

        <!-- Favicons -->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">

        <link href="estilos.css" rel="stylesheet" />
    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse">
                        <?php
						navlist($items_navlist);
						?>
                        <!--<form action="#" class="navbar-search pull-left">
                            <input type="text" placeholder="Search" class="span2">
                        </form>-->
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span
                                        class="icon-lock"></span> ¡Suscribite! <b class="caret"></b></a>
                                <div class="dropdown-menu">
                                    <form class="form-horizontal loginFrm" method="post">
                                        <div class="control-group">
                                            <input type="email" class="span2" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="control-group">
                                            <input type="text" class="span2" name="nombre" placeholder="Nombre" required>
                                        </div>
                                        <div class="control-group">
                                            <input type="text" class="span2" name="apellido" placeholder="Apellido" required>
                                        </div>
                                        <div class="control-group">
                                            <input type="text" class="span2" name="edad" placeholder="Apellido" required>
                                        </div>
                                        <div class="control-group">
                                            <button type="submit" class="shopBtn btn-block" name="suscribirse">Suscribirse.</button>
                                        </div>
                                        
                                    </form>
                                    <?php 

                                        if (isset($_POST["suscribirse"])){
	                                        array_pop($_POST);
                                            array_push($multi_suscritos, $_POST);
	                                        file_put_contents("correos.json", json_encode($multi_suscritos));
	                                        suscripcion('Muchas gracias por suscribirte, '.$_POST["nombre"].'.');
                                        }

                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <header id="header">
                <div class="row">
                    <div class="span4 offset4">
                        <h1>
                            <a class="logo" href="index.php">
                                <img src="assets/img/pagina.png" alt="bootstrap sexy shop">
                            </a>
                        </h1>
                    </div>
                </div>
            </header>

