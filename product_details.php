<?php
require_once("header.php");

$multi_comentarios = json_decode(file_get_contents('comentarios.json'), true);

<<<<<<< HEAD
sort($multi_comentarios);
#arsort($multi_comentarios);
=======
krsort($multi_comentarios);
>>>>>>> master

function infoProduct($multi_productos, $informacion)
{
    foreach ($multi_productos as $clave) {
        if ($clave["id_producto"] == $_GET["product"]) {
            echo $clave[$informacion];
        }
    }
}

function comentario($txt) {?>
    <script>alert("<?php echo $txt; ?>")</script>
<?php }

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
            <li class="active">Preview</li>
        </ul>
        <div class="well well-small">
            <div class="row-fluid">
                <div class="span5">
                    <div id="myCarousel" class="carousel slide cntr">
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#"><img src="<?php infoProduct($multi_productos, "imagen"); ?>" alt="" style="width:100%"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span7">
                    <h2><?php
                        infoProduct($multi_productos, "nombre");
                        ?></h2>
                    <hr class="soft" />


                    <div class="control-group">
                        <label class="control-label">
                            <strong>
                                <h3>
                                    <?php
                                    echo "ARS $";
                                    infoProduct($multi_productos, "precio");
                                    ?>
                                </h3>
                            </strong>
                        </label>
                    </div>
                    <h4>Descripción</h4>

                    <p>
                        <?php infoProduct($multi_productos, "descripción"); ?>
                    </p>
                    <form action="<?php $_PHP_SELF ?>" class="form-horizontal qtyFrm" method="POST">
                        <button type='submit' name='cart' class='shopBtn'><span class='icon-shopping-cart'></span> Add to cart</button>
                        <?php if (isset($_POST["cart"])) {
                            $carrito["id_producto"][] = $_GET["product"];
                            file_put_contents("carrito.json", json_encode($carrito));
                        }
                        ?>
                    </form>
                    <a href='cart.php'>View cart</a>
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
                    foreach ($multi_productos as $clave) {
                        if ($clave["id_producto"] == $_GET["product"]) {
                            foreach ($clave as $subclave) {
                                if (is_array($subclave)) {
                                    foreach ($subclave as $subclave2 => $subvalor) {
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
                            <label for="nombre">Nombre:</label>
                            <input type="text" placeholder="Nombre" id="nombre" name="nombre" required>
                        </div>
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
                            <?php
                            for ($i = 1; $i < 6; $i++) {
                                echo "<input type='radio' name='valoracion' id='Valoracion' value='$i' required>$i</input>";
                            }
                            ?>
                        </div>
                        <input class="shopBtn" type="submit" name="comentar" value="Enviar comentario">
                        <?php
                             if (isset($_POST["comentar"])) {
                                date_default_timezone_set("America/Argentina/Buenos_Aires");
                                $key = date("YmdHis");
        
                                array_pop($_POST);
                                $_POST = array("id_producto" => $_GET["product"], "fecha" => date("d-m-Y H:i:s"), "nombre" => $_POST["nombre"]) + $_POST;
                                $multi_comentarios[$key] = $_POST;
        
                                file_put_contents("comentarios.json", json_encode($multi_comentarios));
                                comentario('Gracias por su comentario, ¡lo apreciamos!');
                            }
                        ?>    
                    </form>
                    <?php
<<<<<<< HEAD
                    if (isset($_POST["comentar"])) {
                        date_default_timezone_set("America/Argentina/Buenos_Aires");
                        $key = date("YmdHis");

                        array_pop($_POST);
                        $_POST = array("id_producto" => $_GET["product"], "fecha" => date("d-m-Y H:i:s")) + $_POST;
                        $multi_comentarios[$key] = $_POST;

                        file_put_contents("comentarios.json", json_encode($multi_comentarios));
                        comentario('Gracias por su comentario, ¡lo apreciamos!');
                    }
                    echo "<ul>";

                    $numComentario = 0;
                    foreach ($multi_comentarios as $clave) {
                        if (($clave["id_producto"] == $_GET["product"]) && $numComentario < 4) {
                            echo "<li>";
                            foreach ($clave as $subclave => $subvalor) {
                                if ($subclave == "id_producto") {
                                    continue;
                                } else {
                                    echo $subclave, ": ", $subvalor, "<br>";
                                }
                            }
                            echo "</li>";
                            $numComentario++;
                        }
                    }
                    echo "</ul>";
=======
                     krsort($multi_comentarios);
                     echo "<ul>";

                     $numComentario = 0;
                     foreach ($multi_comentarios as $clave) {
                         if (($clave["id_producto"] == $_GET["product"]) && $numComentario < 3) {
                             echo "<li>";
                             foreach ($clave as $subclave => $subvalor) {
                                 if ($subclave == "id_producto") {
                                     continue;
                                 } else {
                                     echo $subclave, ": ", $subvalor, "<br>";
                                 }
                             }
                             echo "</li>";
                             $numComentario++;
                         }
                     }
                     echo "</ul>";
                   
>>>>>>> master
                    ?>

                </div>
            </div>

        </div>
    </div>
</div> <!-- Body wrapper -->
<?php
require_once("footer.php");
?>