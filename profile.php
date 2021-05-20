
<!-- starting a session to access the other data  -->
<?php session_start() ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/profile.css">


</head>
<body>
    <div class="navbg"> 
    <?php include 'includes/headers-edit.php'; ?> 
   

    <div class="container-1">

           <!-- BACKGROUND -->
           <div class="background-container">
             <div class="rectangle"></div>
           </div>

    </div>
<div class="display" >

<!-- if there is an active session display the profile-loggedin -->
     <?php if ($_SESSION){
         include 'profile-loggedin.php'; 
     } 

     
     else { ?>
     <!-- else display nothing -->
          <p class="not-logged"> You are not logged in. Please login </p>  <a href="login.php" class="here"> here. </a>
   <?php   }

    ?>
 </div>


    
    
   
</body>
</html>