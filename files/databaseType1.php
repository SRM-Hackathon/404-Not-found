<?php
session_start();

if (isset($_POST['post']))
{
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "travobe";

    $_SESSION['num']=0;

    $conn = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbName);

    if($_SESSION['type'] == 1){
        $name = $_SESSION['name'];
        $des = $_SESSION['des'];
        $sDate = $_SESSION['sDate'];
        $eDate = $_SESSION['eDate'];

        $sql = "INSERT INTO type (Name,Location,Start,End) VALUES ('$name', '$des', '$sDate', '$eDate');";
        mysqli_query($conn,$sql);
        header("Location: ../preview.php?=posted");
    }
     else{
        header("Location: ../preview.php?=unsuccess");
     }
}
?>