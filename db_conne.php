<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Параметри підключення до бази даних
$servername = "localhost";
$username = "root";
$password = "9876543210"; // Введи правильний пароль
$dbname = "anime_of_home"; // Назва твоєї бази даних

// Створення з'єднання з базою даних
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка на помилку підключення
if ($conn->connect_error) {
    die("З'єднання не вдалося: " . $conn->connect_error);
}
?>
