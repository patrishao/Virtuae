<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emirates</title>
    <link rel="stylesheet" href="css/rak-em.css">
     <!-- link for transition-->
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
    <div id="navbar">
        <?php include 'includes/headers.php';?> 
    </div>

    <!-- wraps all content -->
    <div class="wrapper">
        <div class="container">

            <!-- title and button -->
            <h1 class="title">RAS AL KHAIMA</h1>
            <a href="#"><button>Explore</button></a>

            
            <!--  controls
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>-->

            <!-- contains slider images -->
            <div class="slider">

                <!-- slider image container -->
                <div class="box">
                        <img src="images/emirates/fuj_bg.jpg" alt="" class="sliderImg">

                        <!-- button -->
                        <div class="hoverButton">
                        <a href="fuj-em.php" class="text">Fujairah</a>
                        </div>
                </div>
                <div class="box">
                        <img src="images/emirates/ad_bg.jpg" alt="" class="sliderImg">

                        <!-- button -->
                        <div class="hoverButton">
                        <a href="emirates.php" class="text">Abu Dhabi</a>
                        </div>
                </div>
                <div class="box">
                        <img src="images/emirates/dubai_bg.jpg" alt="" class="sliderImg">

                        <!-- button -->
                        <div class="hoverButton">
                        <a href="dub-em.php" class="text">Dubai</a>
                        </div>
                </div>
                <div class="box">
                        <img src="images/emirates/shj_bg.jpeg" alt="" class="sliderImg">

                        <!-- button -->
                        <div class="hoverButton">
                        <a href="shj-em.php" class="text">Sharjah</a>
                        </div>
                </div>
                <div class="box">
                        <img src="images/emirates/ajm_bg.jpg" alt="" class="sliderImg">

                        <!-- button -->
                        <div class="hoverButton">
                        <a href="ajm-em.php" class="text">Ajman</a>
                        </div>
                </div>
                <div class="box">
                        <img src="images/emirates/uaq_bg.jpg" alt="" class="sliderImg">

                        <!-- button -->
                        <div class="hoverButton">
                        <a href="uaq-em.php" class="text">Umm Al Quwain</a>
                        </div>
                </div>
            </div>
            
        </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="javascript/emirates.js"></script>

</body>
</html>