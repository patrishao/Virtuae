
<?php include 'signupdata.php'  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">


</head>


<body>

    <!-- holds the image and the logo  to pos them all at left side-->
    <div class="image-container"> 
        <img src="images/login.jpeg" alt = "bg" class="image"> 
        <img src="images/logo_virtuaew.png" width="40%" height="25%" class="logo">
        <br>

        <!-- the texts -->
        <h1 class="title">VIRTUAE</h1>
        <h4> Start your journey!</h4> 

    </div>

    <br>

    <!-- holds all form contents -->
    <section class="container">

        <!-- title of page-->
        <h1 class="log-in"> SIGN UP</h1>

        <br>

        <!-- contains all the fields  user need to fill out, and send the data in same page -->
        <form class="form" action="signup.php" method="POST">

            <!-- creating all fields -->
            <input type="text" name="firstName" placeholder="First Name" class="fl-name"> 
            <input type="text" name="lastName" placeholder="Last Name" class="fl-name"> 
            <br>
            <input type="email" name="email" placeholder="Email"  class="email"> 
            <br>
            <input type="password" name="password" placeholder="Password"> 
    
            <br>

            <!-- register button with type of submit to get all the data-->
            <div class="button"> 
               <input type="submit" name="submit" value="Register now" >
            </div>

        </form>



        <!-- link to the login page -->
        <div class="sign-up"> 
            <p>Already have an account?</p> <a href="login.php" class ="signup-link"> Log in here.</p>
        </div> 


    <section> 

</body>
</html>