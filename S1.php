<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <script src="ct/script.js"></script>
    <title>Anime Of Home</title>
</head>
<body class="bg-gray-100">
    
<div id="welcome-section" class="border p-6 mt-5 rounded-lg shadow-lg bg-white w-full max-w-3xl mx-auto flex justify-center" style="margin-top: 20px;">
    <h1 class="cartoon-font text-3xl font-bold text-center text-gray-800">
        Вітаю вас на сайті Anime Of Home. Ми раді, що ти з нами і ми впевнені, що ти знайдеш тут своє улюблене аніме.
    </h1>
</div>


<div class="auth-buttons-container mt-10 flex justify-end gap-6">
    <a href="http://localhost/Anime%20Of%20Home/database%20and%20password%20registration/S1-S2REGISTERING.PHP" class="auth-button fire-button">
        Реєстрація
    </a>
    <a href="http://localhost/Anime%20Of%20Home/database%20and%20password%20registration/S1-S2EXIT.PHP" class="auth-button fire-button">
        Вхід
    </a>
</div>



    <div class="sidebar hover-frame p-10 shadow-lg rounded-lg mt-30 bg-cover bg-center" style="background-image: url('Fons/fon34.jpg');">
    <div class="flex items-center justify-center mb-4">
        <img src="Fons\fon3.jpg" alt="Logo" class="h-32 w-32 rounded-full">
    </div>

    <div class="flex flex-col items-center w-full space-y-4"> 
        <a href="#welcome-section" class="w-full">
            <button onclick="scrollToSection()" class="bg-transparent border-2 border-black text-black font-semibold py-2 px-3 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl transition-shadow duration-300 animate-glow underline w-full">
                Головна
            </button>
        </a>

        <a href="http://localhost/Anime%20Of%20Home/S2.php" class="w-full">
            <button onclick="scrollToSection()" class="bg-transparent border-2 border-black text-black font-semibold py-2 px-3 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl transition-shadow duration-300 animate-glow underline w-full">
                Профіль
            </button>
        </a>

        <a href="#" class="w-full">
            <button class="bg-transparent border-2 border-black text-black font-semibold py-2 px-3 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl transition-shadow duration-300 animate-glow underline w-full">
                Пошук
            </button>
        </a>

        <a href="#anime-section" class="w-full">
            <button class="bg-transparent border-2 border-black text-black font-semibold py-2 px-3 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl transition-shadow duration-300 animate-glow underline w-full">
                Аніме
            </button>
        </a>

        <a href="#new-arrivals" class="w-full">
            <button class="bg-transparent border-2 border-black text-black font-semibold py-2 px-3 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl transition-shadow duration-300 animate-glow underline w-full">
                Новинки
            </button>
        </a>

        <a href="#about-us" class="w-full">
            <button class="bg-transparent border-2 border-black text-black font-semibold py-2 px-3 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl transition-shadow duration-300 animate-glow underline w-full">
                Про нас
            </button>
        </a>

      

        <a href="#" class="w-full"> 
            <button class="bg-transparent border-2 border-black text-black font-semibold py-2 px-3 rounded shadow-lg hover:bg-black hover:text-white hover:shadow-xl transition-shadow duration-300 animate-glow underline w-full">
                Допомога
            </button>
        </a>
    </div>

    <div class="flex justify-center mt-4 space-x-2 "> 
        <a href="https://discord.com" target="_blank" class="flex items-center justify-center">
            <img src="Fons\discord.png" alt="Discord" class="icon-size"> 
        </a>
        <a href="https://google.com" target="_blank" class="flex items-center justify-center">
            <img src="Fons\google.png" alt="Google" class="icon-size">
        </a>
    </div>
