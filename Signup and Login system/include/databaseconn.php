<?php
try {
    $dsn = 'mysql:host=localhost;dbname=signup'; 
    $usernamee = 'root'; 
    $password = ''; 
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $pdo = new PDO($dsn, $usernamee, $password, $options);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
