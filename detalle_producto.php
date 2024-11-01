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

// Obtener el ID del producto desde la URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Consulta para obtener el producto por ID
$sql = "SELECT * FROM producto WHERE id = $product_id";
$result = mysqli_query($conexion, $sql);

$product = null;
$product_images = [];

if (mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);

    for ($i = 1; $i <= 5; $i++) {
        if (!empty($product["img$i"])) {
            $product_images[] = htmlspecialchars($product["img$i"]);
        }
    }

    // Depuración: Verifica las imágenes
} else {
    echo "Producto no encontrado.";
    exit;
}

// Obtener el ID del producto actual
$id_producto_actual = $_GET['id']; // Asegúrate de validar y sanitizar

// Consulta para obtener productos aleatorios excluyendo el actual
$consulta_recomendados = "SELECT * FROM producto WHERE id != $id_producto_actual ORDER BY RAND() LIMIT 5";
$resultado_recomendados = mysqli_query($conexion, $consulta_recomendados);

// Comprobación del número de filas
$numero_filas_recomendados = mysqli_num_rows($resultado_recomendados);

// Cierra la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detalle_producto.css">
    <!-- Fuentes e iconos -->
    <link rel="website icon" type="png" href="img/logo_negro_icono_QVEF.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title><?php echo htmlspecialchars($product['nombre']); ?></title>
</head>
<body>
    <header>
            <div class="headcelu" id="headcelu">
                <div class="izquierdaHC">
                    <span class="material-symbols-outlined">menu</span>
                    <span class="material-symbols-outlined">search</span>
                </div>

                <div class="medioHC">
                    <a href="index.php"><img class="logohead" src="img/logo_negro_QVEF.png" alt=""></a>
                </div>

                <div class="derechaHC">

                    <div class="perfildesplegable">
                        <span class="material-symbols-outlined">account_circle</span>
                        <ul class="perfilcategorias">
                            <li><a href="log/form.html" rel="noreferrer" >> Registrarse</a></li>
                            <li><a href="log/login.html">> Logearse</a></li>
                        </ul>
                    </div>
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
    <div class="content-todo">
        <div class="content-general">
            <div class="gallery-container">
                <div class="thumbnails" id="thumbnails"></div>
                <div class="main-image-container">
                    <img src="<?php echo htmlspecialchars($product['img1']); ?>" alt="product image" class="main-image" id="mainImage">
                    <button class="nav-button prev" id="prevButton">&lt;</button>
                    <button class="nav-button next" id="nextButton">&gt;</button>
                </div>
            </div>
            <div class="gallery-info">
                <div class="gallery-titulo">
                    <h2><?php echo htmlspecialchars($product['nombre']); ?></h2>
                    <p><?php echo htmlspecialchars($product['descripcion']); ?></p>
                </div>
                <div class="gallery-precio">
                    <p>$<?php echo htmlspecialchars($product['precio']); ?></p>
                </div>
                <button>Añadir al carrito</button>
            </div>
        </div>
    </div>

    <div class="seccion-recomendados">
    <h2>Productos que podrian interesarte ↓</h2>
    <div class="tarjetas-recomendadas">
        <?php
        if ($numero_filas_recomendados > 0) {
            while ($fila = mysqli_fetch_assoc($resultado_recomendados)) { ?>
                <div class="tarjeta">
                    <a class="no-underline" href="detalle_producto.php?id=<?php echo $fila['id']; ?>">
                        <img src="<?php echo $fila["img1"]; ?>" alt="<?php echo htmlspecialchars($fila["nombre"]); ?>">
                        <div class="tarjetainfo">
                            <h4><?php echo htmlspecialchars($fila["nombre"]); ?></h4>
                            <p class="desc"><?php echo htmlspecialchars($fila["descripcion"]); ?></p>
                            <p><?php echo htmlspecialchars($fila["precio"]); ?>$</p>
                        </div>
                    </a>
                </div>
            <?php }
        } else {
            echo "<p>No hay productos recomendados disponibles.</p>";
        }
        ?>
    </div>
    </div>



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
<script>
        const images = <?php echo json_encode($product_images); ?>;

        // Depuración: Verifica en la consola
        console.log(images);

        let currentIndex = 0;
        const mainImage = document.getElementById('mainImage');
        const thumbnailsContainer = document.getElementById('thumbnails');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        function updateMainImage() {
            mainImage.src = images[currentIndex];
            updateActiveThumbnail();
        }

        function updateActiveThumbnail() {
            document.querySelectorAll('.thumbnail').forEach((thumb, index) => {
                thumb.classList.toggle('active', index === currentIndex);
            });
        }

        function createThumbnails() {
            images.forEach((src, index) => {
                const thumb = document.createElement('img');
                thumb.src = src;
                thumb.classList.add('thumbnail');
                thumb.addEventListener('click', () => {
                    currentIndex = index;
                    updateMainImage();
                });
                thumbnailsContainer.appendChild(thumb);
            });
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateMainImage();
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateMainImage();
        });

        createThumbnails();
        updateMainImage();
    </script>
    
