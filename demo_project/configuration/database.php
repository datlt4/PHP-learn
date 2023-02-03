<?php
define("DATABASE_SERVER", "localhost");
define("DATABASE_USER", "datlt4");
define("DATABASE_PASSWORD", "6262");
define("DATABASE_NAME", "laravel_db");

$connection = NULL;
try {
    $connection = new PDO("mysql:host=" . DATABASE_SERVER . ";dbname=" . DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo $e->getMessage();
    $connection = NULL;
}
