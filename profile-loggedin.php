

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



</head>
<body>


    
    <div class="container-1"> </div>
        <!-- PROFILE -->
        <div class="profile-container">
            <div class="profile-details">
            <!-- displaying the name of the user -->
                <div class="top-line">
                    <h1> <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] ?> </h1>
                
                    <div class="wrapper">
                    <a href="account-settings.php"> 
                    <button class="btn">
                        EDIT PROFILE
                    </button> </a>
                    <a href="#">
                    <button class="btn">
                        LOG OUT
                    </button> </a>
                    </div>

                </div>

             <!-- displaying the email from the databsase -->
                <p class="profile-email"> <?php echo $_SESSION['email'] ?>  </p>
                    
                <p class="profile-location"><img src="images/Vector.png" class="location-img">
                Placeholder, Location</p>
                <div class="wrapper2">
                    <a href="account-settings.php"> 
                    <button class="btn">
                        EDIT PROFILE
                    </button> </a>
                    <a href="#">
                    <button class="btn">
                        LOG OUT
                    </button> </a>
                    </div>
                <div class="line"></div>
               
            </div>


        </div>




    <div class="container-2">
        <div class="wrapping2">
        <div class="rec-title">Recommended for you</div>
 
        </div>

    <div class="showcase">

        <div class="row">
            <!-- card -->
            <div class="extra-wrapper">
            <div class="card">
                <div class="imgCard">
                    <img src="images/ajman/ajment1A.jpg" alt="" srcset="">
                </div>
                <div class="cardContent">
                    <div class="contents">
                        <div class="contentTitle">
                            <h3>Ajman City Centre</h3>
                            <h4>Ajman</h4>
                        </div>
                        <p>City Centre Ajman, conveniently located on Al Ittihad Street, is the largest shopping and entertainment destination in the emirate with 34,000sqm of retail space. The mall is home to more than 79 international...</p>
                        <div class="cardButton">
                                <a href="#"><button class="moreContent">READ MORE</button></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- card -->
            <!-- card -->
            <div class="extra-wrapper">
            <div class="card">
                <div class="imgCard">
                    <img src="images/ajman/ajment1A.jpg" alt="" srcset="">
                </div>
                <div class="cardContent">
                    <div class="contents">
                        <div class="contentTitle">
                            <h3>Ajman City Centre</h3>
                            <h4>Ajman</h4>
                        </div>
                        <p>City Centre Ajman, conveniently located on Al Ittihad Street, is the largest shopping and entertainment destination in the emirate with 34,000sqm of retail space. The mall is home to more than 79 international...</p>
                        <div class="cardButton">
                                <a href="#"><button class="moreContent">READ MORE</button></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- card -->
            <!-- card -->
            <div class="extra-wrapper">
            <div class="card">
                <div class="imgCard">
                    <img src="images/ajman/ajment1A.jpg" alt="" srcset="">
                </div>
                <div class="cardContent">
                    <div class="contents">
                        <div class="contentTitle">
                            <h3>Ajman City Centre</h3>
                            <h4>Ajman</h4>
                        </div>
                        <p>City Centre Ajman, conveniently located on Al Ittihad Street, is the largest shopping and entertainment destination in the emirate with 34,000sqm of retail space. The mall is home to more than 79 international...</p>
                        <div class="cardButton">
                                <a href="#"><button class="moreContent">READ MORE</button></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- card -->

        
        </div>

     

    </div>
    
    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

 <script>
         $('.row').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1900,
            infinite: true,

         });
    </script> 
</body>
</html>