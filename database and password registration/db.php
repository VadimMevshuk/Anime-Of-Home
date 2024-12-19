<?php
// Файл db.php — підключення до бази даних

$servername = "localhost"; // Ваш сервер MySQL
$username = "root"; // Ваше ім'я користувача
$password = "9876543210"; // Ваш пароль
$dbname = "anime_of_home"; // Назва бази даних

// Створення з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("З'єднання не вдалось: " . $conn->connect_error);
}

// Виведення повідомлення про успішне з'єднання (можна видалити, коли все працює)
echo "З'єднання успішне!";
?>
