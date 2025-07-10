<?php
$host = 'localhost';       // Servidor
$db   = 'mimenuweb';            // Nombre de la base de datos
$user = 'miusuario';       // Usuario MySQL
$pass = 'micontraseña';    // Contraseña MySQL
$charset = 'utf8mb4';      // Codificación recomendada

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
