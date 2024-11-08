<?php

header('Content-Type: application/json');
$dsn = 'mysql:host=localhost;dbname=sistema_facturacion;charset=utf8';
$username = 'root';
$password = '';


// header('Content-Type: application/json');

// $dsn = 'mysql:host=srv1622.hstgr.io;dbname=u283539135_factura;charset=utf8';
// $username = 'u283539135_julian';
// $password = 'Mani2024@';

// try {
//     $pdo = new PDO($dsn, $username, $password, [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_EMULATE_PREPARES => false,
//     ]);
//     echo json_encode(["success" => true, "message" => "Conexión exitosa"]);
// } catch (PDOException $e) {
//     echo json_encode(["success" => false, "message" => "Error de conexión: " . $e->getMessage()]);
// }
// 
?>


