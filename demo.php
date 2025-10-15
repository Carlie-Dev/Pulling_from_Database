<?php

    $DB_HOST = 'localhost:8888';
    $DB_NAME = 'introtodb';
    $DB_USER = 'root';
    $DB_PASS = '';

    //Data Source Name
    $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;";

    try{
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS);
        echo("Connected successfully!");
    } catch (PDOException $e){
        echo ("Connection failed: " . $e->getMessage());
    }
?>