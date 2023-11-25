<?php
include 'DBConnect.php';
include 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
  
    $sql = "DELETE FROM `login` WHERE `user_id` = '$user_id';";
    $result = mysqli_query($conn, $sql);
  
    if ($result) {
       
        echo "Row deleted successfully.";
    } else {
        
        echo "Failed to delete row.";
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $u_name = $_POST['u_name'];
        $password = $_POST['password'];
        $contact = $_POST['contact']; 
        $role = $_POST['role'];

        $existSql = "SELECT * FROM `login` WHERE username = '$u_name'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            $exists = true;        
            $_SESSION['status'] = "Username already exists.";
            $_SESSION['status_code'] = "error";
        } 
        else{
            $user_id = random_num(5);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql ="INSERT INTO `login` (`user_id`, `name`, `username`, `password`, `contact`, `role`) 
                    VALUES ('$user_id','$name','$u_name','$hash','$contact', '$role');";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $_SESSION['status'] = "Account has been created.";
                $_SESSION['status_code'] = "success";	
                header("location:admin_admin.php");
            }
            else{
                $_SESSION['status'] = "Account has been not created.";
                $_SESSION['status_code'] = "error";
            }
        }
    }
}

?>