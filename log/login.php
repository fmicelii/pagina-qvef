<?php
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    $servername = "127.0.0.1";
    $database = "db_qvef";
    $username = "alumno";
    $password = "alumnoipm";

    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    } else {
        //insertamos el resultado del formulario
        $consulta = "SELECT contrasena,nombre FROM usuario WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $consulta);

        // Cambia mysql_num_rows por mysqli_num_rows
        $numero_filas = mysqli_num_rows($resultado);

        if($numero_filas == 0) {
            header("Location: ./form.html");
        }
        else{
            $fila = mysqli_fetch_assoc($resultado);

            if($fila["contrasena"] == $contrasena){
                session_start();
                $_SESSION["nombre"] = $fila["nombre"];
                header("Location: ../index.php");
            }
            else{
                header("Location: ./login.html");
            }
        }

        mysqli_close($conexion);
    }
?>
