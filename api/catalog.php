<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_set_charset($link, "utf8");

$query = 'SELECT * from CarStation.products WHERE id =' . $_POST['id'];
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_array($result)) {
    $querysend = 'INSERT INTO CarStation.cart (id, name, price, imagepath, quantity) VALUES (' . $row['id'] . ", '" . $row['name'] . "', " . $row['price'] . ", '" . $row['imagepath'] . "', 1);";
    $result1 = mysqli_query($link, $querysend);
};

header('Location: /catalog.php');