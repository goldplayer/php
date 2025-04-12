<?php
    require_once "db.php";

    $get_users = "SELECT * FROM users";
    $stmt = $pdo->query($get_users);

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

//    print_r($users);