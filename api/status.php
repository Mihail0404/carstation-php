<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_set_charset($link, "utf8");
$query = 'UPDATE CarStation.orders SET status="Выполнен" WHERE id =' . $_POST['id'];
$result = mysqli_query($link, $query);

header('Location: /orders.php');
