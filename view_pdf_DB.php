<?php
include 'DBConnect.php';
$event_id = $_SESSION['event_id'];
$decoration = $_SESSION['decoration'];
$food = $_SESSION['food'];
$photography = $_SESSION['photography'];
$entertainment = $_SESSION['entertainment'];
$guest = $_SESSION['guest'];

$sql = "SELECT * FROM `bill` WHERE `event_id` = '$event_id';";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);

$sqld = "SELECT `product_id`, `_packages_price` FROM `decoration` WHERE `_packages_name` = '$decoration';";
$resultd = mysqli_query($conn , $sqld);
$rowd = mysqli_fetch_assoc($resultd);

$sqlf = "SELECT `product_id`, `_packages_price`  FROM `food` WHERE `_packages_name` = '$food';";
$resultf = mysqli_query($conn , $sqlf);
$rowf = mysqli_fetch_assoc($resultf);

$sqlp = "SELECT `product_id`, `_packages_price`  FROM `photgraphy` WHERE `_packages_name` = '$photography';";
$resultp = mysqli_query($conn , $sqlp);
$rowp = mysqli_fetch_assoc($resultp);

$sqle = "SELECT `product_id`, `_packages_price`  FROM `entertainment` WHERE `_packages_name` = '$entertainment';";
$resulte = mysqli_query($conn , $sqle);
$rowe = mysqli_fetch_assoc($resulte);

$total = $row['total'];
$gst = ($total * 18) / 100; 
$_SESSION['gst'] = $gst;

$grand_total = $total + $gst;
$_SESSION['g_total'] = $grand_total;

$sqlb = "UPDATE `bill` SET `grand_total` = '$grand_total' WHERE `event_id` = '$event_id' ";
$resultb = mysqli_query($conn, $sqlb);

?>

