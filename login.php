
<?php include 'signupdata.php' ?>
<?php include 'includes/database.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="css/log-in.css">
</head>
<body>
    
    <div class="image-container"> 
<img src="images/login.jpeg" alt = "bg" class="image" width="100%" height="100%"> 
<img src="images/logo_virtuaew.png" width="45%" height="30%" class="logo">
<br>


<h1 class="title">VIRTUAE</h1>
<h4>Welcome back!</h4> 



</div>
<br>

<section class="container">

<h1 class="log-in"> SIGN IN</h1>
<br>

<form class="form" action="signindata.php"   method="POST">
    <br>
    <input type="text" name="email" placeholder="Email"> 
    <br>
    <br>
    <input type="password" name="password" placeholder="Password"> 
    <br>
    <a href="#" class="forgotpass">Forgot password?</a>
    <br>

    <div class="button"> 
       <input type="submit" name="login" value="Sign in" >
    </div>

</form>


<div class="line-holder">
<p class="line"><span>Log in with</span></p>
</div>


<div class="line-holder2">
    <hr class="hr1">
    <p class="login-p">Log in with </p>
    <hr class="hr2">
</div>

<div class="logo-holder"> 

<!-- facebook -->

<svg class="logos"  width="40" height="40" viewBox="0 0 13 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.18792 22.3713V12.4678H11.529L12.0256 8.59029H8.18792V6.12046C8.18792 5.00154 8.49967 4.23546 10.1055 4.23546H12.1404V0.778419C11.1503 0.672316 10.1551 0.621085 9.15942 0.62496C6.20625 0.62496 4.17867 2.42779 4.17867 5.73742V8.58304H0.859375V12.4606H4.18592V22.3713H8.18792Z" fill="black"/>
</svg>




<!-- google -->

<svg class="logos"  width="40" height="40" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.1899 7.40312C22.182 6.69121 22.1793 5.97402 22.1767 5.25947H20.0462C20.0383 5.97138 20.033 6.68593 20.0278 7.40312C19.3106 7.40576 18.5986 7.41103 17.8867 7.41894V9.55205C18.5986 9.55996 19.3158 9.56523 20.0278 9.57314C20.0357 10.2851 20.0357 10.9996 20.0409 11.7115H22.174C22.1767 10.9996 22.182 10.2851 22.1872 9.56787C22.9044 9.55996 23.6163 9.55732 24.3282 9.54941V7.41631C23.619 7.41103 22.9018 7.41103 22.1899 7.40312ZM8.21525 7.41367C8.21262 8.26533 8.21525 9.11963 8.21789 9.97129C9.64699 10.0187 11.0787 9.99765 12.5078 10.0187C11.8777 13.1907 7.56662 14.219 5.28586 12.1466C2.93918 10.3299 3.04992 6.3458 5.48889 4.6583C7.19484 3.29775 9.61799 3.63261 11.3239 4.81123C11.9937 4.1916 12.6212 3.52715 13.225 2.8416C11.8065 1.71045 10.0662 0.903611 8.21525 0.987986C4.34982 0.858787 0.798165 4.24433 0.734883 8.1124C0.487032 11.2738 2.56477 14.372 5.4968 15.4899C8.41828 16.6158 12.1651 15.8485 14.0319 13.2224C15.2632 11.5639 15.5295 9.42812 15.3845 7.42158C12.993 7.40312 10.6041 7.40576 8.21525 7.41367Z" fill="black"/>
</svg>





</div>


<div class="sign-up"> 
<p>Dont have an account?</p> <a href="signup.php" class ="signup-link"> Sign up here.</p>
</div> 


<section> 




</body>
</html>