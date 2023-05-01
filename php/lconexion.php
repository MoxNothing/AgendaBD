<?php
if(isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $conn = mysqli_connect("localhost", "usuario", "", "login1","3306");

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Query SQL para seleccionar datos de una tabla
    $sql = "INSERT INTO usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conn, $sql);

    // Verificar si la consulta SQL se ha ejecutado correctamente
    if ($resultado) {
        // Verificar si se encontraron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Los datos son correctos
            echo "Inicio de sesión exitoso";
        } else {
            // Los datos son incorrectos
            echo "Nombre de usuario o contraseña incorrectos";
        }
    } else {
        // La consulta SQL falló
        echo "Error al ejecutar la consulta: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
} else {
    echo "Error: Las variables no están definidas";
}
?>