</div>

    
    <div class="flex justify-center space-x-5 mt-10">
    <div class="fire-border p-5 rounded-lg shadow-lg bg-white w-full max-w-xs">
            <h2 class="text-center text-gray-800 font-bold text-xl cartoon-font">Правила сайту</h2>
            <p class="text-center text-gray-700 text-lg cartoon-font">👾 Ласкаво просимо до світу аніме! 🌟 Тут ви знайдете всі найкращі серії та фільми. Не забувайте дотримуватися правил спільноти: поважайте один одного і не публікуйте спойлери! 🎬</p>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Переглянути</a>
            </div>
        </div>
        <div class="fire-border p-5 rounded-lg shadow-lg bg-white w-full max-w-xs">
            <h2 class="text-center text-gray-800 font-bold text-xl cartoon-font">Інформація про сайт</h2>
            <p class="text-center text-gray-700 text-lg cartoon-font">✨Наш сайт - це ваша портативна бібліотека аніме! 🏆 Знайдіть свої улюблені серії, обмінюйтеся думками з іншими фанатами та відкривайте нові шедеври!Ми раді, що ти знами булоб чудово бачити тебе знову. 💖</p>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Переглянути</a>
            </div>
        </div>
        
        <div class="fire-border p-5 rounded-lg shadow-lg bg-white w-full max-w-xs">
            <h2 class="text-center text-gray-800 font-bold text-xl cartoon-font">Чарівний світ аніме</h2>
            <p class="text-center text-gray-700 text-lg cartoon-font">
                🌈 Приготуйтеся до пригод у чарівному світі аніме! 🚀 Від романтичних комедій до епічних фентезі – тут є все для кожного! Давайте разом відправимося у незабутню подорож. Чекаємо вас! 🌟
            </p>
            
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Переглянути</a>
            </div>
        </div>
    </div>
    
    <div class="flex justify-center space-x-5 mt-10">
        <div class="fire-border p-5 rounded-lg shadow-lg bg-white w-full max-w-xs">
            <h2 class="text-center text-gray-800 font-bold text-xl cartoon-font">Ставте відгуки!</h2>
            <p class="text-center text-gray-700 text-lg cartoon-font">
                📝 Ваші враження важливі для нас! Діліться думками про серії та фільми, щоб допомогти іншим знайти щось цікаве. Друзі – це чудово, знайдіть свого друга на нашому сайті! 💬
            </p>
            
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Переглянути</a>
            </div>
        </div>
        <div class="fire-border p-5 rounded-lg shadow-lg bg-white w-full max-w-xs">
            <h2 class="text-center text-gray-800 font-bold text-xl cartoon-font">Долучайтеся до спільноти!</h2>
            <p class="text-center text-gray-700 text-lg cartoon-font">🤝 Обмінюйтесь думками та рекомендаціями з іншими шанувальниками! Разом ми зробимо цей світ аніме ще яскравішим!Проводьте час добре!🌟</p>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Переглянути</a>
            </div>
        </div>
        <div class="fire-border p-5 rounded-lg shadow-lg bg-white w-full max-w-xs">
            <h2 class="text-center text-gray-800 font-bold text-xl cartoon-font">Проводьте час з улюбленим аніме!</h2>
            <p class="text-center text-gray-700 text-lg cartoon-font">🎥 Знайдіть час для перегляду своїх улюблених серій! Відкривайте нові горизонти разом з аніме та насолоджуйтесь кожним моментом! Світ Anime Of Home.🌟</p>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Переглянути</a>
            </div>
        </div>
    </div>

          
          <div id="anime-section" class="border p-4 mt-10 rounded-lg shadow-lg bg-white w-full max-w-3xl mx-auto flex justify-center">
            <h1 class="cartoon-font text-3xl font-bold text-center text-gray-800">Аніме для улюблених глядачів.</h1>
        </div>
        
        <div class="content"> 
                <p class="text-gray-700 cartoon-text">Тут ви можете переглядати свої улюблені аніме.</p>
        </div>
    
    <?php
session_start();

$message_naruto = ''; 
$message_titans = ''; 
$message_onepiece = ''; 
$message_heroacademia = ''; 
$message_demonslayer = ''; 
$message_berserk = ''; 
$message_swordartonline = ''; 
$message_deathnote = ''; 
$message_tokyoghoul = ''; 
$message_blackclover = '';
$message_goblinslayer = ''; 
$message_hellsing = ''; 

