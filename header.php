<?php

$f_productoR = fopen("productos.json", "r");
$json_producto = fread($f_productoR, filesize("productos.json"));
fclose($f_productoR);
$multi_productos = json_decode($json_producto, true);

$f_carritoR = fopen("carrito.json", "r");
$json_carrito = fread($f_carritoR, filesize("carrito.json"));
fclose($f_carritoR);
$carrito = json_decode($json_carrito, true);

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

function navlist($a_nav){ ?>
<ul class='nav'>
    <?php
		foreach ($a_nav as $clave => $valor) { ?>
    <li class=<?php Active($valor["archivo"]) ?>><a
            href=<?php echo $valor["archivo"] . "?page"; ?>><?php echo $valor["nombre"]; ?></a></li>
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
                        <form action="#" class="navbar-search pull-left">
                            <input type="text" placeholder="Search" class="span2">
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span
                                        class="icon-lock"></span> Ingresa <b class="caret"></b></a>
                                <div class="dropdown-menu">
                                    <form class="form-horizontal loginFrm">
                                        <div class="control-group">
                                            <input type="text" class="span2" id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="control-group">
                                            <input type="password" class="span2" id="inputPassword" placeholder="Contraseña">
                                        </div>
                                        <div class="control-group">
                                            <label class="checkbox">
                                                <input type="checkbox"> Recuerdame
                                            </label>
                                            <button type="submit" class="shopBtn btn-block">Ingresar</button>
                                        </div>
                                    </form>
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