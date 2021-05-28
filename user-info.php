<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/user-info.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    


</head>


<body>

    <div class="navbg"> 
    <?php include 'includes/headers-edit.php'; ?> 
    </div>

    <div class="container">

        <!-- PROFILE -->
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

        <h2>User info</h2>
        <a class="acc-s" href="account-settings.php">Account settings</a>
        
        <div class="forms">
            <p class="name-label">First Nameㅤㅤㅤㅤㅤ ㅤㅤㅤㅤㅤ ㅤㅤㅤㅤㅤㅤㅤ ㅤㅤㅤㅤㅤㅤㅤLast Name</p>
            <input class="full-name" type="text" placeholder="First Name" /> 
            <input class="last-name" type="text" placeholder="Last Name" />
            <div class="forms2">
                <p class="loc-label">Location</p>
                <input class="loc" type="text" placeholder="Location" /> 
                <p class="cp-label">Phone Number</p>
                <input class="phone-no" type="text" placeholder="e.g. + 971 12 345 6789" /> 
            </div>
            <form action="#" method="post">
                <button class="save-changes">Save Changes</button>
                <button class="delete-acc">Delete Account</button>
            </form>
        </div>
        
    </div>

    <footer></footer>

</body>
</html>