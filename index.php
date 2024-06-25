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
        <div class="card-container">
            <button class="slidebtn" onclick="prevSlide()"><p class="slider"><</p></button>
            <div id="slider-container">
                <div id="slider">
                    <div class="slide"><img src="img/l1.jpg" alt="Slide 1"></div>
                    <div class="slide"><img src="img/l2.jpg" alt="Slide 2"></div>
                    <div class="slide"><img src="img/l3.jpg" alt="Slide 3"></div>
                </div>
            </div>
            <button class="slidebtn" onclick="nextSlide()"><p class="slider">></p></button>
        </div>
    </div>
    <div>
        <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Акции</h2>
        <div class="card-container">
            <div class="card-wrapper">
                <div class="card active">
                    <p class="feedback-title">Скидка 20% на все поездки по будням!</p>
                    <p class="feedback-text">С 1 июня по 31 августа 2024 года на все поездки по будням с CarStation действует скидка 20%. Это значит, что вы можете: <br> Экономить на своих деловых поездках <br> Отправляться в гости к друзьям и близким без лишних затрат <br>Просто путешествовать по городу и наслаждаться летней атмосферой.</p>
                </div>
                <div class="card">
                    <p class="feedback-title">Низкие тарифы на любой вкус!</p>
                    <p class="feedback-text">У нас: <br>Самые низкие цены в городе! <br>Никаких скрытых платежей!<br>Широкий выбор автомобилей на любой вкус и бюджет!<br>Минутная тарификация - плати только за то время, что ты едешь!</p>
                </div>
                <div class="card">
                    <p class="feedback-title">Широкий выбор автомобилей</p>
                    <p class="feedback-text">Компактные городские автомобили, идеально подходящие для поездок по узким улочкам и парковки в центре города.<br>
                        Вместительные автомобили, в которых с комфортом разместятся вся ваша семья или компания друзей.<br>
                        Универсалы и кроссоверы, которые подойдут для поездок на дачу или за город.<br>
                        Автомобили с автоматической коробкой передач, которые сделают ваши поездки еще более комфортными.</p>
                </div>
            </div>
            <div class="controls">
                <button class="prev action-button">Предыдущая</button>
                <button class="next action-button">Следующая</button>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-div">
            <a class="footer-a" href="https://t.me/" target="_blank">
                <span style="margin-left: 5px;"><img height="28px" src="img/tg.svg" alt=""></span>
            </a>
            <a class="footer-a" href="https://vk.com/" target="_blank">
                <span style="margin-left: 5px;"><img height="28px" src="img/vk.svg" alt=""></span>
            </a>
            <p class="footer-a" style="margin-bottom: 0;margin-top: 0;">+7 937-437-37-37</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
