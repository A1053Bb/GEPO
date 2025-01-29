<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'gepo');
define('DB_USER', 'root');
define('DB_PASS', '');

function connect() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>
