<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emirates</title>
    <!-- links -->
    <link rel="stylesheet" type="text/css" href="css/fujairah.css">
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
            <h1 class="slider-title">FUJAIRAH</h1>
            <a href="#">
           <button>EXPLORE</button>
            </a>

        <!-- left and right buttons to scroll -->
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
          

        <!-- wraps content of page -->
        <div class="post-wrapper">

            <!-- container for images -->
            <div class="box">
                    <img src="images/emirates/dubai_bg.jpg" alt="" class="sliderImg">

                    <!-- button -->
                    <div class="hoverButton">
                    <a href="emirates.php" class="text">Dubai</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/emirates/ajm_bg.jpg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Ajman</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/emirates/shj_bg.jpeg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Sharjah</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/emirates/uaq_bg.jpg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Umm Al Quwain</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/emirates/rak_bg (2).jpg" alt="" class="sliderImg">

                    <div class="hoverButton">
                    <a href="#" class="text">Ras Al Khaima</a>
                    </div>
            </div>
            <div class="box">
                <img src="images/emirates/ad_bg.jpg" alt="" class="sliderImg">

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