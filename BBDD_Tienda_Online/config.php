<?php
define('USER', 'Admin');
define('PASSWORD', '12345');
define('HOST', 'localhost');
define('DATABASE', 'tienda_online');
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>