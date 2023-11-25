<?php
include 'DBConnect.php';
include 'functions.php';
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header('location: Login.php');    
    exit;
}else{
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_SESSION['username'];
    $bride_fname = $_POST['bride_fname'];
    $bride_mname = $_POST['bride_mname'];
    $bride_lname = $_POST['bride_lname'];
    $bride_email = $_POST['bride_email'];
    $bride_contact = $_POST['bride_phone'];
    $groom_fname = $_POST['groom_fname'];
    $groom_mname = $_POST['groom_mname'];
    $groom_lname = $_POST['groom_lname'];
    $groom_email = $_POST['groom_email'];
    $groom_contact = $_POST['groom_phone'];
    $event_type = $_POST['event_type'];
    $event_date = $_POST['event_date'];
    $event_st = $_POST['event_st'];
    $event_ft = $_POST['event_ft'];
    $event_guest  = $_POST['event_guest'];

    if($event_type == 'Engagement'){
        $food = $_POST['food1'];
        $entertainment = $_POST['entertainment1'];
        $photography = $_POST['photography1'];
        $theme = $_POST['theme1'];
        $layout = $_POST['layout1'];
    }else if($event_type == 'Garba'){
        $food = $_POST['food2'];
        $entertainment = $_POST['entertainment2'];
        $photography = $_POST['photography2'];
        $theme = $_POST['theme2'];
        $layout = $_POST['layout2'];
    }else if($event_type == 'Wedding'){
        $food = $_POST['food3'];
        $entertainment = $_POST['entertainment3'];
        $photography = $_POST['photography3'];
        $theme = $_POST['theme3'];
        $layout = $_POST['layout3'];
    }else if($event_type == 'Reception'){
        $food = $_POST['food4'];
        $entertainment = $_POST['entertainment4'];
        $photography = $_POST['photography4'];
        $theme = $_POST['theme4'];
        $layout = $_POST['layout4'];
    }

    $event_id = random_num_event(7);
    $existsql = "SELECT * FROM `event` WHERE _event_date = '$event_date' ";
    $result = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $exists = true;        
        $_SESSION['status'] = "Date already exists.";
        $_SESSION['status_code'] = "error";
    } 
    else{
        $exists = false;
        $sql = "INSERT INTO `event` (`event_id`,`username`, `_bride_fname`, `_bride_mname`, `_bride_lname`, `_bride_email`, `_bride_phone`, `_groom_fname`, `_groom_mname`, `_groom_lname`, `_groom_email`, `_groom_phone`, `_event`, `_event_date`, `_event_finish_time`, `_event_start_time`, `_event_guest`, `_event_food`, `_event_entertainment`, `_event_photography`, `_event_theme`, `_event_layout`, `DT`) VALUES 
        ('$event_id','$username', '$bride_fname', '$bride_mname', '$bride_lname', '$bride_email', '$bride_contact', '$groom_fname', '$groom_mname', '$groom_lname', '$groom_email', '$groom_contact', '$event_type', '$event_date', '$event_st', '$event_ft', '$event_guest', '$food', '$entertainment', '$photography', '$theme', '$layout', current_timestamp())";     
        $result = mysqli_query($conn , $sql);
        $_SESSION['date'] = $event_date;
        $_SESSION['event'] = $event_type;
        $_SESSION['event_id'] = $event_id;
        $_SESSION['decoration'] = $theme;
        $_SESSION['food'] = $food;
        $_SESSION['photography'] = $photography;
        $_SESSION['entertainment'] = $entertainment;
        $_SESSION['guest'] = $event_guest;
        $food_price = "SELECT `_packages_price` FROM food WHERE _packages_name = '$food' ";
        $entertainment_price = "SELECT `_packages_price` FROM entertainment WHERE _packages_name = '$entertainment' ";
        $photography_price = "SELECT `_packages_price` FROM photgraphy WHERE _packages_name = '$photography' ";
        $theme_price = "SELECT `_packages_price` FROM decoration WHERE _packages_name = '$theme' ";

        $result_food = mysqli_query($conn, $food_price);
        $result_entertainment = mysqli_query($conn, $entertainment_price);
        $result_photography = mysqli_query($conn, $photography_price);
        $result_theme = mysqli_query($conn, $theme_price);

        if($result_food){
            $row = mysqli_fetch_assoc($result_food);
            $temp_food_value = (int) $row['_packages_price'];
            $food_value = $event_guest * $temp_food_value;
        }
        if($result_entertainment){
            $row = mysqli_fetch_assoc($result_entertainment);
            $entertainment_value = (int) $row['_packages_price'];
        }
        if($result_photography){
            $row = mysqli_fetch_assoc($result_photography);
            $photography_value = (int) $row['_packages_price'];
        }
        if($result_theme){
            $row = mysqli_fetch_assoc($result_theme);
            $theme_value = (int) $row['_packages_price'];
        }

        $total = $food_value + $entertainment_value + $photography_value + $theme_value;

        $sql2 = "INSERT INTO `bill` (`event_id`,`username` , `event` , `date` , `food` , `entertainment` , `photography` , `theme` , `sub_total`) VALUES ('$event_id','$username','$event_type','$event_date','$food_value','$entertainment_value','$photography_value','$theme_value' ,'$total')";
        $result2 = mysqli_query($conn , $sql2);

        if($result){
            header("Location: bill_2.php");
        }else{
            header("Locarion: events.php");
        }
    } 
  }
}
?>