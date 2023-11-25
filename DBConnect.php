<?php
ini_set('session.gc_maxlifetime', 3200);
session_start();

$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "the_knot";

$conn = mysqli_connect($SERVER , $USERNAME , $PASSWORD , $DATABASE);
if(!$conn){
    echo "not success";
}
else{
    //echo "success";
}
?>