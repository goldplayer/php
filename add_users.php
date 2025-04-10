<?php
header('Content-Type: application/json'); // Ответ в формате JSON

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fio = trim($_POST['fio'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');

    // Валидация
    if (empty($fio) || empty($username) || empty($email)) {
        echo json_encode(['success' => false, 'message' => '❌ Все поля обязательны!']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => '❌ Некорректный email!']);
        exit;
    }

    try {
        // SQL-запрос с новым полем
        $stmt = $pdo->prepare("INSERT INTO users (fio, username, email) VALUES (:fio, :name, :email)");
        $stmt->execute([
            ':fio' => $fio,
            ':name' => $username,
            ':email' => $email
        ]);

        echo json_encode(['success' => true, 'message' => '✅ Пользователь успешно добавлен']);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Ошибка: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Неверный метод запроса']);
}
?>