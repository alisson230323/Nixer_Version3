<?php

// Datos de conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$bd = "prueba";


// Conexión a la base de datos
$conexion = mysqli_connect($host, $user, $password, $bd);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO registronixer  VALUES ('$nombre', '$apellidos', '$telefono', '$correo', '$contrasena')";

if (mysqli_query($conexion, $sql)) {
    echo 'Registro exitoso';
} else {
    echo 'Error al registrar: ' . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);






/*
// Establecer la conexión a la base de datos
require_once 'CONEXION.php';

// Obtener los valores enviados desde el formulario

$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


// Consulta de ejemplo
$sql = "INSERT INTO nombre_de_la_tabla (nombre, apellidos, telefono, correo, contrasena) 
        VALUES ('$nombre', '$apellido', '$telefono', '$correo', '$contrasena')";

*/

?>
