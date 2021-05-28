<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" type="text/css" href="css/account-settings.css">
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

        <a class="u-info" href="user-info.php">User info</a>
        <h2>Account settings</h2>

        <p>Email</p>
        <p class="two">Password</p>

        <form action="#" method="post">
        <input class="email-in" type="text" placeholder="placeholder@gmail.com" /> 
        <input class="pw" type="text" placeholder="" /> 

        <button class="btn change-pw">Change</button>

        <button class="btn save-changes">Save Changes</button>
        <button class="btn delete-acc">Delete Account</button>

    </div>

    <footer>ㅤ</footer>

</body>
</html>