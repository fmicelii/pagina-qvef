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

// Cierra la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detalle_producto.css">
    <title><?php echo htmlspecialchars($product['nombre']); ?></title>
</head>
<body>
    <div class="content-todo">
        <div class="content-general">
            <div class="gallery-container">
                <div class="thumbnails" id="thumbnails"></div>
                <div class="main-image-container">
                    <img src="<?php echo htmlspecialchars($product['img1']); ?>" alt="Main product image" class="main-image" id="mainImage">
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
</body>
</html>