if (isset($_POST['add_to_cart'])) {
    $anime = [
        'name' => $_POST['anime_name'],
        'rating' => $_POST['rating'],
        'description' => $_POST['description']
    ];

    // Якщо кошик ще не існує, створюємо порожній масив
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $exists = false;
    // Перевіряємо, чи є аніме вже в кошику
    foreach ($_SESSION['cart'] as $item) {
        if ($item['name'] === $anime['name']) {
            $exists = true;
            break;
        }
    }

    // Якщо аніме немає в кошику, додаємо його
    if (!$exists) {
        $_SESSION['cart'][] = $anime;

        // Встановлюємо відповідне повідомлення для кожного аніме
        switch ($anime['name']) {
            case 'Наруто':
                $message_naruto = "Аніме 'Наруто' додано до кошика!";
                break;
            case 'Атака Титанів':
                $message_titans = "Аніме 'Атака Титанів' додано до кошика!";
                break;
            case 'One Piece':
                $message_onepiece = "Аніме 'One Piece' додано до кошика!";
                break;
            case 'Моя Академія Героїв':
                $message_heroacademia = "Аніме 'Моя Академія Героїв' додано до кошика!";
                break;
            case 'Меч Демо':
                $message_demonslayer = "Аніме 'Меч Демо' додано до кошика!";
                break;
            case 'Берсерк':
                $message_berserk = "Аніме 'Берсерк' додано до кошика!";
                break;
            case 'Меч мистецтв онлайн':
                $message_swordartonline = "Аніме 'Меч мистецтв онлайн' додано до кошика!";
                break;
            case 'Записка смерті':
                $message_deathnote = "Аніме 'Записка смерті' додано до кошика!";
                break;
            case 'Чорний Клевер':
                $message_blackclover = "Аніме 'Чорний Клевер' додано до кошика!";
                break;
            case 'Вбивця Гоблінів':
                $message_goblinslayer = "Аніме 'Вбивця Гоблінів' додано до кошика!";
                break;
            case 'Хеллсінг':
                $message_hellsing = "Аніме 'Хеллсінг' додано до кошика!";
                break;
            case 'Токійський гуль':
                $message_tokyoghoul = "Аніме 'Токійський гуль' додано до кошика!"; // Повідомлення для Токійського гуль
                break;
        }
    } else {
        // Якщо аніме вже є в кошику, показуємо повідомлення
        switch ($anime['name']) {
            case 'Наруто':
                $message_naruto = "Це аніме вже є в кошику.";
                break;
            case 'Атака Титанів':
                $message_titans = "Це аніме вже є в кошику.";
                break;
            case 'One Piece':
                $message_onepiece = "Це аніме вже є в кошику.";
                break;
            case 'Моя Академія Героїв':
                $message_heroacademia = "Це аніме вже є в кошику.";
                break;
            case 'Меч Демо':
                $message_demonslayer = "Це аніме вже є в кошику.";
                break;
            case 'Берсерк':
                $message_berserk = "Це аніме вже є в кошику.";
                break;
            case 'Меч мистецтв онлайн':
                $message_swordartonline = "Це аніме вже є в кошику.";
                break;
            case 'Записка смерті':
                $message_deathnote = "Це аніме вже є в кошику.";
                break;
            case 'Чорний Клевер':
                $message_blackclover = "Це аніме вже є в кошику.";
                break;
            case 'Вбивця Гоблінів':
                $message_goblinslayer = "Це аніме вже є в кошику.";
                break;
            case 'Хеллсінг':
                $message_hellsing = "Це аніме вже є в кошику.";
                break;
            case 'Токійський гуль':
                $message_tokyoghoul = "Це аніме вже є в кошику."; // Повідомлення для Токійського гуль
                break;
        }
    }
}
?>
        <!-- КНОПКИ-РАМКИ -->

        <div class="container">
            <!-- Рамка для Наруто -->
            <div class="fire-border">
                <img src="Fons/fon1.jpg" alt="Наруто">
                <h2 class="text-center text-gray-800 font-bold text-xl">Наруто</h2>
                <p class="text-center text-gray-700 text-lg">Рейтинг: 9.2/10</p>
                <p class="text-center text-gray-700 text-lg">Наруто — чудове аніме про шлях молодого ніндзя!</p>
                <div class="flex justify-center mt-2">
                    <form method="POST" action="s1.php">
                        <input type="hidden" name="anime_name" value="Наруто">
                        <input type="hidden" name="rating" value="9.2">
                        <input type="hidden" name="description" value="Наруто — чудове аніме про шлях молодого ніндзя!">
                        <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
                    </form>
                </div>
                <!-- Блок для відображення повідомлення Наруто -->
                <?php if (!empty($message_naruto)): ?>
                    <p class="text-center text-white mt-2"><?= htmlspecialchars($message_naruto); ?></p>
                <?php endif; ?>
                
                <div class="flex justify-center mt-5">
                    <a href="" class="watch-button">Дивитись зараз</a>
                </div>
            </div>

            <!-- Рамка для Атака Титанів -->
            <div class="fire-border">
                <img src="Fons/fon2.jpg" alt="Атака Титанів">
                <h2 class="text-center text-gray-800 font-bold text-xl">Атака Титанів</h2>
                <p class="text-center text-gray-700 text-lg">Рейтинг: 9.0/10</p>
                <p class="text-center text-gray-700 text-lg">Атака Титанів — епічна історія про боротьбу з гігантами!</p>
                <div class="flex justify-center mt-2">
                    <form method="POST" action="s1.php">
                        <input type="hidden" name="anime_name" value="Атака Титанів">
                        <input type="hidden" name="rating" value="9.0">
                        <input type="hidden" name="description" value="Атака Титанів — епічна історія про боротьбу з гігантами!">
                        <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
                    </form>
                </div>
                <!-- Блок для відображення повідомлення Атака Титанів -->
                <?php if (!empty($message_titans)): ?>
                    <p class="text-center text-white mt-2"><?= htmlspecialchars($message_titans); ?></p>
                <?php endif; ?>
                
                <div class="flex justify-center mt-5">
                    <a href="#" class="watch-button">Дивитись зараз</a>
                </div>
            </div>

            <!-- Рамка для One Piece -->
            <div class="fire-border">
                <img src="Fons/fon4.jpg" alt="One Piece">
                <h2 class="text-center text-gray-800 font-bold text-xl">One Piece</h2>
                <p class="text-center text-gray-700 text-lg">Рейтинг: 8.6/10</p>
                <p class="text-center text-gray-700 text-lg">One Piece — пригоди піратів у пошуках скарбів!</p>
                <div class="flex justify-center mt-2">
                    <form method="POST" action="s1.php">
                        <input type="hidden" name="anime_name" value="One Piece">
                        <input type="hidden" name="rating" value="8.6">
                        <input type="hidden" name="description" value="One Piece — пригоди піратів у пошуках скарбів!">
                        <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
                    </form>
                </div>
                <!-- Блок для відображення повідомлення One Piece -->
                <?php if (!empty($message_onepiece)): ?>
                    <p class="text-center text-white mt-2"><?= htmlspecialchars($message_onepiece); ?></p>
                <?php endif; ?>
                
                <div class="flex justify-center mt-5">
                    <a href="#" class="watch-button">Дивитись зараз</a>
                </div>
            </div>

            <!-- Рамка для Моя Академія Героїв -->
            <div class="fire-border">
                <img src="Fons/fon5.jpg" alt="Моя Академія Героїв">
                <h2 class="text-center text-gray-800 font-bold text-xl">Моя Академія Героїв</h2>
                <p class="text-center text-gray-700 text-lg">Рейтинг: 8.5/10</p>
                <p class="text-center text-gray-700 text-lg">Моя Академія Героїв — навчання супергероїв у світі безпекових загроз!</p>
                <div class="flex justify-center mt-2">
                    <form method="POST" action="s1.php">
                        <input type="hidden" name="anime_name" value="Моя Академія Героїв">
                        <input type="hidden" name="rating" value="8.5">
                        <input type="hidden" name="description" value="Моя Академія Героїв — навчання супергероїв у світі безпекових загроз!">
                        <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
                    </form>
                </div>
                <!-- Блок для відображення повідомлення Моя Академія Героїв -->
                <?php if (!empty($message_heroacademia)): ?>
                    <p class="text-center text-white mt-2"><?= htmlspecialchars($message_heroacademia); ?></p>
                <?php endif; ?>
                
                <div class="flex justify-center mt-5">
                    <a href="#" class="watch-button">Дивитись зараз</a>
                </div>
            </div>

            <!-- Рамка для Меч Демо -->
            <div class="fire-border">
                <img src="Fons/fon6.jpg" alt="Меч винищуючий демонів">
                <h2 class="text-center text-gray-800 font-bold text-xl">Меч винищуючий демонів</h2>
                <p class="text-center text-gray-700 text-lg">Рейтинг: 9.3/10</p>
                <p class="text-center text-gray-700 text-lg">Меч винищуючий демонів — відважна боротьба зі злими силами!</p>
                <div class="flex justify-center mt-2">
                    <form method="POST" action="s1.php">
                        <input type="hidden" name="anime_name" value="Меч винищуючий демонів">
                        <input type="hidden" name="rating" value="9.3">
                        <input type="hidden" name="description" value="Меч винищуючий демонів — відважна боротьба зі злими силами!">
                        <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
                    </form>
                </div>
                <!-- Блок для відображення повідомлення Меч Демо -->
                <?php if (!empty($message_demonslayer)): ?>
                    <p class="text-center text-white mt-2"><?= htmlspecialchars($message_demonslayer); ?></p>
                <?php endif; ?>
                
                <div class="flex justify-center mt-5">
                    <a href="#" class="watch-button">Дивитись зараз</a>
                </div>
            </div>
                

        <div class="fire-border">
            <img src="Fons/fon7.jpg" alt="Берсерк">
            <h2 class="text-center text-gray-800 font-bold text-xl">Берсерк</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: 8.8/10</p>
            <p class="text-center text-gray-700 text-lg">Берсерк — епічна історія про боротьбу Гатса з демонами та своїм минулим!</p>
            <form method="post">
                <input type="hidden" name="anime_name" value="Берсерк">
                <input type="hidden" name="rating" value="8.8/10">
                <input type="hidden" name="description" value="Берсерк — епічна історія про боротьбу Гатса з демонами та своїм минулим!">
                <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
            </form>
            <?php if (!empty($message_berserk)): ?>
            <p class="text-center text-white mt-2"><?= htmlspecialchars($message_berserk); ?></p>
        <?php endif; ?>

            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Дивитись зараз</a>
            </div>
        </div>

        <div class="fire-border">
            <img src="Fons/fon8.jpg" alt="Меч мистецтв онлайн">
            <h2 class="text-center text-gray-800 font-bold text-xl">Меч мистецтв онлайн</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: 8.2/10</p>
            <p class="text-center text-gray-700 text-lg">Меч мистецтв онлайн — про гравців у небезпечній віртуальній реальності!</p>
            <form method="post">
                <input type="hidden" name="anime_name" value="Меч мистецтв онлайн">
                <input type="hidden" name="rating" value="8.2/10">
                <input type="hidden" name="description" value="Меч мистецтв онлайн — про гравців у небезпечній віртуальній реальності!">
                <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
            </form>
            <?php if (!empty($message_swordartonline)): ?>
                <p class="text-center text-white mt-2"><?= htmlspecialchars($message_swordartonline); ?></p>
            <?php endif; ?>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Дивитись зараз</a>
            </div>
        </div>


        <div class="fire-border">
            <img src="Fons/fon9.jpg" alt="Записка смерті">
            <h2 class="text-center text-gray-800 font-bold text-xl">Записка смерті</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: 9.0/10</p>
            <p class="text-center text-gray-700 text-lg">Записка смерті — захоплююча історія про вбивцю та розумний детектив.</p>
            <form method="post">
                <input type="hidden" name="anime_name" value="Записка смерті">
                <input type="hidden" name="rating" value="9.0/10">
                <input type="hidden" name="description" value="Записка смерті — захоплююча історія про вбивцю та розумний детектив.">
                <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
            </form>
            <?php if (!empty($message_deathnote)): ?>
                <p class="text-center text-white mt-2"><?= htmlspecialchars($message_deathnote); ?></p>
            <?php endif; ?>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Дивитись зараз</a>
            </div>
        </div>





        <div class="fire-border">
            <img src="Fons/fon11.jpg" alt="Чорний Клевер">
            <h2 class="text-center text-gray-800 font-bold text-xl">Чорний Клевер</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: 8.5/10</p>
            <p class="text-center text-gray-700 text-lg">Чорний Клевер — про хлопця, який прагне стати найсильнішим магом!</p>
            <form method="post">
                <input type="hidden" name="anime_name" value="Чорний Клевер">
                <input type="hidden" name="rating" value="8.5/10">
                <input type="hidden" name="description" value="Чорний Клевер — про хлопця, який прагне стати найсильнішим магом!">
                <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
            </form>
            <?php if (!empty($message_blackclover)): ?>
                <p class="text-center text-white mt-2"><?= htmlspecialchars($message_blackclover); ?></p>
            <?php endif; ?>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Дивитись зараз</a>
            </div>
        </div>

        <div class="fire-border">
            <img src="Fons/fon12.jpg" alt="Вбивця Гоблінів">
            <h2 class="text-center text-gray-800 font-bold text-xl">Вбивця Гоблінів</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: 7.8/10</p>
            <p class="text-center text-gray-700 text-lg">Вбивця Гоблінів — про подорож героя через темні світи!</p>
            <form method="post">
                <input type="hidden" name="anime_name" value="Вбивця Гоблінів">
                <input type="hidden" name="rating" value="7.8/10">
                <input type="hidden" name="description" value="Вбивця Гоблінів — про подорож героя через темні світи!">
                <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
            </form>
            <?php if (!empty($message_goblinslayer)): ?>
                <p class="text-center text-white mt-2"><?= htmlspecialchars($message_goblinslayer); ?></p>
            <?php endif; ?>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Дивитись зараз</a>
            </div>
        </div>

        <!-- Чорний Клевер -->
        <div class="fire-border">
            <img src="Fons/fon13.jpg" alt="Хеллсінг">
            <h2 class="text-center text-gray-800 font-bold text-xl">Хеллсінг</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: 8.8/10</p>
            <p class="text-center text-gray-700 text-lg">Хеллсінг — про війну між вампірами та організацією Хеллсінг!</p>
            <form method="post">
                <input type="hidden" name="anime_name" value="Хеллсінг">
                <input type="hidden" name="rating" value="8.8/10">
                <input type="hidden" name="description" value="Хеллсінг — про війну між вампірами та організацією Хеллсінг!">
                <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
            </form>
            <?php if (!empty($message_hellsing)): ?>
                <p class="text-center text-white mt-2"><?= htmlspecialchars($message_hellsing); ?></p>
            <?php endif; ?>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Дивитись зараз</a>
            </div>
        </div>
        <!-- Токійський гуль -->
        <div class="fire-border">
            <img src="Fons/fon10.jpg" alt="Токійський гуль">
            <h2 class="text-center text-gray-800 font-bold text-xl">Токійський гуль</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: 8.5/10</p>
            <p class="text-center text-gray-700 text-lg">Токійський гуль — історія про хлопця, що став напівгулем після зустрічі з жахливим монстром!</p>
            <form method="post">
                <input type="hidden" name="anime_name" value="Токійський гуль">
                <input type="hidden" name="rating" value="8.5/10">
                <input type="hidden" name="description" value="Токійський гуль — історія про хлопця, що став напівгулем після зустрічі з жахливим монстром!">
                <button class="heart-button" type="submit" name="add_to_cart" style="font-size: 19px; color: black;">❤️ Додати до кошика</button>
            </form>
            <?php if (!empty($message_tokyoghoul)): ?>
                <p class="text-center text-white mt-2"><?= htmlspecialchars($message_tokyoghoul); ?></p>
            <?php endif; ?>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Дивитись зараз</a>
            </div>
        </div>
        </div>
        </div>
 <!-- КНОПКИ-РАМКИ -->

 
    <footer id="new-arrivals" class="border p-4 mt-10 rounded-lg shadow-lg bg-white w-full max-w-3xl mx-auto flex justify-center">
        <h1 class="cartoon-font text-3xl font-bold text-center text-gray-800">Аніме новинки цього року для улюблених глядачів.</h1>
    </footer>
    

