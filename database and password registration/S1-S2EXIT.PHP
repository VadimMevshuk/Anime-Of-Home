<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід до кабінету</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.login-container h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.login-container label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

.login-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.login-container button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

.login-container button:hover {
    background-color: #45a049;
}

.message.error {
    color: red;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Вхід у кабінет</h2>
        
        <form action="" method="post" lang="uk" novalidate>
            <label for="email">Email</label>
            <div class="input-placeholder">Введіть ваш емейл</div>
            <input type="text" id="email" name="email" required>
            
            <label for="password">Пароль</label>
            <div class="input-placeholder">Введіть ваш пароль</div>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Увійти</button>
        </form>
        <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('C:\MAMP\htdocs\Anime Of Home\database and password registration\db.php');

    $conn = mysqli_connect("localhost", "root", "9876543210", "anime_of_home");

    if (!$conn) {
        die("Помилка з'єднання з базою даних: " . mysqli_connect_error());
    }

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Перевірка формату email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="message error">Введіть коректний email.</div>';
    } elseif (empty($password)) {
        echo '<div class="message error">Будь ласка, заповніть всі обов\'язкові поля форми.</div>';
    } else {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['email_id'] = $user['email_id'];
                header("Location: S1-S2EXIT.php");
                exit();
            } else {
                echo '<div class="message error">Невірний пароль.</div>';
            }
        } else {
            echo '<div class="message error">Користувача з таким email не знайдено.</div>';
        }
    }

    $stmt->close();
    mysqli_close($conn);
}
?>


    </div>
</body>
</html>
