<?php

include 'DBConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id']) && isset($_POST['product_id'])) {
    $delete_id = $_POST['delete_id'];
    $product_id = $_POST['product_id'];
  
    
    $sql = "DELETE FROM `entertainment` WHERE `id` = '$delete_id' AND `product_id` = '$product_id'";
    $result = mysqli_query($conn, $sql);
  
    if ($result) {
       
        echo "Row deleted successfully.";
    } else {
        
        echo "Failed to delete row.";
    }
  }
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['add'])){
        $product_id = $_POST['product_id'];
        $_SESSION['product_id'] = $product_id;
        $event = $_POST['eve_type'];
        $p_name = $_POST['package_name'];
        $p_price = $_POST['package_price'];

        $sql ="INSERT INTO `entertainment` (`product_id`, `event_type`, `_packages_name`, `_packages_price`) VALUES ('$product_id','$event','$p_name','$p_price');";
        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['status'] = "Package has been created.";
			$_SESSION['status_code'] = "success";	
            header("location:admin_Entertainment.php");
        }
        else{
            $_SESSION['status'] = "Package has been not created.";
			$_SESSION['status_code'] = "error";
        }
    }
    else if(isset($_POST['update'])){
        $product_id = $_POST['product_id'];
        $event = $_POST['event_type'];
        $p_name = $_POST['package_name'];
        $p_price = $_POST['package_price'];
        
        $sql = "UPDATE `entertainment` SET `product_id`='$product_id',`event_type`='$event',`_packages_name`='$p_name',`_packages_price`='$p_price' WHERE `product_id` = '$product_id';";
        $result = mysqli_query($conn, $sql);
    }
}

?>