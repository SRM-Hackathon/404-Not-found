<?php 
session_start();
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
        <p class="select-prefer">Select Your Preference</p>
        <div class="prefer-con">
            <form action="files/setPreference.php" method="POST">
                <input type="radio" name="type" value="yetToPlan">Plan Accordingly<br>
                <input type="radio" name="type" value="planned">Planned ALready<br>
                <input type="radio" name="type" value="onTrip">On Trip<br>
                <p class="type-des"></p>
                <button type="submit" class="continue-btn" name="continue">Continue</button> 
            </form>
        </div>
        <script src="files/java3.js"></script>
    </body>
</html>