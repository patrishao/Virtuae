

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>



</head>
<body>


    
    <div class="container-1">


        <!-- PROFILE -->
        <div class="profile-container">
        <div class="profile-pic"></div>
            <div class="profile-details">

            <!-- displaying the name of the user -->
                <h1>      <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] ?> </h1>

             <!-- displaying the email from the databsase -->
                <p class="profile-email"> <?php echo $_SESSION['email'] ?>  </p>


                    <img src="images/Vector.png" class="location-img">
                <p class="profile-location">Placeholder, Location</p>
            </div>
        </div>

        <div class="line"></div>
    </div>


    <div class="container-2">

        <!-- REVIEWS -->
        <div class="reviews-container">
            <div class="review-box">
                <img src="images/PLACEHOLDER.png" class="review-img">
                <h2>AREA PLACE</h2>
                <p class="review-content"> 
                    Amet minim mollit non deserunt ullamco est sit aliqua dolor 
                    do amet sint. Velit officia consequat duis enim velit mollit. 
                    Exercitation veniam consequat sunt nostrud amet. </p>
            </div>
            <div class="review-box">
                <img src="images/PLACEHOLDER.png" class="review-img">
                <h2>AREA PLACE</h2>
                <p class="review-content"> 
                    Amet minim mollit non deserunt ullamco est sit aliqua dolor 
                    do amet sint. Velit officia consequat duis enim velit mollit. 
                    Exercitation veniam consequat sunt nostrud amet. </p>
            </div>

            <div class="review-box">
                <img src="images/PLACEHOLDER.png" class="review-img">
                <h2>AREA PLACE</h2>
                <p class="review-content"> 
                    Amet minim mollit non deserunt ullamco est sit aliqua dolor 
                    do amet sint. Velit officia consequat duis enim velit mollit. 
                    Exercitation veniam consequat sunt nostrud amet. </p>
            </div>
        
        </div>

    </div>
</body>
</html>