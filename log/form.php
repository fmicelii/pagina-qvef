<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$contrasena = $_POST["contrasena"];
$telefono = $_POST["telefono"];

$servername = "127.0.0.1";
$database = "db_qvef";
$username = "alumno";
$password = "alumnoipm";

$conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
} else {
    //insertamos el resultado del formulario
    $consulta = "SELECT email FROM usuario WHERE email = '$email'";
    $resultado = mysqli_query($conexion, $consulta);

    // Cambia mysql_num_rows por mysqli_num_rows
    $numero_filas = mysqli_num_rows($resultado);

    if($numero_filas > 0) {
        echo "El email ingresado está repetido, por favor ingrese uno nuevo";

    }
    else{
        $query = "INSERT INTO usuario VALUES (null, '$email', '$nombre', '$apellido', '$direccion', '$contrasena', '$telefono');";
        $resultado = mysqli_query($conexion, $query);

        if($resultado){
            session_start();
            $_SESSION["nombre"] = $nombre;
            header("Location: ../index.php");
        }
        else{
            echo "Error al registrar el usuario: ".mysqli_error($conexion);
        }
    }

    mysqli_close($conexion);
}
?>
