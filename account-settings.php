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

    <div class="container">
        
        <div class="user-details">
            <img src="images/placeholder2.jpg" class="prof-pic">
            <div class="descs">
                <h1 class="name">PLACEHOLDER</h1>
                <p class="email">placeholder@gmail.com</p>
                <div class="location">
                    <p><img src="images/Vector.svg" class="location-img"> Placeholder, Location</p>
                </div>
            </div>
            <div class="circle">
                <img src="svg/edit.svg" class="edit">
            </div>
        </div>

        <h1>Edit Profile</h1>

        <div class="nav">
            <a class="u-info" href="user-info.php">User info</a>
            <h2>Account settings</h2>
        </div>

        <form action="#" method="post">
        <div class="forms">
            <div class="forms2">
                <p class="email-label">Email</p>
                <input class="e-mail" type="text" placeholder="kayapaba@gmail.com" /> 
                <p class="pass-label">Password</p>
                <div class="change-pass">
                <input class="password" type="text" placeholder="" /> 
                <form action="#" method="post">
                    <button class="change">Change</button>
                </form>
                </div>
            </div>
       
            <input class="save-changes" type="submit" value="Save Changes">
            <input class="delete-acc" type="submit" value="Delete Account">
            </form>
        </div>

    </div>

    <footer>ㅤ</footer>

</body>
</html>