<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Корзина - CarStation</title>
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
        <p class="headline">Корзина</p>
        <div data-id="cart_table">
            <?php
            $link = mysqli_connect("localhost", "root", "");
            mysqli_set_charset($link, "utf8");
            $query = 'SELECT * from CarStation.cart;';
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) {
                print('<div class="cart_item" data-id="' . $row['id'] . '">
                <div class="item_img">
                    <img src="' . $row['imagepath'] . '">
                </div>
                <p class="item_title">' . $row['name'] . '</p>

                <div class="cart-btn1">
                    <form class="cart-btn1" action="api/cartlite.php" method="POST">
                    <input type="hidden" name="id" value="' . $row['id'] . '" />
                    <input name="status" class="small-cart-button" type="submit" value="-">
                    <div class="cart_description">Время аренды: ' . $row['quantity'] . ' мин</div>
                    <input name="status" class="small-cart-button" type="submit" value="+">
                    </form>
                </div>
                <div class="cart-btn2">
                    <form action="api/cart.php" method="POST">
                    <input type="text" name="amount" />
                    <input type="hidden" name="id" value="' . $row['id'] . '" />
                    <input class="action-button" type="submit" value="Ввести">
                    </form>
                </div>
            </div>');
            };
            ?>
            <form action="api/order.php" method="POST">
                <input class="action-button" type="submit" value="Оформить заказ">
            </form>
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
    </body>
</html>