<?php

    // Obtén los datos del formulario
    $nombre_usuario = $_POST["nombre_usuario"];
    $contrasena = $_POST["contrasena"];
    $email = $_POST["email"];

    // Completa el código para verificar la autenticación
    // Realiza una consulta en la base de datos y verifica si las credenciales son válidas

    // Ejemplo:
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "login_db";
    
     $conn = new mysqli($servername, $username, $password, $database);
    
     if ($conn->connect_error) {
         die("Error en la conexión a la base de datos: " . $conn->connect_error);
     }
    
     $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contraseña = '$contrasena' AND email = '$email'";
     $result = $conn->query($sql);
    
     if ($result->num_rows > 0) {
         echo "¡Inicio de sesión exitoso!";
     } else {
         echo "Inicio de sesión fallido. Verifica tus credenciales.";
     }
    
     $conn->close();
?>
