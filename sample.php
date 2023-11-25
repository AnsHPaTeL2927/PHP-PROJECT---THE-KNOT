<?php
include 'DBConnect.php';
$user_id = "LID84";
$password = '$2y$10$Zvtb2SsSRC/5M2X4opIR8.41Lw1XH0FgJ4hwfgBp0.uptJfR3XWyG';
$sql = "SELECT `password` FROM `login` WHERE `user_id` = '$user_id';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['password'] . "<br>";
$pass = $row['password'];
echo $pass;
$Dpassword = password_verify($password, $pass);
echo $Dpassword;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>