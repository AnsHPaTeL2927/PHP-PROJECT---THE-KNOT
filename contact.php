<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin = true;
}
else{
    $loggedin = false;
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $csubject = $_POST['csubject'];
    $cmessage = $_POST['cmessage'];
    if($loggedin){
        $username = $_SESSION['username'];
    }
    if(!$loggedin){
        $username = null;
    }
    
  
    $sql = "INSERT INTO `inqury` (`username`, `name`, `email`, `subject`, `message`, `DT`) VALUES ('$username', '$cname', '$cemail', '$csubject','$cmessage', current_timestamp());";
    $result = mysqli_query($conn, $sql);
}
?>