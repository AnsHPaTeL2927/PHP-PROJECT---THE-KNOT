<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['update'])){
        $user_id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];

        $sql = "UPDATE `login` SET `user_id` = '$user_id' , `name` = '$name' , `username` = '$username' , `password` = '$password' , `contact` = '$contact'; ";
        $result = mysqli_query($conn, $sql);
    }
}

?>