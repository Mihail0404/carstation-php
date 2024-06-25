<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_set_charset($link, "utf8");
$query = 'SELECT * from CarStation.cart;';
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    $querysend = 'INSERT INTO CarStation.orders (price, name,  status) VALUES (' . $row['price'] . ", '" . $row['name'] . "'" . ", 'Создан');";
    $result1 = mysqli_query($link, $querysend);
};
$drop_query = 'DELETE FROM CarStation.cart;';
$drop_result = mysqli_query($link, $drop_query);

header('Location: /cart.php');
