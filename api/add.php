<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_set_charset($link, "utf8");
$query = "INSERT INTO CarStation.products (name, price,  imagepath) VALUES ('" . $_POST['name'] . "', " . $_POST['price'] . ", '" . $_POST['imagepath'] . "');";
$result = mysqli_query($link, $query);
header('Location: /add.php');
