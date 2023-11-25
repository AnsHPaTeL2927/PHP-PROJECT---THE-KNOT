<?php
include 'DBConnect.php';

// Query to count the rows in the table
$query = "SELECT COUNT(*) as `id` FROM `event`";
$result = mysqli_query($conn, $query);

if ($result) {
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);
    
    // Get the total count
    $totalCount = $row['id'];

    $_SESSION['count_1'] = $totalCount;
} 

// Query to count the users
$query1 = "SELECT COUNT(*) as `id` FROM `login` WHERE `role` = '0';";
$result1 = mysqli_query($conn, $query1);

if ($result1) {
    // Fetch the result as an associative array
    $row1 = mysqli_fetch_assoc($result1);
    
    // Get the total count
    $totalCount1 = $row1['id'];

    $_SESSION['count_2'] = $totalCount1;
} 

// Query to count the admins
$query2 = "SELECT COUNT(*) as `id` FROM `login` WHERE `role` = '1';";
$result2 = mysqli_query($conn, $query2);

if ($result2) {
    // Fetch the result as an associative array
    $row2 = mysqli_fetch_assoc($result2);
    
    // Get the total count
    $totalCount2 = $row2['id'];

    $_SESSION['count_3'] = $totalCount2;
} 

$query3 = "SELECT SUM(grand_total) AS SUM FROM bill;";
$result3 = mysqli_query($conn, $query3);

if ($result3) {
    // Fetch the result as an associative array
    $row3 = mysqli_fetch_assoc($result3); 
    
    // Get the total count
    $totalCount2 = $row3['SUM'];
    $profit = ($totalCount2 * 50) / 100 ;
    $_SESSION['count_4'] = $profit;
} 
?>