<!DOCTYPE html>
<html lang="ru">
<head>
    <title>CarStation</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <header class="header">
        <nav>
            <ul class="header-ul">
                <li class="logo-ul" ><a href="/index.php"><img class="logo" src="img/logo.png" alt="Logo"></a></li>
                <li><a class="header-a" href="catalog.php">Каталог</a></li>
                <li><a class="header-a" href="cart.php">Корзина</a></li>
                <li><a class="header-a" href="admin.php">Админ-панель</a></li>
                <li><a class="header-a" href="orders.php">Заказы</a></li>
            </ul>
        </nav>
    </header>
    <div class="titleup">
        <h1>Путешествуйте налегке, каршеринг всегда рядом</h1>
    </div>
    <div>
        <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Наши преймущества</h2>
        <div class="card-container">
            <button class="slidebtn" onclick="prevSlide()"><p class="slider"><</p></button>
            <div id="slider-container">
                <div id="slider">
                    <div class="slide"><img src="img/solaris.jpg" alt="Slide 1"></div>
                    <div class="slide"><img src="img/ladaxray.jpg" alt="Slide 2"></div>
                    <div class="slide"><img src="img/ladavesta.jpg" alt="Slide 3"></div>
                </div>
            </div>
            <button class="slidebtn" onclick="nextSlide()"><p class="slider">></p></button>
        </div>
    </div>
    <div>
        <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Отзывы</h2>
        <div class="card-container">
            <div class="card-wrapper">
                <div class="card active">
                    <p class="feedback-title">Ангелина Иванова</p>
                    <p class="feedback-text">Я впервые заказывала цветы в этом интернет-магазине и осталась невероятно довольна! Выбор букетов просто огромный - от классических роз до экзотических орхидей. Мне помогли подобрать идеальный букет для моей сестры на день рождения. Консультант был очень внимателен к моим пожеланиям и предложил несколько вариантов, которые идеально подходили под мой бюджет. Доставка была молниеносной - всего за 2 часа курьер привез роскошный букет прямо на работу сестры. Она была в полном восторге! Цветы выглядели свежими и ухоженными, сохраняли свежесть на протяжении целой недели. Я обязательно буду заказывать здесь цветы снова и рекомендую этот магазин всем своим друзьям и знакомым!</p>
                </div>
                <div class="card">
                    <p class="feedback-title">Ольга Петрова</p>
                    <p class="feedback-text">Я заказываю цветы в этом интернет-магазине уже не первый раз и всегда остаюсь очень довольна! Ассортимент просто поражает - здесь можно найти букеты на любой вкус и кошелек. В прошлый раз я заказывала роскошные белые лилии для мамы на юбилей, и она была в полном восторге! Курьер доставил их точно в назначенное время, и цветы выглядели потрясающе. Мама была тронута до слез. Я особенно ценю внимательное отношение персонала - они всегда уточняют все детали заказа и дают ценные рекомендации. Кроме того, у магазина очень удобный сайт с подробными описаниями и фотографиями всех букетов. Я всегда с радостью возвращаюсь сюда за новыми букетами!</p>
                </div>
                <div class="card">
                    <p class="feedback-title">Диана Панина</p>
                    <p class="feedback-text">Хочу поделиться своим восторженным отзывом об этом интернет-магазине! Я заказывала здесь букет для своего парня на годовщину отношений, и он был в полном восторге. Консультант помог мне подобрать потрясающий букет из красных роз, ландышей и зелени. Курьер доставил заказ точно в срок, и букет выглядел еще роскошнее, чем на фото на сайте. Мой парень был так тронут, что даже прослезился. Он сказал, что это лучший букет, который он когда-либо получал! Цветы простояли свежими более двух недель, что меня просто поразило. Я очень признательна команде магазина за их профессионализм, внимательность и заботу о клиентах. Теперь я буду заказывать цветы только здесь!</p>
                </div>
            </div>
            <div class="controls">
                <button class="prev action-button">Предыдущий</button>
                <button class="next action-button">Следующий</button>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-div">
            <a class="footer-a" href="https://t.me/" target="_blank">
                <span style="margin-left: 5px;">Telegram</span>
            </a>
            <a class="footer-a" href="https://vk.com/" target="_blank">
                <span style="margin-left: 5px;">VK</span>
            </a>
            <p class="footer-a" style="margin-bottom: 0;margin-top: 0;">+7 937-437-37-37</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
