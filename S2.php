<?php
session_start();

if (isset($_POST['remove_from_cart'])) {
    $anime_name = $_POST['anime_name'];

    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['name'] === $anime_name) {
            unset($_SESSION['cart'][$key]);
            echo "<script>alert('Аніме видалено з кошика!');</script>";
            break;
        }
    }

    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script src="ct/script2.js"></script>
    <script src="ct/script3.js"></script>
    <script src="ct/script4.js"></script>
    <title>Cart with Cartoonish Style</title>
</head>

<body>

<div id="welcome-section" class="border p-6 mt-1 rounded-lg shadow-lg bg-white w-full max-w-3xl mx-auto flex flex-col justify-start relative mt-20">
    <h1 class="cartoon-font text-3xl font-bold text-center text-gray-800">
        Вітаємо у вашому профілі! Тут ви можете переглядати і редагувати свої особисті дані, керувати списками улюблених аніме та стежити за новими релізами. Ми раді, що ви з нами!
    </h1>
</div>
  


    <div class="panel hover-frame" style="background-image: url('Fons/fon35.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <img src="Fons\fon3.jpg" alt="Логотип" class="logo">

        <div class="flex flex-col space-y-4 mt-4">
            <div class="flex flex-col items-center w-full mt-4">
                <a href="http://localhost/Anime%20Of%20Home/S1.php" class="w-full">
                    <button onclick="scrollToSection()" class="bg-transparent border-2 border-black text-black font-semibold py-4 px-6 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl hover:shadow-blue-500 transition-shadow duration-300 w-full">
                        Головна
                    </button>
                </a>

                <a>
                    <button onclick="toggleCart()" class="w-full bg-transparent border-4 border-black text-black font-semibold py-6 px-8 rounded-lg shadow-lg hover:bg-black hover:text-white hover:shadow-xl hover:shadow-blue-500 transition-shadow duration-300 text-lg">
                        Кошик
                    </button>
                </a>

                <a href="#about-section" class="w-full">
                    <button class="bg-transparent border-2 border-black text-black font-semibold py-4 px-6 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl hover:shadow-blue-500 transition-shadow duration-300 w-full">
                        Про нас
                    </button>
                </a>
                <a href="#services-section" class="w-full">
                    <button class="bg-transparent border-2 border-black text-black font-semibold py-4 px-6 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl hover:shadow-blue-500 transition-shadow duration-300 w-full">
                        Послуги
                    </button>
                </a>
                <a href="#contact-section" class="w-full">
                    <button class="bg-transparent border-2 border-black text-black font-semibold py-4 px-6 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl hover:shadow-blue-500 transition-shadow duration-300 w-full">
                        Контакти
                    </button>
                </a>
            </div>

            <div class="icon-container mt-4 space-x-2">
                <a href="https://discord.com" target="_blank" class="flex items-center justify-center">
                    <img src="Fons/discord.png" alt="Discord" class="icon-size">
                </a>
                <a href="https://google.com" target="_blank" class="flex items-center justify-center">
                    <img src="Fons/google.png" alt="Google" class="icon-size">
                </a>
            </div>

     
          
        </div>
    </div>

    <div id="cartPanel" class="cart-panel">
        <div class="p-4">
            <h1 class="fire-text">Anime кошик</h1>
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <div class="anime-item fire-border">
                        <h2 class="text"><?php echo $item['name']; ?></h2>
                        <p>Рейтинг: <?php echo $item['rating']; ?>/10</p>
                        <p><?php echo $item['description']; ?></p>
                        <form method="POST" action="">
                            <input type="hidden" name="anime_name" value="<?php echo $item['name']; ?>">
                            <button type="submit" name="remove_from_cart">❌ Видалити</button>
                            <button class="watch-button">🎬 Дивитись</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="empty-cart">Ваш кошик порожній.</p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>




