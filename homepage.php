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
        <link rel="stylesheet" type="text/css" href="files/style1.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
        if(isset($_SESSION["start"]))
        {
            if($_SESSION["start"] == 1)
            echo ("<div class='logged-in'>
                     <img class='pro-photo' src='files/profile-photo.png'>
                     <p class='log-greet'>".$_SESSION['name']."</p>
                     <a href='profile.php' class='profile-link'>Profile</a>
                     <a href='account.php' class='profile-link'>Account</a>
                   </div>");
                    
        }
        ?>
        <div class="main-con">
            <div class="sub-con">
                <div class="sub-con1">
                    <div class="p-con">
                        <p>Prefect</p>
                        <p>Travel</p>
                        <p>Companion</p>
                        <p>With</p>
                        <p>TRAVOBE</p>
                        <a class="more" href="#about">KNOW MORE</a>
                    </div>
                </div>
                <div class="sub-con2">
                    <div class="signup-login-form-con">
                        <div class="login-signup-select-con">
                            <button class="sign-up select-act" onclick="function1(0)">SIGN-UP</button>
                            <button class="login" onclick="function1(1)">LOGIN</button>
                        </div>
                        <div class="sign-form form">
                            <form method="POST" action="files/register.php">
                               <input class="input" type="text" name="name" placeholder="Enter Your Name" required>
                               <input class="input" type="email" placeholder="Enter Your Email" name="email" required>
                               <input class="input" type="password" placeholder="Password" name="pwd" required>
                               <input type="submit" name="signup" class="confirm-signup" value="SIGNUP">
                            </form>
                            <p class="login-option">OR LOGIN WITH:</p>
                            <div class="fb-gmail-login-option">
                                <form method="POST" action="files/register.php">
                                <button class="fb-login">FACEBOOK</button>
                                <button class="gmail-login">GMAIL</button>
                                </form>
                            </div>
                            
                        </div>
                        <div class="login-form form">
                            <form method="POST" action="files/verify.php">
                               <input class="input" type="email" placeholder="Enter Your Email" name="email">
                               <input class="input" type="password" placeholder="Password" name="pwd">
                               <button class="confirm-login">LOGIN</button>
                            </form>
                            <p class="forgot-pwd">Forgot password?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="about">
            <h2>What Is Travobe?</h2>
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>

        <div class="steps-con">
            <p>Four easy steps to make a trip more fun</p>
            <div class="steps-div">
                <div class="step-p">
                    <div class="step">
                        <p>Step1</p>
                    </div>
                    <div class="step">
                        <p>Step2</p>
                    </div>
                    <div class="step">
                        <p>Step3</p>
                    </div>
                    <div class="step">
                        <p>Step4</p>
                    </div>
                </div>
                <div class="step-img">
                    <img src="files/Screenshot-signup.png">
                    <img src="files/Screenshot (111).png">
                    <img src="files/Screenshot-signup.png">
                    <img src="files/Screenshot (111).png">
                </div>
            </div>
            <a class="prev" onclick=plusSlide(-1) title="Previous">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="50" height="50" fill="#1959A9"/>
                    <rect x="13.5" y="25.2132" width="30" height="5" transform="rotate(-45 13.5 25.2132)" fill="white"/>
                    <rect x="16.5355" y="22" width="30" height="5" transform="rotate(45 16.5355 22)" fill="#E6DE1E"/>
                 </svg>
             </a>
            <a class="next" onclick=plusSlide(1) title="Next">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="50" height="50" transform="translate(50 50) rotate(180)" fill="#1959A9"/>
                    <rect x="36.5" y="24.7868" width="30" height="5" transform="rotate(135 36.5 24.7868)" fill="white"/>
                    <rect x="33.4645" y="28" width="30" height="5" transform="rotate(-135 33.4645 28)" fill="#E6DE1E"/>
                </svg>
            </a>
        </div>
        <script src="files/java.js"></script>
    </body>
</html>