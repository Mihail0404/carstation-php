<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Добавление товаров - CarStation</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/main.css">
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
        <p class="headline">Добавление нового товара</p>
        <div class="add_car_fields">
            <form action="api/add.php" method="POST">
                <input class="field" name="name" placeholder="Название">
                <input class="field" name="price" placeholder="Цена">
                <textarea name="imagepath" placeholder="Ссылка на изображение"></textarea>
                <input class="action-button" type="submit" value="Добавить">
            </form>
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
    </body>
</html>