<h1 class="anime-title">Аніме Новинки 2025 року</h1>

<div class="content center-text"> 
    <p class="text-gray-700 cartoon-text adjusted-text">Ласкаво просимо до розділу новинок та улюблених аніме!</p>
    <p class="text-gray-700 cartoon-text adjusted-text">Представлені нові релізи року та продовження популярних серій, а також аніме, що виходитимуть у 2025 році.</p>
</div>

<div class="container">

<div class="fire-border">
    <img src="Fons\fon14.jpg">
    <h2 class="text-center text-gray-800 font-bold text-xl">Berserk: The Golden Age Arc - Memorial Edition</h2>
    <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
    <p class="text-center text-gray-700 text-lg">Опис: Ґатс шукає свій шлях у світі жорстокості, зради та долі.</p>
    <div class="flex justify-center mt-5">
        <a href="#" class="watch-button">Хочу дивитись</a>
    </div>
</div>

<div class="fire-border">
    <img src="Fons\fon15.jpg" alt="Невідомий світ">
    <h2 class="text-center text-gray-800 font-bold text-xl">Fate/Grand Order: Solomon</h2>
    <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
    <p class="text-center text-gray-700 text-lg">Опис: Ріцука та Меш борються з Соломоном, щоб врятувати людство від знищення.</p>
    <div class="flex justify-center mt-5">
        <a href="#" class="watch-button">Хочу дивитись</a>
    </div>
