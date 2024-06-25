<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_set_charset($link, "utf8");

$query = 'SELECT * from CarStation.cart WHERE id =' . $_POST['id'];
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$add_row = $row['quantity'] + 1;
$substract_row = $row['quantity'] - 1;

if ($_POST['status'] == '+'){
    $query = 'UPDATE CarStation.cart SET quantity =' . $add_row . ' WHERE id =' . $_POST['id'];
    $result1 = mysqli_query($link, $query);
}
if ($_POST['status'] == '-'){
    if ($row['quantity'] == 1){
        $delete_query = "DELETE FROM CarStation.cart WHERE id = " . $_POST['id'] . ";";
        $result2 = mysqli_query($link, $delete_query);
        echo $delete_query;
    }
    else{
        $query = 'UPDATE CarStation.cart SET quantity =' . $substract_row . ' WHERE id =' . $_POST['id'];
        $result3 = mysqli_query($link, $query);
    }
}

header('Location: /cart.php');