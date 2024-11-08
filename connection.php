<?php

// header('Content-Type: application/json');
// $dsn = 'mysql:host=localhost;dbname=;charset=utf8';
// $username = 'root';
// $password = '';
// Permitir solicitudes desde cualquier origen
header("Access-Control-Allow-Origin: *");

// Permitir métodos HTTP específicos
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Permitir ciertos encabezados
header("Access-Control-Allow-Headers: Content-Type, Authorization");


header('Content-Type: application/json');



$dsn = 'mysql:host=127.0.0.1:3306;dbname=u558706424_sistema_fact;charset=utf8';
$username = 'u558706424_factura';
$password = 'Mani2024@';

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    //echo json_encode(["success" => true, "message" => "Conexión exitosa"]);
    //echo "Conexión exitosa";

} catch (PDOException $e) {
    //echo json_encode(["success" => false, "message" => "Error de conexión: " . $e->getMessage()]);
    //echo "Error de conexión: " . $e->getMessage();
}
