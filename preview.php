<?php
session_start();
if(isset($_POST['submitP'])){

    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "travobe";

    $conn = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbName);


    $des = mysqli_real_escape_string($conn, $_POST['destination']);
    $startDate = mysqli_real_escape_string($conn ,$_POST['dateStart']);
    $endDate = mysqli_real_escape_string($conn ,$_POST['dateEnd']);

    $_SESSION['des'] = $des;
    $_SESSION['sDate']  = $startDate;
    $_SESSION['eDate'] = $endDate;

    $_SESSION['num']=1;
}
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Travobe - Find Your Travel Companion</title>
        <link rel="icon" type="Image/png" href="files/logo.png">
        <link rel="stylesheet" type="text/css" href="files/style-global2.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="head">
            <a class="travobe" href="homepage.php">TRAVOBE.COM</a>
            <img class='pro-photo' src='files/profile-photo.png'>
            <?php
            echo ("<p class='log-greet'>".$_SESSION['name']."</p>");
            ?>
            <a href='account.php' class='profile-link'>Account</a>
        </div>

        <div class="choice-con">
            <p class="choices">YOU ENTERED:</p>
            <p><?php
            echo ("Location : ".$_SESSION['des']); 
            ?></p>

            <p><?php
            echo ("START : ".$_SESSION['sDate']); 
            ?></p>

            <p><?php
            echo ("END : ".$_SESSION['eDate']); 
            ?></p>

            <?php
            if($_SESSION['num'] == 1){
                echo("<form action='files/databaseType1.php' method='POST'>
                <p>POST YOUR PREFERENCE SO EVERYBODY CAN SEE</p>
                <button name='post'>POST</button>
            </form>");
            }
            ?>
        </div>

        <div class="results">
            <?php

            $dbServerName = "localhost";
            $dbUserName = "root";
            $dbPassword = "";
            $dbName = "travobe";

            $conn = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbName);

            $_SESSION['$sql'] = "SELECT * FROM type";
            $_SESSION['$result'] = $conn->query($_SESSION['$sql']);
            $_SESSION['id'] = 1;

            while($_SESSION['$row'] = $_SESSION['$result']->fetch_assoc()){
                if($_SESSION['des'] == $_SESSION['$row']["Location"] && $_SESSION['name'] != $_SESSION['$row']["Name"])
                {
                    echo ("id: " . $_SESSION['id']. " Name: " . $_SESSION['$row']["Name"]. " Location :" .$_SESSION['$row']["Location"]. " Start: " . $_SESSION['$row']["Start"]. " End: " . $_SESSION['$row']["End"]. "<br>");
                    $_SESSION['id'] += 1;
                }
            }
            if($_SESSION['id'] == 1)
                echo("No Results");
            ?>
        </div>

    </body>

</html>