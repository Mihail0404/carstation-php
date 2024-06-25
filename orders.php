<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Заказы - CarStation</title>
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
        <div>
            <p class="headline">Заказы</p>
            <div class="orders_table">
                <div id="order-grid">
                    <?php
                    $link = mysqli_connect("localhost", "root", "");
                    mysqli_set_charset($link, "utf8");
                    $query = 'SELECT * from CarStation.orders;';
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        if ($row['status'] == 'Выполнен'){
                            print('<div class="status-item green"  data-id="' . $row['id'] . '">
                    <p>Номер заказа: <b>' . $row['id'] . '</b> - ' . $row['name'] . ' - ' . $row['status'] . '</p></div>
                    ');
                        }
                        else{
                            print('<div class="status-item red"  data-id="' . $row['id'] . '">
                    <p>Номер заказа: <b>' . $row['id'] . '</b> - ' . $row['name'] . ' - ' . $row['status'] . '</p>
                    <form action="api/status.php" method="POST">
                    <input type="hidden" name="id" value="' . $row['id'] . '" />
                    <input class="order-button" type="submit" value="Изменить статус">
                    </form></div>');
                        }
                    };
                    ?>
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
    </body>
</html>