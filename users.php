<?php

require_once 'Database.php';

function get_all_users(){

    $con = Database::getInstance()->getConnection();

    $select_users = "SELECT * FROM `users`";
    $select_users_query = $con->query($select_users);

    if ($select_users_query === false) {
        die("Ошибка выполнения запроса: " . $con->error);
    }

// Использование fetch_all для получения всех строк в виде массива
    $users = $select_users_query->fetch_all(MYSQLI_ASSOC);

    if (!empty($users)) {
        foreach ($users as $user) {
            echo "id: " . $user["id"]. " - Name: " . $user["name"]. " - Email: " . $user["email"]. "<br>";
        }
    } else {
        echo "0 результатов";
    }

// Закрываем соединение
    $con->close();

//    echo 'teset';
}



function get_all_users_for_id($id){
    $con = Database::getInstance()->getConnection();

    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $select_users_for_id = "SELECT * FROM `users` WHERE `id` = {$id}";
        $res_q = $con->query($select_users_for_id);
        $get_users = $res_q->fetchAll(MYSQLI_ASSOC);


        var_dump($get_users);
    }

    if (!is_numeric($id)) {
        die("Некорректный ID пользователя");
    }



}

?>