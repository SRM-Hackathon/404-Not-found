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
    $descript = mysqli_real_escape_string($conn,$_POST['descript']);

    $_SESSION['desT'] = $des;
    $_SESSION['sDateT']  = $startDate;
    $_SESSION['eDateT'] = $endDate;
    $_SESSION['descript'] = $descript;

    $_SESSION['num2'] = 1;
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
            echo ("Location : ".$_SESSION['desT']); 
            ?></p>

            <p><?php
            echo ("START : ".$_SESSION['sDateT']); 
            ?></p>

            <p><?php
            echo ("END : ".$_SESSION['eDateT']); 
            ?></p>

            <p><?php
            if(($_SESSION['descript'] != " ")) {
                echo ("Description : ".$_SESSION['descript']); 
            }
            ?>
            </p>

            <?php
            if($_SESSION['num2'] == 1){
                echo("<form action='files/databaseType1.php' method='POST'>
                <p>POST YOUR PREFERENCE SO EVERYBODY CAN SEE</p>
                <button name='post'>POST</button>
            </form>");
            }
            ?>

            <div class="results">
                <?php

                $dbServerName = "localhost";
                $dbUserName = "root";
                $dbPassword = "";
                $dbName = "travobe";

                $conn = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbName);

                $_SESSION['$sql2'] = "SELECT * FROM planned";
                $_SESSION['$result2'] = $conn->query($_SESSION['$sql2']);
                $_SESSION['idP'] = 1;

                while($_SESSION['$row2'] = $_SESSION['$result2']->fetch_assoc()){
                    if($_SESSION['desT'] == $_SESSION['$row2']["Location"] && $_SESSION['name'] != $_SESSION['$row2']["Name"])
                    {
                        echo ("id: " . $_SESSION['idP']. " Name: " . $_SESSION['$row2']["Name"]. " Location :" .$_SESSION['$row2']["Location"]. " Start: " . $_SESSION['$row2']["StartDate"]. " End: " . $_SESSION['$row2']["EndDate"]. "<br>");
                        $_SESSION['idP'] += 1;
                        if($_SESSION['$row2']["Des"] != " "){
                            echo("Description : " .$_SESSION['$row2']["Des"]."<br><br>");
                        }
                    }
                }
                if($_SESSION['idP'] == 1)
                    echo("No Results");
                ?>
            </div>
        </div>
    </body>

</html>