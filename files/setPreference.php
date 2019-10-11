<?php 
session_start();

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "travobe";

$conn = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbName);
$type = mysqli_real_escape_string($conn, $_POST['type']);

if(isset($type)){
    if($type == "yetToPlan")
    {
        $_SESSION['type'] = 1;
        header("Location: ../preferenceYetToPlan.php?".$type);
    }
    elseif($type == "planned")
    {
        header("Location: ../preferencePlanned.php?".$type);
        $_SESSION['type'] = 2;
    }
    elseif($type == "onTrip")
    {
        header("Location: ../preferenceOnTrip.php?".$type);
        $_SESSION['type'] = 3;
    }
}
?>
