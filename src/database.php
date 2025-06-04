<?php

$host = 'localhost';
$db   = 'crud_app';
$user = 'root';
$pass = 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Database connection established successfully.";
    // In a real application, you would return $pdo or make it available globally.
    // For example:
    // return $pdo;
    // global $pdo;
} catch (\PDOException $e) {
    // Log the error or display a user-friendly message
    error_log("Database connection error: " . $e->getMessage());
    echo "Database connection failed. Please check the logs for details.";
    // In a real application, you might throw the exception or handle it differently.
    // For example:
    // throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>
