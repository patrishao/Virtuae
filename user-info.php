<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/user-info.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    


</head>
<body>

    <div class="navbg"> 
    <?php include 'includes/headers-edit.php'; ?> 
    </div>

    <div class="container-1">

        <!-- BACKGROUND -->
        <div class="background-container"></div>

        <!-- PROFILE -->
        <div class="profile-container">
            <div class="profile-pic"></div>
        </div>
        <div class="circle"></div>
        <img src="svg/edit.svg" class="edit">
        <div class="user-details">
            <h1 class="name">PLACEHOLDER</h1>
            <p class="email">placeholder@gmail.com</p>
            <img src="images/Vector.png" class="location-img">
            <p class="location">Placeholder, Location</p>
        </div>

        <h1>Edit Profile</h1>

        <h2>User info</h2>
        <a class="acc-s" href="account-settings.php">Account settings</a>
        
        <div>
        <p>First Nameㅤㅤㅤㅤㅤ ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ ㅤㅤㅤㅤㅤㅤㅤㅤ Last Name</p>
        <p class="two">Location</p>
        <p class="three">Phone Number</p>

    </div>

    <!-- <div class="login-form">
        <h3>First Name</h3>
        <form action="#" method="post">    
            
        <input type="search" placeholder="Full Name"/>
        <input type="text" name="user" placeholder="Last Name">
    </div> -->
        
    <form action="#" method="post">
        <input class="full-name" type="text" placeholder="Full Name" /> 
        <input class="last-name" type="text" placeholder="Last Name" /> 
    </form>

</body>
</html>