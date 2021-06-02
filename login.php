
<?php include 'signupdata.php' ?>
<!-- <?php include 'includes/database.php' ?> -->

<?php session_start(); ?>

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
    
    <!-- contains the image, logo and the title -->
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

            <!-- creating the fields needed to signin and send the data to signindata.php -->
            <form class="form" action="signindata.php"   method="POST">
             <br>
                 <input type="email" name="email" placeholder="Email"> 
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


        <!-- checks if login error -->
        <?php

             if (isset($_SESSION['message']))
            
            { ?> 

              <h2> <?php echo $_SESSION['message']; ?> </h2>  
              <?php   unset($_SESSION['message']); 
            }
       ?>



        <div class="sign-up"> 
          <p>Dont have an account?</p> <a href="signup.php" class ="signup-link"> Sign up here.</p>
        </div> 


    <section> 


</body>
</html>