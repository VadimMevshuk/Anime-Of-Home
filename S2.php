<?php
session_start();

if (isset($_POST['remove_from_cart'])) {
    $anime_name = $_POST['anime_name'];

    // Видаляємо елемент з кошика
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
<?php
session_start();

if (isset($_POST['remove_from_cart'])) {
    $anime_name = $_POST['anime_name'];

    // Видаляємо елемент з кошика
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
    <title>Cart with Cartoonish Style</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: #f4f4f9;
        }

        .cart-icon {
            position: fixed;
            top: 85px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background-image: url('');
            background-size: cover;
            background-position: center;
            cursor: pointer;
            z-index: 1100;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .cart-icon:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .cart-panel {
            position: fixed;
            top: 0;
            right: -400px; /* Панель прихована */
            height: 100%;
            width: 300px;
            background: linear-gradient(45deg, #ff5733, #ffbc33);
            background-size: 400% 400%;
            animation: gradientShift 5s ease infinite;
            box-shadow: 0 0 15px rgba(255, 87, 51, 0.8);
            transition: right 0.3s ease-in-out;
            overflow-y: auto;
            z-index: 1000;
            padding: 20px;
            border-radius: 10px;
        }

        .cart-panel.open {
            right: 0; /* Панель відкривається */
            box-shadow: 0 0 30px rgba(255, 87, 51, 0.8);
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .anime-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .anime-item:hover {
            transform: scale(1.05);
        }

        .anime-item h2 {
            color: black;
            font-family: 'Permanent Marker', 'Comic Sans MS', sans-serif;
            font-weight: bold;
            text-shadow: none;
        }

        .anime-item p {
            margin: 5px 0;
            font-size: 17px;
        }

        .anime-item button {
            background-color: #ff6666;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .anime-item button:hover {
            background-color: #ff3333;
        }

        .empty-cart {
            text-align: center;
            font-size: 16px;
            color: #888;
        }

        .fire-border {
            padding: 15px;
            border: 2px solid transparent;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, #ff5733, #ffbc33);
            background-clip: padding-box;
            transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .fire-border:hover {
            transform: scale(1.05);
            background: linear-gradient(45deg, #ffbc33, #ff5733);
            box-shadow: 0 0 15px rgba(255, 87, 51, 0.8);
        }

        h1.text {
            color: #333;
            font-weight: 900;
            font-family: 'Permanent Marker', 'Comic Sans MS', sans-serif;
            font-size: 28px;
        }
        .watch-button {
   
    color: white !important;
    border: none !important;
    padding: 10px 15px !important;
    border-radius: 5px !important;
    cursor: pointer !important;
    font-size: 14px !important;
    margin-top: 10px !important;
    transition: background-color 0.3s ease !important;
    display: inline-block !important;
    text-align: center !important;
}

.watch-button:hover {
    background-color: #28a745 !important; /* Зелений колір при наведенні */
}






    
        .text {
            font-size: 20px;
            line-height: 1.6;
            font-weight: normal;
            font-family: 'Arial', sans-serif;
            font-style: normal;
            text-rendering: optimizeSpeed;
            letter-spacing: 1px;
        }


      /* Стилі для бічної панелі */
.sidebar {
  position: fixed;
  left: -240px; /* Схована за межами екрана */
  top: 0;
  height: 100%;
  width: 240px; /* Ширина панелі */
  background-color: white;
  z-index: 10;
  padding: 20px;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease; /* Анімація плавного руху */
}

/* Анімація при наведенні */
.sidebar:hover {
  transform: translateX(240px); /* Висування панелі */
}

/* Стилі для посилань */
.sidebar h2 {
  margin-bottom: 20px;
  font-size: 1.5rem;
  color: #333;
}

.sidebar a {
  display: block;
  color: #555;
  text-decoration: none;
  margin-bottom: 10px;
  font-size: 1.2rem;
  transition: color 0.2s ease; /* Плавна зміна кольору при наведенні */
}

.sidebar a:hover {
  color: #ff5733; /* Зміна кольору при наведенні */
}

/* Основний контент */
.content {
  margin-left: 20px;
  padding: 20px;
  font-family: Arial, sans-serif;
}

        
    </style>
</head>
<body>

<div class="sidebar hover-frame">
    <h2>Меню</h2>
    <a href="#home">Головна</a>
    <a href="#about">Про нас</a>
    <a href="#services">Послуги</a>
    <a href="#contact">Контакти</a>
</div>


  <div class="cart-icon" onclick="toggleCart()"></div>
    <div id="cartPanel" class="cart-panel">
        <div class="p-4">
            <h1 class="text font-bold mb-4">Ваш Anime кошик</h1>
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <div class="anime-item fire-border">
                        <h2 class="text"><?php echo $item['name']; ?></h2>
                        <p>Рейтинг: <?php echo $item['rating']; ?>/10</p>
                        <p><?php echo $item['description']; ?></p>
                        <form method="POST" action="">
                            <input type="hidden" name="anime_name" value="<?php echo $item['name']; ?>">
                            <button type="submit" name="remove_from_cart">❌ Видалити </button>
                            <button class="watch-button">🎬 Дивитись</button>

                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="empty-cart">Ваш кошик порожній.</p>
            <?php endif; ?>
        </div>
    </div>
    </div>

    <script>
        function toggleCart() {
            const cartPanel = document.getElementById('cartPanel');
            cartPanel.classList.toggle('open');
        }
    </script>
</body>
</html>
