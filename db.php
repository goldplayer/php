<?php


    $host = 'localhost';
    $database = 'test_sql_database';
    $user = 'root';
    $password = '';


    try{
        $pdo = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $user, $password);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch (PDOException $e){
        echo "Error -> " . $e->getMessage();
    }


?>