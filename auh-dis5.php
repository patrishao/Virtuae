<?php 
include 'includes/database.php';
include 'includes/fetchdata.php';

$pageName = "auh-dis4"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-scale=1.0">
    <title>Emirates Palace</title>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/places.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>
    <div id="navbar"> 
        <?php include 'includes/headers-edit.php';?>
    </div>
    
    <!-- TITLE -->
    <div class="wrapper1">
        <div class="title-container">
            <div class="another-container1">
                <div class="title-slider"> <!-- images the one sa top left -->
                        <div><img src="images\auh-pictures\Discover\Emirates Palace\auhdis5E.jpg" class="picture" /></div>
                        <div><img src="images\auh-pictures\Discover\Emirates Palace\auhdis5F.jpg" class="picture" /></div>
                        <div><img src="images\auh-pictures\Discover\Emirates Palace\auhdis5B.jpg" class="picture" /></div>
                </div>
            </div>
            <div class="another-container">
                <h1 class="title1"> EMIRATES PALACE </h1> <!-- title -->
                <p class="location-title"> ABU DHABI </p> <!-- location-->
                <a href="tour-form.php"><button class="line1"> TOUR </button></a><!-- do not replace this da botan -->
        </div>
    </div>
    </div>
    <!-- CATEGORIES -->
    <div class="wrapper3"> <!-- not to be touched -->
        <div class="categories">
                <div class="box" onClick="history()"><a>INFO</a></div>
                <div class="box" onClick="whttodo()"><a>WHAT TO DO</a></div>
                <div class="box" onClick="timings()"><a>TIMINGS</a></div>
                <div class="box" onClick="events()"><a>EVENTS</a></div>
                <div class="box" onClick="vt()"><a>VIRTUAL TOUR</a></div>
                <div class="box" onClick="reviews()"><a>REVIEWS</a></div>
                <div class="box" onClick="media()"><a>MEDIA</a></div>
        </div>
    </div>

    <!-- BACKGROUND 1 -->

            <div class="rectangle"></div> <!-- ignore -->

    <!-- INFORMATION -->
    <div class="rectangle2"></div>
    <div class="wrapper2">
        <div class="info-hist-box" id="history">
        
         <div class="layer1">
         
            <div class="left-images"> 
            <h2 class="info-title"> Information </h2> <!-- images on the left -->

                <div class="img-set"><img src="images\auh-pictures\Discover\Emirates Palace\auhdis5A.jpg" class="smallimg"/></div>
                <div class="img-set"><img src="images\auh-pictures\Discover\Emirates Palace\auhdis5G.jpg" style="object-position: 0 -50px;" class="smallimg"/></div>
                <div class="img-set"><img src="images\auh-pictures\Discover\Emirates Palace\auhdis5H.jpg" style="object-position: 0 -50px;" class="smallimg"/></div>

            </div>
            <div class="info-container">

                <div class="dl-bm">

                    <!-- change the path to this to download! simply look at the files to ur left (if ur using visual code)
                    right click > copy path and then paste it on the href ! -->
                    <a href="download\Abu Dhabi\Discover\Emirates Palace.docx"> 
                    <button><img src="images/Desktop Download.png"/></button>
                    </a>
                    
                </div>

            <h2 class="info-title1"> Information </h2> <!-- description feel free to add per paragraph -->

                <p class="info-description"> 
                    
                    The Emirates Palace Hotel is the second seven-star hotel in the world, with the other being 
                    the Burj Al Arab in Dubai. The Palace opened its doors in 2005, and it has 394 luxury rooms 
                    and suites to accommodate visitors coming to Abu Dhabi. Some of the most famous regulars at 
                    the Emirates Palace are royalty.

                    <br><br>

                    This lavish property is world-famous thanks to its enchanting Arabesque style, award-winning 
                    five-star hospitality and wonderfully unique and authentic local experiences. Located in the 
                    heart of Abu Dhabi, Emirates Palace's impressive offerings include a pristine 1.3km private 
                    beach, landscaped pools, a private marina overlooking a natural bay, a luxe spa offering 
                    indulgent treatments, including a 24-karat gold facial, and some of the world's best 
                    restaurants.

                   <br><br>

                </p>           
              
            </div>
            
         </div>
        </div>
        </div>



        <!-- WHAT TO DO -->
        <div class="wtd-container" id="wtd-container">
        <div class="blackbg">
        <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5F.jpg" class="wtd-bg"/> <!-- the bg for the entirety of the what to do part -->
        </div>
        <div class="scroller-area">

            
            <div class="contents-box">
                <div class="contents-container1">
                    <h2 class="contents-title1"> What to do </h2> <!-- this is the what to do part -->
                    <p class="contents-desc1">

                        This iconic hotel is perfect for a once-in-a-lifetime holiday, a magical wedding, or 
                        impressive corporate events and meetings in the city’s largest hotel conference centres.

                    </p>
                </div>
            </div> 
         
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5H.jpg" />
                </div>
                <div class="contents-container">
                    <h2 class="contents-title"> Tennis </h2>
                    <p class="contents-desc"> 

                        Emirates Palace Tennis Academy by PSS Emirates offers an extensive tennis programme, 
                        delivered by a professional Resident Tennis Coach.

                    </p> <!-- put the actual activities here -->
                </div>
            </div> 


            <div class="contents-box">
                <div class="contents-img">
                    <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5C.jpg" />
                </div>
                <div class="contents-container">
                    <h2 class="contents-title"> Exercising </h2>
                    <p class="contents-desc">

                        If you prefer the exhilaration of a fast paced activity and want to maximise your experience 
                        of the best in Abu Dhabi hotel facilities, allow Emirates Palace to arrange a bicycle ride 
                        or jog through manicured gardens.

                    </p> <!-- put the actual activities here -->
                 </div>
            </div> 


        </div>
        </div>
        <!-- -->

        <!-- TIMINGS -->

        <div class="timing-container">
            <h2 class="timing-title">TIMINGS</h2>
            <div class="wrapper3">
            <div class="timing-week"> <!-- to edit this part go to the javascript below vvv -->
                <div class="days" onClick="sun()"><a>SUNDAY</a></div>
                <div class="days" onClick="mon()"><a>MONDAY</a></div>
                <div class="days" onClick="tues()"><a>TUESDAY</a></div>
                <div class="days" onClick="wed()"><a>WEDNESDAY</a></div>
                <div class="days" onClick="thurs()"><a>THURSDAY</a></div>
                <div class="days" onClick="fri()"><a>FRIDAY</a></div>
                <div class="days" onClick="sat()"><a>SATURDAY</a></div>
            </div>
            </div>

                <div class="t-container"> <!-- to edit this part go to the javascript below vvv -->
                    <div class="timing-info" id="timing-info"> <!-- its rlly all the way down there -->
                        <div class="time">
                        <p id="t-time"></p> 
                        </div>
                    </div>
                </div> 

        </div>
        <!-- -->


        <!-- calendar -->
       
        <h2 class="calendar-title">EVENTS</h2>
        <div class="calendar-bg"> 
       
        <div class="main">
        <div class="sideb">
        <div class="header"><i class="fa fa-angle-left" aria-hidden="true">
        </i><span><span class="month"> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        <div class="calender">
        <table>
        <thead>
          <tr class="weedays">
            <th data-weekday="sun" data-column="0">Sun</th>
            <th data-weekday="mon" data-column="1">Mon</th>
            <th data-weekday="tue" data-column="2">Tue</th>
            <th data-weekday="wed" data-column="3">Wed</th>
            <th data-weekday="thu" data-column="4">Thu</th>
            <th data-weekday="fri" data-column="5">Fri</th>
            <th data-weekday="sat" data-column="6">Sat</th>
          </tr>
        </thead>
        <tbody>
          <tr class="days" data-row="0">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="1">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="2">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="3">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="4">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="5">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
        </tbody>
        </table>
        </div>
        <div class="showDate"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
        </div>
        <div class="right-wrapper">
        <div class="header"><span></span></div><span class="day"></span><span class="month"></span>
        </div>
        </div>

        </div>

    <!-- events -->
    <div class="wrapper4">
        <div class="event-listing">
         <div class="e-row">

            <div class="event-content">
                <div class="extra-wrapper"> <!-- these are for the events -->
                    <div class="e-date"> 
                        <div class="e-month"> JUN </div> <!-- month -->
                        <div class="e-number"> 24 </div> <!-- date -->
                    </div>
                    <div class="name-event"><p class="en-adjusting"> Dubai Summer Surprises</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> JUL </div> <!-- month -->
                        <div class="e-number"> 19 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Eid Al Adha</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> AUG </div> <!-- month -->
                        <div class="e-number"> 5 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Fall/Winter Collection Launch Sale</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> AUG </div> <!-- month -->
                        <div class="e-number"> 15 </div> <!-- date -->
                    </div>
                    <div class="name-event"><p class="en-adjusting">Back to School Sale</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> SEP </div> <!-- month -->
                        <div class="e-number"> 07 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">World Future Enerygy Summit 2021</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> SEP </div> <!-- month -->
                        <div class="e-number"> 19 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Dubai Home Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 10 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Dahawi Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 12 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah World Championship Week 2021</p></div> <!-- name of the event -->
                </div>

            </div>


        </div>

        <div class="e-row">

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> OCT </div> <!-- month -->
                        <div class="e-number"> 21 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Expo 2020</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> OCT </div> <!-- month -->
                        <div class="e-number"> 29 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Diwali Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">  
                <div class="extra-wrapper">   
                    <div class="e-date">
                        <div class="e-month"> N0V </div> <!-- month -->
                        <div class="e-number"> 03 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah National Bookfair</p></div> <!-- name of the event -->
                </div> 

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> NOV </div> <!-- month -->
                        <div class="e-number"> 08 </div> <!-- date -->
                    </div> 
                    <div class="name-event"> <p class="en-adjusting">ADIPEC 2021</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> NOV </div> <!-- month -->
                        <div class="e-number"> 14 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah Film Platform</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">  
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 2 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">National UAE Day</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 15 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Dubai Shopping Festival</p></div> <!-- name of the event -->
                </div>

            </div>

            <div class="event-content">
                <div class="extra-wrapper">
                    <div class="e-date">
                        <div class="e-month"> DEC </div> <!-- month -->
                        <div class="e-number"> 16 </div> <!-- date -->
                    </div>
                    <div class="name-event"> <p class="en-adjusting">Sharjah Focal Point 2021</p></div> <!-- name of the event -->
                </div>

            </div>

            
        </div>

        </div>
    </div>

    <!-- -->

    <!-- VIRTUAL TOUR -->
    <h2 class="vt-title">TOUR & LOCATION</h2>

    <!-- to be replaced -->
    <!-- virtual tour -->
    <iframe width="100%" height="1000px" src="https://poly.google.com/view/0VkUaQeCszY/embed?chrome=min" frameborder="0" style="border:none;" allowvr="yes" allow="vr; xr; accelerometer; magnetometer; gyroscope; autoplay;" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" ></iframe>

    <!-- google maps -->   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.686826851502!2d54.31509461428009!3d24.46164846715123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e6596f8aa2c21%3A0x634ef65bd7bd41c8!2sEmirates%20Palace!5e0!3m2!1sen!2sae!4v1622861587337!5m2!1sen!2sae"
    width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <!-- -->
    
    <!-- COMMENTS -->
    
    <h2 class="review-title">REVIEWS</h2>
    
    <script src="javascript/alerts.js"> </script>
    
    <div class="review-container" id="review-container">
 
    <div class="user-review">
   
       <?php 
       
            // fetching all the data from this certain page
              $query = "SELECT * from comments WHERE comment_page = '$pageName' "; 
              $query .= "ORDER BY comment_id DESC";
              $select_customers = mysqli_query($connection, $query);
    
                while($row = mysqli_fetch_assoc($select_customers)){
                    $comment_id = $row['comment_id'];
                    $comment_page = $row['comment_page'];
                    $comment_date = $row['comment_date'];
                    $comment_author = $row['comment_author'];
                    $comment_email = $row['comment_email'];
                    $comment_contents = $row['comment_contents'];
       ?>

        <!-- displaying all the comments using the while loop in the php, I didn't close it. -->
        <div class="main-review review"> 
            <div class="r-box main-box">
                 <div class="user"> <?php  echo $comment_author?> <div class="dot"></div>
                 <span class="date">  <?php  echo $comment_date?> </span></div>
                 <div class="review-content"> <?php  echo $comment_contents?> </div>
            </div>
        </div>

        <?php } ?>
          <!-- closing the while loop -->
        
    </div>

    </div>
    
    <!-- including the other php file that handles the form -->
    <?php  include 'includes/comments.php' ?>
    
    <form class="wr-container" id="wr-container" method="post" action="">
    
    <div class="write-review">

        <!-- getting the name of whoever posted the comment -->
        <input type="hidden" name="author" value=" <?php echo $firstName . " " . $lastName ?>  " >

        <!-- hidden values to get the user's who's logged -->
        <input type="hidden" name="email" value=" <?php echo $email ?>  " >

        <!-- getting the page name to know where is the user commenting -->
        <input type="hidden" name="page" value="<?php echo $pageName?>" >

        <!-- adding a review -->
        <textarea class="form-control" id="inquire" name="review" rows="4" cols="50" placeholder="Add a review..."></textarea>

    </div>

    <!-- buttons to send  -->
    <input type="submit" class="post btn" value="Post" name="post">
    <input type="submit" class="cancel btn" value="Cancel" name="cancel">
    
    </div>
    </form>

    <!-- -->

    <section id="media-wrappper">
        <h2 class="media-title">MEDIA</h2> 
        <div class="showcase">

        <div class="row row1">
            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5A.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> A cafe in Emirates Palace </p>
            </div>
            
            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5B.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> 1 bedroom with a King-sized bed </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5C.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> Fine dining at Emirates Palace </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5D.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> A romantic night </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5E.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> Dining at Emirates Palace </p>
            </div>
        </div>
        <div class="row row2">
            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5F.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> View of Emirates Palace at night </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5G.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> Swimming pools at Emirates Palace </p>
            </div>
            
            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5H.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> Kiddie Playground </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5A.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> A cafe in Emirates Palace </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5B.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> 1 bedroom with a King-sized bed </p>
            </div>

        </div>
        <div class="row row3">
            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5C.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> Fine dining at Emirates Palace </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5D.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> A romantic night </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5F.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> View of Emirates Palace at night </p>
            </div>

            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5G.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> Swimming pools at Emirates Palace </p>
            </div>
            
            <div class="img-media">
                <img src="images\auh-pictures\Discover\Emirates Palace\auhdis5H.jpg" class="fiximg" /> <!-- img! -->
                 <!-- description time, add smth like idk "fun time family!" -->
                <p> Kiddie Playground </p>
            </div>

        </div>

        </div>

    </section>
        
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eab9b1f412.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
            

    <script src="javascript/function.js"></script> <!-- calendar -->

    <script>
        //timing content
        $('#timing-info').hide(); //here is where u edit the time
        function sun(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Open 24 hours'); //so put the timings here

        }
        function mon(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Open 24 hours');//so put the timings here

        }
        function tues(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Open 24 hours');//so put the timings here
  
        }
        function wed(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Open 24 hours');//so put the timings here
  
        }
        function thurs(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Open 24 hours');//so put the timings here
            
        }
        function fri(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Open 24 hours');//so put the timings here

        }
        function sat(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Open 24 hours');//so put the timings here
   
        }

        //reply function
        function reply(){
        document.getElementById("reply-function").style.display = "inline-block";
        document.getElementById("wr-container").style.display = "none";
            }

        function closeReply(){
            document.getElementById("reply-function").style.display = "none";
            document.getElementById("wr-container").style.display = "block";
        }

        //carousel
        $('.row').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            variableWidth: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,

         });

         $('.scroller-area').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            adaptiveHeight: true,
            variableWidth: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            infinite: true,

         });

         $('.e-row').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            slidesToShow: 3,
            autoplay: false,
            autoplaySpeed: 3000,
            infinite: true,

         });
         
         $('.title-slider').slick({
            prevArrow: false,
            nextArrow: false,
            draggable: true,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,

         });
        
         

    
         //scroll to
        function history(){
            window.scroll({
                top: 1000,
                behavior: "smooth"
            });
        }
        function whttodo(){
            window.scroll({
                top: 2200,
                behavior: "smooth"
            });
        }
        function timings(){
            window.scroll({
                top: 2800,
                behavior: "smooth"
            });
        }
        function events(){
            window.scroll({
                top: 3500,
                behavior: "smooth"
            });
        }
        function vt(){
            window.scroll({
                top: 4600,
                behavior: "smooth"
            });
        }
        function reviews(){
            window.scroll({
                top: 5600,
                behavior: "smooth"
            });
        }
        function media(){
            window.scroll({
                top: 6700,
                behavior: "smooth"
            });
        }
    </script> 
 
    
    </body>
</html>