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

        <div class="select-preferences-con">
            <form method="POST" action="preview2.php">
                <p class="place-head">Enter Place You Want To Visit:</p>
                <input class="address" type="text" name="destination" id="search" placeholder="Enter name of the destination" required><?php echo("<span style='color:red';>*</span>");?>
                <p class="date-con">Enter dates</p>
                <label>Start:</label>
                <input class="date-start" type="date" name="dateStart" ><?php echo("<span style='color:red';>*</span>");?><br>
                <label>End :</label>
                <input class="date-end" type="date" name="dateEnd"><?php echo("<span style='color:red';>*</span>");?><br><br>
                <textarea style="width:400px;height:200px;" name="descript" placeholder="Enter any specific activities(if any) you are willing to do in the trip"></textarea><br>
                <input type="submit" value="SUBMIT" name="submitP">
            </form>
            <br>
            <?php echo("<p style='color:red';>Fields marked as '*' are Mandotory</p>");?>
        </div>

        <script src="files/java3.js"></script>
        <!--
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDjsneL434IK_162H2Pq_uKkJaWssMKQw&libraries=places&callback=activatePlacesSearch"></script>
        -->
        
    </body>
</html>