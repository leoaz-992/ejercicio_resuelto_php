<?php
// Establece la conexión a la base de datos (Completa con la información correcta)
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_web";

$conn = new mysqli($servername, $username, $password, $database); /* Este código está creando una nueva conexión a una base de datos MySQL */


// Verifica la conexión a la base de datos
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtiene los datos del formulario (Completa con los nombres de campo correctos)
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
//$telefono = isset($_POST['telefono'])? $_POST['telefono']:NULL;
$contrasena= $_POST['contrasena']; 
//$ciudad= isset($_POST['ciudad'])? $_POST['ciudad'] :NULL ;

$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];

// Realiza la inserción en la base de datos (Completa el INSERT SQL)
$sql = "INSERT INTO `usuarios` ( `nombre`, `apellido`, `email`, `telefono`, `contrasena`, `ciudad`, `fecha_registro`) VALUES (?,?, ?, NULL, ?, NULL,?) ";

if ($conn->prepare($sql)) {

    /* El método $conn->prepare($sql) devuelve un objeto de la clase mysqli_stmt que representa una declaración preparada. Si la preparación fue exitosa, puedes usar este objeto para ejecutar la declaración SQL con diferentes valores de parámetros.

    Si la preparación falla (por ejemplo, si la sintaxis de la declaración SQL es incorrecta), entonces prepare() devolverá FALSE. En este caso, puedes usar el método error del objeto de conexión para obtener más información sobre el error. Por ejemplo: $conn->error. */


    $sql_valid = "INSERT INTO `usuarios` ( `nombre`, `apellido`, `email`, `telefono`, `contrasena`, `ciudad`, `fecha_registro`) VALUES ('$nombre', '$apellido', '$email','$telefono', '$contrasena', '$ciudad', current_timestamp()) ";

    mysqli_query($conn,$sql_valid);
    // Verifica si la inserción fue exitosa
    if ($conn->affected_rows > 0) {
        echo "Registro exitoso. Gracias por registrarte.";
    } else {
        echo "Error en el registro. Por favor, intenta de nuevo.";
    }
} else {
    echo "Error en la preparación de la consulta SQL.";
} 

// Cierra la conexión a la base de datos
$conn->close();
?>
