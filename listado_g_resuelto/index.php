<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Listado de Productos de Verdulería</title>
</head>

<body>
    <h1>Listado de Productos de Verdulería</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        <?php
        // Aquí debes completar el código PHP para conectar a la base de datos y recuperar los productos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "verduleria_db";

        $conn = new mysqli($servername, $username, $password, $database); /* Este código está creando una nueva conexión a una base de datos MySQL */

        // Verifica la conexión a la base de datos
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }

        $sql="SELECT * FROM `productos`";
        $result=mysqli_query($conn, $sql);
        // Luego, utiliza un bucle para recorrer los resultados y completar las filas de la tabla
        while($producto = mysqli_fetch_array($result)){
            echo"<tr>";
            echo"<th scope='row'>". $producto["id"] ."</th>";
            echo"<td>". $producto["nombre"] ."</td>";
            echo"<td>". $producto["precio"] ."</td>";
            echo"<td>". $producto["cantidad"] ."</td>";
            echo"</tr>";
        }
        // Cierra la conexión a la base de datos
        $conn->close();
        ?>
    </table>
</body>

</html>