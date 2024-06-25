<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_set_charset($link, "utf8");

$querysend = 'INSERT INTO CarStation.orders (price, name,  status) VALUES (' . "3000" . ", '" . "Индивидуальный букет" . "'" . ", 'Создан');";
$result1 = mysqli_query($link, $querysend);

$drop_query = 'DELETE FROM CarStation.cart;';
$drop_result = mysqli_query($link, $drop_query);

header('Location: /customadd.php');
