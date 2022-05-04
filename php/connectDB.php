<?php
    define("USER", 'root');
    define("PASSWORD", '');
    define("HOST", 'localhost');
    define("DATABASE", 'dart_service');

    try {
        $connection = new PDO("mysql:host=" . HOST . "; dbname=" . DATABASE, USER, PASSWORD);
        return $connection;
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>
