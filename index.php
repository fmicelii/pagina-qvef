<?php
session_start();
$servername = "127.0.0.1";
$database = "db_qvef";
$username = "alumno";
$password = "alumnoipm";
$conexion = mysqli_connect($servername, $username, $password, $database); // Se crea la conexión

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
} 

// Consultas para obtener productos por categoría
$consulta_botin = "SELECT * FROM producto WHERE categoria = 'botin' order by rand()";
$consulta_camiseta = "SELECT * FROM producto WHERE categoria = 'camiseta' order by rand()";

$resultado_botin = mysqli_query($conexion, $consulta_botin);
$resultado_camiseta = mysqli_query($conexion, $consulta_camiseta);

// Obtén el número de filas de la consulta de botines
$numero_filas_botin = mysqli_num_rows($resultado_botin);
// Si necesitas también el número de camisetas, puedes obtenerlo así:
$numero_filas_camiseta = mysqli_num_rows($resultado_camiseta);


// Consulta para obtener todos los productos
$consulta_todos = "SELECT * FROM producto order by rand()";
$resultado_todos = mysqli_query($conexion, $consulta_todos);

// Comprobación del número de filas
$numero_filas_todos = mysqli_num_rows($resultado_todos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <!-- Fuentes e iconos -->
    <link rel="website icon" type="png" href="img/logo_negro_icono_QVEF.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Que Viva El Futbol</title>
</head>
<body>
    <div class="pantallainicialcelu">
        <div class="iniciocelu">
            <h1>QUE VIVA EL FUTBOL</h1>
            <div class="flechita">
                <a href="#headcelu" class="material-symbols-outlined">keyboard_double_arrow_down</a>
            </div>
        </div>
    </div>
    <div class="pantallainicialpc">
        <div class="iniciopc">
            <h1>QUE VIVA EL FUTBOL</h1>
            <div class="flechita">
                <a href="#headpc" class="material-symbols-outlined">keyboard_double_arrow_down</a>
            </div>
        </div>
    </div>

    <div class="todo">
        <header>
            <div class="headcelu" id="headcelu">
                <div class="izquierdaHC">
                    <span class="material-symbols-outlined">menu</span>
                    <span class="material-symbols-outlined">search</span>
                </div>

                <div class="medioHC">
                    <a href="index.html"><img class="logohead" src="img/logo_negro_QVEF.png" alt=""></a>
                </div>

                <div class="derechaHC">
                <?php
                    if(isset($_SESSION["nombre"])){
                        
                        ?>
                        <div class="perfildesplegable">
                            <span class="material-symbols-outlined">account_circle</span>
                            <ul class="perfilcategorias">
                                <li class="echo-session"> <?php echo "> ". $_SESSION["nombre"]; ?></li>
                                <li><a href="destroy.php">> Cerrar Sesion</a></li>
                            </ul>
                        </div>
                        <?php 
                    }
                    else {
                    ?>
                    <div class="perfildesplegable">
                        <span class="material-symbols-outlined">account_circle</span>
                        <ul class="perfilcategorias">
                            <li><a href="log/form.html" rel="noreferrer" >> Registrarse</a></li>
                            <li><a href="log/login.html">> Logearse</a></li>
                        </ul>
                    </div>
                    <?php }
                    ?>
                    <span class="material-symbols-outlined">local_mall</span>
                </div>
            </div>
<!-- -------------------HEADPC----------------------- -->
            <div class="headpc" id="headpc">
                <div class="izquierdaHP">
                    <a href="index.php"><img class="logohead" src="img/logo_negro_QVEF.png" alt=""></a>
                </div>
                
                <div class="medioHP">
                    <div class="contenedorbusqueda">
                        <input type="search" placeholder="Que buscas?">
                        <button type="submit">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                </div>

                <div class="derechaHP">
                    <?php
                    if(isset($_SESSION["nombre"])){
                        ?>
                        <p>Hola!</p>
                        <?php
                        // espacio vacio
                        echo "‎ ". $_SESSION["nombre"];
                        ?>
                        <div class="perfildesplegable">
                            <span class="material-symbols-outlined">account_circle</span>
                            <ul class="perfilcategorias">
                                <li><a href="destroy.php">> Cerrar Sesion</a></li>
                            </ul>
                        </div>
                        <?php 
                    }
                    else{
                    ?>
                    
                    <div class="perfildesplegable">
                        <span class="material-symbols-outlined">account_circle</span>
                        <ul class="perfilcategorias">
                            <li><a href="log/form.html">> Registrarse</a></li>
                            <li><a href="log/login.html">> Logearse</a></li>
                        </ul>
                    </div>
                    <?php }
                    ?>
                    <div class="bolsa-compra">
                        <span class="material-symbols-outlined">local_mall</span>
                    </div>
                </div>

            </div>
<!-- -------------------HEADPC----------------------- -->
        </header>

        <main>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                </div>
            </div>
            
            <!-- AFSDIUHGFADOIUSHGFAIUSHGIUASHGIUSGIUAESIUAESGIUAEWG -->
            <div id="botines-destacados" class="destacados">
                <h3>BOTINES DESTACADOS</h3>
                <div class="carousel">
                <?php
                        if ($numero_filas_todos > 0) {
                            while ($fila = mysqli_fetch_assoc($resultado_botin)) { ?>
                                <div class="tarjeta">
                                    <a class="no-underline" href="detalle_producto.php?id=<?php echo $fila['id']; ?>">
                                        <img src="<?php echo $fila["img1"]; ?>">
                                        <div class="tarjetainfo">
                                            <h4><?php echo $fila["nombre"]; ?></h4>
                                            <p class="desc"><?php echo $fila["descripcion"]; ?></p>
                                            <p><?php echo $fila["precio"]; ?>$</p>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                            } else {
                                echo "No hay productos disponibles.";
                            } ?>

                </div>
            </div>
            <div class="content-varios">    
                <div class="productos-varios">
                    <div class="product">
                        <img src="img/botines_f50.jpeg" alt="botines f50">
                    </div>
                    <div class="product">
                        <img src="img/botin_naranja.webp" alt="botines botin_naranja">
                    </div>
                    <div class="product">
                        <img src="img/botines_verdes_mercurial2.jpg" alt="botines azules">
                    </div>
                    <div class="product">
                        <img src="img/botines_nike_mercurial.webp" alt="botines azules">
                    </div>
                </div>
            </div>
            <div id="camisetas-destacadas" class="destacados">
                <h3>CAMISETAS DESTACADAS</h3>
                <div class="carousel">
                <?php
                        if ($numero_filas_todos > 0) {
                            while ($fila = mysqli_fetch_assoc($resultado_camiseta)) { ?>
                                <div class="tarjeta">
                                    <a class="no-underline" href="detalle_producto.php?id=<?php echo $fila['id']; ?>">
                                        <img src="<?php echo $fila["img1"]; ?>">
                                        <div class="tarjetainfo">
                                            <h4><?php echo $fila["nombre"]; ?></h4>
                                            <p class="desc"><?php echo $fila["descripcion"]; ?></p>
                                            <p><?php echo $fila["precio"]; ?>$</p>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                            } else {
                                echo "No hay productos disponibles.";
                            } ?>
                </div>

            </div>
            <div class="image-neymar">
                <h2>VIVE LA EXPERIENCIA</h2>
                <h3>DE LA COMODIDAD</h3>
                <a href="https://ar.puma.com/?utm_source=GGL&utm_medium=BS&gad_source=1&gclid=Cj0KCQjwveK4BhD4ARIsAKy6pMLytKaFUMlky1WqANf08one1GZNKHTbPOjd9PZvPOujvhd_NmetFtsaAvYJEALw_wcB"><img src="img/puma_logo.png" alt="logo de puma"></a>
            </div>
            
            <div id="productos" class="general">
                <h3>NUESTROS PRODUCTOS</h3>
                <div class="carousel">
                    <?php
                        if ($numero_filas_todos > 0) {
                            while ($fila = mysqli_fetch_assoc($resultado_todos)) { ?>
                                <div class="tarjeta">
                                    <a class="no-underline" href="detalle_producto.php?id=<?php echo $fila['id']; ?>">
                                        <img src="<?php echo $fila["img1"]; ?>">
                                        <div class="tarjetainfo">
                                            <h4><?php echo $fila["nombre"]; ?></h4>
                                            <p class="desc"><?php echo $fila["descripcion"]; ?></p>
                                            <p><?php echo $fila["precio"]; ?>$</p>
                                        </div>
                                    </a>
                                </div>
                            <?php }
                            } else {
                                echo "No hay productos disponibles.";
                            } ?>
                </div>
            </div>
            
        </div> <!--DIV TODO-->
        </main>
    <footer>
        <div class="footer">
            <div class="footer-container">
                <div class="footer-row">
                    <div class="footer-links">
                        <h4>Aclaracion</h4>
                        <div class="aclaracion">
                            <p>En esta página, la presentación de marcas de ropa de fútbol se utiliza con fines experimentales y educativos.
                            No buscamos asociarnos oficialmente con ninguna marca en particular.</p>
                        </div>
                    </div>
                    <div class="footer-links">
                        <!-- <h4>ejemplo</h4>
                        <ul>
                            <li><p>anashe</p></li>
                            <li><p>asssssssssss</p></li>
                            <li><p>asi es</p></li>
                            <li><p>texto ass</p></li>
                        </ul> -->
                        <h4>índice</h4>
                        <ul>
                            <li><a href="./index.php">Inicio</a></li>
                            <li><a href="/log/form.html">Registrarse</a></li>
                            <li><a href="/log/login.html">Loggearse</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Contacto</h4>
                        <ul>
                            <li><p><a href="mailto:elcorreoquequieres@correo.com">franmiceli08@gmail.com</a></p></li>
                            <a href="tel:+541162351561">+541162351561</a>
                            <li><p><a href="mailto:elcorreoquequieres@correo.com">tabuadalorenzo88@gmail.com</a></p></li>
                            <a href="tel:+541123711344">+541123711344</a>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-contact">
            <span class="material-symbols-outlined psychology">alternate_email</span>
            <ul class="gallery-ig">
                <li><a href="https://www.instagram.com/franmicelii/">Francisco Miceli</a></li>
                <li><a href="https://www.instagram.com/lolotabuada_/">Lorenzo Tabuada</a></li>
            </ul>
        </div>
        <div class="sub-footer2">
            <p>Copyright© 2024 Que Viva El Futbol. Todos los derechos reservados. <br><a href="../t&c.html">Terminos y Condiciones</a></p>
        </div>
    </footer>
</body>
</html>