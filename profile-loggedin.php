<?php 

// including the connection and getting the data of user
include 'includes/database.php';


if (isset($_SESSION['id'])){
    
   // get and store the id of user into $idUser var
     $idUser = $_SESSION['id'];

     //writing the query to select the user with the email i've gotten 
     $query = "SELECT * FROM users WHERE id = '{$idUser}'";

     //writing the query to database   
     $select_profile = mysqli_query($connection, $query);

     //getting all the data of user and store it into a new variable
     while($row = mysqli_fetch_array($select_profile)){

        $id  = $row['id'];  
        $email = $row['email'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $password = $row['password'];
        $location = $row['location'];
        $number = $row['number'];
       
     }


}



?>

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
                    <h1> <?php echo $firstName. " " . $lastName ?> </h1>
                
                    <div class="wrapper">
                    <a href="account-settings.php"> 
                    <button class="btn">
                        EDIT PROFILE
                    </button> </a>
                    <a href="includes/logout.php">
                    <button class="btn">
                        LOG OUT
                    </button> </a>
                    </div>

                </div>

             <!-- displaying the email from the databsase -->
                <p class="profile-email"> <?php echo $email ?>  </p>
                    
                <p class="profile-location"><img src="images/Vector.png" class="location-img">
             
                <?php if(!$location) {
                        echo "No location yet";
                    }

                    // if a user has a location, display the location
                    else{
                        echo $location;
                    }
                    
                    ?>

            </p>

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
        <div class="rec-title">RECOMMENDED FOR YOU</div>
 
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
                                <a href="ajm-ent1.php"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/abu dhabi/auhent1A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Warner Bros. World</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Warner Bros. World Abu Dhabi is an indoor amusement park in Abu Dhabi, United Arab Emirates, owned and developed by Miral Asset Management at an expected cost of $1 billion. The park features characters...</p>
                    <div class="cardButton">
                            <a href="auh-ent1.php"><button class="moreContent">READ MORE</button></a>
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
                <img src="images\umm al quwain\Entertainment\Dreamland Aqua Park\uaqentB5.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dreamland Aqua Park</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Sitting on Umm Al Quwain’s scenic coastline, Dreamland Aqua Park is one of the oldest waterparks in the UAE. Spread over an area of 250,000 square metres, the water park was established in 1997. Since then...</p>
                    <div class="cardButton">
                            <a href="uaq-ent2.php"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/dubai/Dubai-Opera-House.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Opera</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Dubai Opera is a definitive international destination for performing arts and world-class entertainment productions with its unique 2000-seat multi-format theatre. Dubai Opera passionately embraces... </p>
                    <div class="cardButton">
                            <a href="dxb-ent1.php"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/dubai/dxbact5F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Global Village</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Global Village combines cultures of 90 countries across the world at one place. It claims to be the world's largest tourism, leisure, shopping and entertainment project. It is the region's first cultural, entertainment, family and shopping destination.</p>
                    <div class="cardButton">
                            <a href="dxb-act5.php"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/sharjah/AL-NOOR-ISLAND-67-1597132394752_173dc825102_original-ratio.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Noor Island</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>As one of the main family attractions in Sharjah, Al Noor Island is known for its tropical biosphere filled with floating butterflies. Families can pick up a snack and a beverage from a cafe serving healthy...</p>
                    <div class="cardButton">
                            <a href="shj-ent1.php"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/dubai/dubaiframe.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Frame</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Dubai Frame opened to the public in January 2018 and has quickly become one of the most popular attractions in Dubai and in the UAE. If you’re looking for a great way to spend your day in Dubai, visiting the Dubai Frame...</p>
                    <div class="cardButton">
                            <a href="dxb-sts2.php"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/ajman/IMG_2152.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Dhow Building Yard</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Historically, wooden dhows played a vital role in fishing, pearling and trading across the region. Ajman’s Dhow Yard remains one of the world's largest dhow-building centres. You’ll find the...</p>
                    <div class="cardButton">
                            <a href="ajm-dis1.php"><button class="moreContent">READ MORE</button></a>
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