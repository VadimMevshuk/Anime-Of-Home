<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .message.success {
            background-color: #d4edda;
            color: #155724;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Реєстрація</h2>
        
        <form action="" method="post" lang="uk" novalidate>
            <label for="first_name">Ім'я</label>
            <input type="text" id="first_name" name="first_name" placeholder="Введіть ваше ім'я" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Введіть ваш емейл" required>
            
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="Введіть ваш пароль" required>
          
            <button type="submit">Зареєструватися</button>
        </form>
        
        <?php
        // Підключення до бази даних
        require_once('C:\MAMP\htdocs\Anime Of Home\database and password registration\db.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $conn = mysqli_connect("localhost", "root", "9876543210", "anime_of_home");

            if (!$conn) {
                die('<div class="message error">Помилка з\'єднання з базою даних: ' . mysqli_connect_error() . '</div>');
            }

            $first_name = trim($_POST["first_name"]);
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);
            
            if (empty($first_name) || empty($email) || empty($password)) {
                echo '<div class="message error">Будь ласка, заповніть всі обов\'язкові поля форми.</div>';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo '<div class="message error">Введіть коректний емейл.</div>';
            } else {
                // Хешування пароля для безпеки
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                
                // Перевірка, чи емейл вже існує
                $check_email_sql = "SELECT email FROM users WHERE email = ?";
                $stmt = $conn->prepare($check_email_sql);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();
                
                if ($stmt->num_rows > 0) {
                    echo '<div class="message error">Користувач з таким емейлом вже існує.</div>';
                } else {
                    // Вставка даних у таблицю users
                    $sql = "INSERT INTO users (first_name, email, password) VALUES (?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("sss", $first_name, $email, $hashed_password);
                    
                    if ($stmt->execute()) {
                        echo '<div class="message success">Ви успішно зареєстровані!</div>';
                    } else {
                        echo '<div class="message error">Помилка при реєстрації: ' . $conn->error . '</div>';
                    }
                }
                $stmt->close();
            }
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>