</div>

<div class="fire-border">
    <img src="Fons\fon16.jpg">
    <h2 class="text-center text-gray-800 font-bold text-xl">Нанацу но Тайзай: Сім смертних гріхів: Чотири лицарі Апокаліпсису</h2>
    <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
    <p class="text-center text-gray-700 text-lg">Опис: Персіваль відкриває свою долю лицаря Апокаліпсису і вирушає у подорож.</p>
    <div class="flex justify-center mt-5">
        <a href="#" class="watch-button">Хочу дивитись</a>
    </div>
</div>

<div class="fire-border">
    <img src="Fons\fon17.jpg" alt="Невідомий світ">
    <h2 class="text-center text-gray-800 font-bold text-xl">Sword Art Online: Progressive - Scherzo of Deep Night</h2>
    <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
    <p class="text-center text-gray-700 text-lg">Опис: Кіріто і Асуна досліджують нові глибини Айнкраду, долаючи небезпеки.</p>
    <div class="flex justify-center mt-5">
        <a href="#" class="watch-button">Хочу дивитись</a>
    </div>
</div>

   <div class="fire-border">
       <img src="Fons\fon18.jpg" >
       <h2 class="text-center text-gray-800 font-bold text-xl">Найсильніший господар: що він робитиме у своєму другому житті?</h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Опис: Головний герой відроджується, щоб стати сильнішим.</p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
      
   <div class="fire-border">
       <img src="Fons\fon19.jpg" >
       <h2 class="text-center text-gray-800 font-bold text-xl">Overlord Season 5 </h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Опис: Айнз Оол Гаун — персонаж, який потрапляє в інший світ у Overlord і поченає досліджувати його.</p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
   
       <div class="fire-border">
           <img src="Fons\fon20.jpg" >
           <h2 class="text-center text-gray-800 font-bold text-xl">Дивовижні пригоди ДжоДжо: Частина 9 - Землі ДжоДжо</h2>
           <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
           <p class="text-center text-gray-700 text-lg">Опис: Новий етап у франшизі, який розкриває нові пригоди, надзвичайні здібності та інтригуючі персонажі в альтернативних версіях світу. </p>
           <div class="flex justify-center mt-5">
               <a href="#" class="watch-button">Хочу дивитись</a>
           </div>
       </div>
       
       <div class="fire-border">
           <img src="Fons\fon21.jpg">
           <h2 class="text-center text-gray-800 font-bold text-xl">Mob Psycho 100 Season 4</h2>
           <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
           <p class="text-center text-gray-700 text-lg">Опис: Останні події серії почуття завершують історію Шигео Кагеями.</p>
           <div class="flex justify-center mt-5">
               <a href="#" class="watch-button">Хочу дивитись</a>
           </div>
       </div>
       
   <div class="fire-border">
       <img src="Fons\fon22.jpg" alt="Невідомий світ">
       <h2 class="text-center text-gray-800 font-bold text-xl">Невідомий світ</h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Герой прокидається в загадковому світі, де йому потрібно знайти шлях додому.</p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
      
       <div class="fire-border">
           <img src="Fons\fon23.jpg" alt="Невідомий світ">
           <h2 class="text-center text-gray-800 font-bold text-xl">Невідомий світ</h2>
           <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
           <p class="text-center text-gray-700 text-lg">Герой прокидається в загадковому світі, де йому потрібно знайти шлях додому.</p>
           <div class="flex justify-center mt-5">
               <a href="#" class="watch-button">Хочу дивитись</a>
           </div>
       </div>
       
       <div class="fire-border">
           <img src="Fons\fon27.jpg" alt="Невідомий світ">
           <h2 class="text-center text-gray-800 font-bold text-xl">Невідомий світ</h2>
           <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
           <p class="text-center text-gray-700 text-lg">Герой прокидається в загадковому світі, де йому потрібно знайти шлях додому.</p>
           <div class="flex justify-center mt-5">
               <a href="#" class="watch-button">Хочу дивитись</a>
           </div>
       </div>
       
       <div class="fire-border">
           <img src="Fons\fon25.jpg">
           <h2 class="text-center text-gray-800 font-bold text-xl">Доктор Стоун 3 сезон: Кам'яні війни</h2>
           <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
           <p class="text-center text-gray-700 text-lg">Опис: 
            У цьому сезоні команда збирає ресурси для будівництва корабля, щоб вирушити в подорож через океан у пошуках причин глобально.</p>
           <div class="flex justify-center mt-5">
               <a href="#" class="watch-button">Хочу дивитись</a>
           </div>
       </div>
     
   <div class="fire-border">
       <img src="Fons\fon26.jpg" >
       <h2 class="text-center text-gray-800 font-bold text-xl">Відродження героя щита 4 сезон</h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Опис: Наофумі і його команда стикнуться з новими викликами, пов'язаними з відновленням справедливості та боротьбою з ворогами.</p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
   
   <div class="fire-border">
       <img src="Fons\fon24.jpg">
       <h2 class="text-center text-gray-800 font-bold text-xl">Fairy Tail: 100 Years Quest</h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Опис: Сюжет "Хвоста Фей" зосереджений на Нейті і Люсі, які подорожують, виконуючи завдання, борючись зі злочинцями і захищаючи свою гільдію.</p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
   
   <div class="fire-border">
       <img src="Fons\fon28.jpg">
       <h2 class="text-center text-gray-800 font-bold text-xl">Kaguya-sama: Love is War — The First Kiss That Never Ends</h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Опис: Продовжує романтичну напругу між Кагуєю Шіномією та Міюкі Сірогане, досліджуючи динаміку їхніх стосунків після зізнання. Арка обіцяє комедійний момент.</p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
   
       <div class="fire-border">
           <img src="Fons\fon29.jpg">
           <h2 class="text-center text-gray-800 font-bold text-xl">Чи це неправильно намагатися забрати дівчат у підземеллі? 4 сезон</h2>
           <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
           <p class="text-center text-gray-700 text-lg">Опис: Сюжет слідкує за Беллом Кранелом, який прагне стати сильнішим, підкорюючи підземелля і знайомлячись з новими персонажами.</p>
           <div class="flex justify-center mt-5">
               <a href="#" class="watch-button">Хочу дивитись</a>
           </div>
       </div>
       
   <div class="fire-border">
       <img src="Fons\fon30.jpg" >
       <h2 class="text-center text-gray-800 font-bold text-xl">The Misfit of Demon King Academy Season 2</h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Опис: У цьому сезоні герої проходять випробування для підвищення сили і досягнення цілей. Теми дружби, зради та боротьби за справедливість продовжують розвиватися, підкреслюючи їх.</p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
   
       <div class="fire-border">
           <img src="Fons\fon31.jpg" >
           <h2 class="text-center text-gray-800 font-bold text-xl"> Toilet-bound hanako-kun</h2>
           <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
           <p class="text-center text-gray-700 text-lg">Опис: Розповідає історію Нене Ясіро, старшокласниці, яка зачарована надприродним і шукає легендарного духа Ханако-куна, який, як кажуть, переслідує третій кабінок дівочої ванної кімнати в Камоме. Академія. </p>
           <div class="flex justify-center mt-5">
               <a href="#" class="watch-button">Хочу дивитись</a>
           </div>
       </div>
       
   <div class="fire-border">
       <img src="Fons\fon33.jpg" >
       <h2 class="text-center text-gray-800 font-bold text-xl"> Latna Saga: Survival of a Sword King</h2>
       <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
       <p class="text-center text-gray-700 text-lg">Опис: Завершена манхва, яка розповідає про подорож Рю Хан-Біна, звичайної людини, який після закінчення обов’язкової військової служби потрапляє в суворий фантастичний світ. </p>
       <div class="flex justify-center mt-5">
           <a href="#" class="watch-button">Хочу дивитись</a>
       </div>
   </div>
   
        <div class="fire-border">
            <img src="Fons\fon32.jpg" >
            <h2 class="text-center text-gray-800 font-bold text-xl"> DICE: The Cube that Changes Everything</h2>
            <p class="text-center text-gray-700 text-lg">Рейтинг: Невідомий</p>
            <p class="text-center text-gray-700 text-lg">Опис:  веб-комікс, який розповідає про життя Донгтае, старшокласника, який бореться із залякуванням і соціальними проблемами.</p>
            <div class="flex justify-center mt-5">
                <a href="#" class="watch-button">Хочу дивитись</a>
            </div>
        </div>
   </div>
   
   <footer id="about-us" class="border p-4 mt-10 rounded-lg shadow-lg bg-white w-full max-w-3xl mx-auto flex justify-center">
    <h1 class="cartoon-font text-3xl font-bold text-center text-gray-800">Про нас і наш сайт Anime Of Home.</h1>
