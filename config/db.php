<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_system";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Si hay un error de conexión, puedes manejarlo aquí
    // Por ejemplo, puedes mostrar un mensaje de error o registrar el error en un archivo de registro
    echo "Error de conexión: " . $e->getMessage();
    // Detener la ejecución del script
    die();
}
?>
