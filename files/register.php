<?php
session_start();

if (isset($_POST['signup']))
{
    $_SESSION["start"] = 1;
    
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "travobe";

    $conn = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbName);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $_SESSION["name"] = $name;
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['pwd']);

    $sql = "INSERT INTO accounts (Name,Email,Password) VALUES ('$name', '$email', '$password');";
    mysqli_query($conn,$sql);
    header("Location: ../profile.php?signup=successful");
}
?>