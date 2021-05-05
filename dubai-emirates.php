<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubai</title>
    <link rel="stylesheet" type="text/css" href="css/dubai-emirates.css">
     <!-- Font Awesome / link for icons -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
    <div class="navbar">
        <?php include 'includes/headers.php';?> 

    <!-- wraps whole content -->
    <div class="wrapper">
        <div class="container">
            <div id="title">
                <h1>DUBAI</h1>
            </div>

            <div class="categories">
                <a href="#" class="box">EVENTS</a>
                <a href="#" class="box">DINE</a>
                <a href="#" class="box">ACTIVITIES</a>
                <a href="#" class="box">SIGHTS TO SEE</a>
                <a href="#" class="box">DISCOVER</a>
                <a type="button" id="showCateg" class="box">MOSQUES</a>
            </div>

        </div>
    </div>
    </div>  
    <!--  -->

    <div class="categ" id="categShow" style="display: none;">
        <div class="post-categ">
        <h1>MOSQUES IN DUBAI</h1>

        
        <i class="fas fa-chevron-left prev-categ"></i>
        <i class="fas fa-chevron-right next-categ"></i>
 
        <div class="slider">
            <div class="post-slider">
                <a href="emirates.php"><img src="images/emirates/ad_bg.jpg" alt="" class="categ-img">
                <div class="categ-info">
                    <h3>Abu Dhabi</h3>
                    <h4>Abu Dhabi</h4>
                </div></a>
            </div>

            <div class="post-slider">
                <a href="#"><img src="images/marina.jpg" alt="" class="categ-img">
                <div class="categ-info">
                    <h3>Dubai Marina</h3>
                    <h4>Dubai</h4></a>
                </div>
            </div>

            <div class="post-slider">
                <a href="#"><img src="images/marina.jpg" alt="" class="categ-img">
                <div class="categ-info">
                    <h3>Dubai Marina</h3>
                    <h4>Dubai</h4></a>
                </div>
            </div>

            <div class="post-slider">
                <a href="#"><img src="images/marina.jpg" alt="" class="categ-img">
                <div class="categ-info">
                    <h3>Dubai Marina</h3>
                    <h4>Dubai</h4></a>
                </div>
            </div>
            
            <div class="post-slider">
                <a href="#"><img src="images/marina.jpg" alt="" class="categ-img">
                <div class="categ-info">
                    <h3>Dubai Marina</h3>
                    <h4>Dubai</h4></a>
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
     <script  type="text/javascript" src="javascript/dub-em.js">
    </script>

    <!-- script link -->
    <script>
        $(document).ready(function(){
            $("#showCateg").click(function(){
                $("#categShow").css("display","block");
            })
        })
    </script>

</body>
</html>