</footer>


<div class="content"> 
    <p class="text-gray-700 cartoon-text center-text">Ми раді вітати нових користувачів на нашому сайті Anime Of Home!</p>

    <p class="text-gray-700 cartoon-text">Сподіваємося, що кожен раз, коли ви заходите, ви будете радіти новинкам і обговоренням.</p>
</div>

<div class="FF-border">
    <h2 class="text-center text-gray-800 font-bold text-xl">Привіт!</h2>
    <p class="text-center text-gray-700 text-lg">Ми – розробники сайту Anime Of Home. Ми створили цей сайт для людей, які люблять аніме. Наша мета – створити комфортне місце, де можна знайти цікаву інформацію, дивитися улюблені шоу та спілкуватися з однодумцями.</p>

    <h2 class="text-center text-gray-800 font-bold text-xl mt-5">Для наших відвідувачів</h2>
    <p class="text-center text-gray-700 text-lg">Ми прагнемо, щоб наш сайт став справжнім домом для всіх, хто захоплюється аніме. Тут ви зможете ділитися своїми враженнями, отримувати нові знання про світ аніме та знаходити нових друзів, які розділяють ваші інтереси.</p>

    <h2 class="text-center text-gray-800 font-bold text-xl mt-5">Наші цінності</h2>
    <p class="text-center text-gray-700 text-lg">Ми цінуємо кожного користувача та намагаємося створити атмосферу взаємоповаги та підтримки. На нашому сайті ви завжди знайдете актуальну інформацію про новинки аніме, огляди та рекомендації.</p>

    <h2 class="text-center text-gray-800 font-bold text-xl mt-5">Зворотний зв'язок</h2>
    <p class="text-center text-gray-700 text-lg">Ми завжди раді вашим відгукам і пропозиціям. Наша команда працює над тим, щоб зробити сайт ще зручнішим та цікавішим для всіх користувачів. Напишіть нам, і ми з радістю врахуємо ваші побажання!</p>
    <p class="text-center text-gray-700 text-lg">Також ви можете зайти до нас в сім'ю на сервер <a href="https://discord.com/invite/https://discord.gg/Pq56DjJW" target="_blank" class="text-blue-600 hover:text-blue-800">Discord</a> сайту.</p>

</div>

<div class="footer mt-5">
    <div class="text-center text-gray-600 mt-3">
        <p class="text-center text-gray-700 text-lg">Ваша турбота — наша пріоритет.</p>

        <p class="mt-2">Власник - Email для зв'язку: 
            <a href="mailto:admin@animeofhome.com" class="text-blue-600 hover:text-blue-800">
                admin@animeofhome.com
            </a>
        </p>
        <p class="mt-2">Адміністратор - Email власника: 
            <a href="mailto:owner@animeofhome.com" class="text-blue-600 hover:text-blue-800">
                owner@animeofhome.com
            </a>
        </p>
    </div>

    <p class="text-center text-gray-700 text-lg mt-5">Anime Of Home. Всі права захищені!</p>
</div>


</body>
</html>
