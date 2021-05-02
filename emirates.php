<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emirates</title>
    <!-- links -->
    <link rel="stylesheet" type="text/css" href="css/emirates.css">
    <!-- link for transition -->
    <link rel="stylesheet" type="text/css" href="css/trans-page.css">
    <!-- Font Awesome / link for icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>
<body>
    <!-- navigation bar -->
    <div class="navbar">
        <?php include 'includes/headers.php';?>         

    <!-- wraps whole page -->
    <div class="wrapper">

        <div class="post-slider">
            <h1 class="slider-title">DUBAI</h1>
            <a href="dubai.php">
           <button>EXPLORE</button>
            </a>

        <!-- left and right buttons to scroll -->
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
          

        <!-- wraps content of page -->
        <div class="post-wrapper">

            <!-- container for images -->
            <div class="box">
                    <img src="images/fuj_bg.jpg" alt="" class="sliderImg">

                    <!-- button -->
                    <div class="hoverButton">
                    <a href="fujairah.php" class="text">Fujairah</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/ajm_bg.jpg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Ajman</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/shj_bg.jpeg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Sharjah</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/uaq_bg.jpg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Umm Al Quwain</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/rak_bg (2).jpg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Ras Al Khaima</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/ad_bg.jpg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Abu Dhabi</a>
                    </div>
            </div>
            </div>
        </div>
    </div>

    
    
    </div>


    </div>

    <!-- JsQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- script link -->
    <script  type="text/javascript" src="javascript/emirates.js">
    </script>

</body>
</html>