<?php
// config.php - conexión PDO para Alwaysdata
$DB_HOST = 'mysql-vikingstaff03.alwaysdata.net';
$DB_NAME = 'vikingstaff03_db';
$DB_USER = '432009';
$DB_PASS = '44m9j%L9w3';
$DB_CHARSET = 'utf8mb4';

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=$DB_CHARSET";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
} catch (PDOException $e) {
    // En producción no muestres errores completos
    exit('DB connection failed: ' . $e->getMessage());
}
