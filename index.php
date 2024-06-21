<?php require_once 'users.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

</head>
<body>



<form id="userForm" action="users.php" method="POST">
    <input type="text" name="id" id="id" required>
    <button type="submit">Отправить</button>
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>