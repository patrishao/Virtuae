<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-scale=1.0">
    <title> Sharjah Aquarium </title>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/places.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>
    <div id="navbar"> 
            <?php 

            include 'includes/database.php';
            include 'includes/fetchdata.php' ;
            include 'includes/headers-edit.php';

            //$pageName = "name of the page"; 

            //like;
            $pageName = "shj-ent2"; 

            ?>
    </div>
    
    <!-- TITLE -->
    <div class="wrapper1">
        <div class="title-container">
            <div class="another-container1">
                <div class="title-slider"> <!-- images the one sa top left -->
                        <div><img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2E.JPG" class="picture" /></div>
                        <div><img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2G.JPG" class="picture" /></div>
                        <div><img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2C.JPG" class="picture" /></div>
                </div>
            </div>
            <div class="another-container">
                <h1 class="title1">  Sharjah Aquarium  </h1> <!-- title -->
                <p class="location-title"> Sharjah </p> <!-- location-->
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
                <div class="img-set"><img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2C.JPG" class="smallimg"/></div>
                <div class="img-set"><img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2A.JPG" class="smallimg"/></div>
                <div class="img-set"><img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2E.JPG" class="smallimg"/></div>
            </div>
            <div class="info-container">
                <div class="dl-bm">

                    <!-- change the path to this to download! simply look at the files to ur left (if ur using visual code)
                    right click > copy path and then paste it on the href ! -->
                    <a href="download\Sharjah\Entertainment\Sharjah Aquarium.docx"> 
                    <button><img src="images/Desktop Download.png"/></button>
                    </a>
                    
                </div>
            <h2 class="info-title1"> Information </h2> <!-- description feel free to add per paragraph -->
                <p class="info-description"> 
                Sharjah Aquarium features 20 tanks that recreate different local aquatic environments, from 
                coral reefs and rock pools to lagoons and mangroves. An indoor walkway allows up-close viewing 
                of the marine animals in these habitats.

                    <br> 
                    <br>
                    
                    Located in Al Khan, Sharjah Aquarium is a world of wonder. One of the largest educational 
                    centres in the UAE, the aquarium is run by the Sharjah Museums Authority. Spread across an 
                    area of 6,500 m², this attraction in Sharjah comprises of 20 different aquariums on two 
                    floors containing a variety of sea creatures. 

                    <br> 
                    <br>

                 </p>
                   
                    <h2 class="info-title"> History </h2>
                    <h2 class="info-title1"> History </h2> <!-- history -->
                   <p class="info-description1"> 
                   
                   The Sharjah Aquarium first opened its doors on June 16, 2008. 
                    
                    </p>                    
                             
                    
            </div>
            
         </div>
        </div>
        </div>



        <!-- WHAT TO DO -->
        <div class="wtd-container" id="wtd-container">
        <div class="blackbg">
        <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2B.JPG" class="wtd-bg"/> <!-- the bg for the entirety of the what to do part -->
        </div>
        <div class="scroller-area">

            
            <div class="contents-box">
                <div class="contents-container1">
                <h2 class="contents-title1"> What to do </h2> <!-- this is the what to do part -->
                <p class="contents-desc1"> 
                This aquarium in Sharjah is the perfect place to witness the local sea life that dwells in the 
                historic coasts of the culturally rich emirate. But that’s not all – the aquarium is a lot more 
                than just a place to witness sea life.  
                </p>
                </div>
            </div> 
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2E.JPG"  />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Learn </h2>
                <p class="contents-desc"> 
                The aquarium serves as more than just a recreational space. It was built for the purpose of 
                familiarising the masses with marine life and its importance. 
                </p> 
                </div>
            </div> 
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2C.JPG"  />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Discover </h2>
                <p class="contents-desc">
                Just how many sea animals can you identify and name? Go a step beyond the broader categories 
                of sea life and learn to distinguish between them.  
                </p> 
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
    <iframe width="100%" height="1000px" src="https://poly.google.com/view/eMloTOcfTCA/embed?chrome=min" 
        frameborder="0" style="border:none;" allowvr="yes" 
        allow="vr; xr; accelerometer; magnetometer; gyroscope; autoplay;" 
        allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" >
    </iframe>	
    
     <!-- google maps -->   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.193992514599!2d55.35917549999998!3d25.331270599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5b082b96861f%3A0x1401d31b640e5fea!2sSharjah%20Aquarium!5e0!3m2!1sen!2sae!4v1622820844311!5m2!1sen!2sae"
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
            <!-- <input type="text" name="review"  class="form-control" placeholder="Add a review..."></input> old review box -->
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
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2A.JPG" class="fiximg" /> <!-- img! -->
                <p> View outside of Sharjah Aquarium </p>
            </div>
            
            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2B.JPG" class="fiximg" /> <!-- img! -->
                <p> Tunnel with aquatic sea animals </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2C.JPG" class="fiximg" /> <!-- img! -->
                <p> Aquarium filled with sea creatures </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2D.JPG" class="fiximg" /> <!-- img! -->
                <p> Overlooking a school of fish </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2E.JPG" class="fiximg" /> <!-- img! -->
                <p> A stingray within the aquarium </p>
            </div>
        </div>
        <div class="row row2">
            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2F.JPG" class="fiximg" /> <!-- img! -->
            <p> Aquarium filled with sea creatures </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2G.JPG" class="fiximg" /> <!-- img! -->
            <p> Tunnel with aquatic sea animals </p>
            </div>
            
            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2H.JPG" class="fiximg" /> <!-- img! -->
            <p> Tunnel with aquatic sea animals and a tourist </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2A.JPG" class="fiximg" /> <!-- img! -->
            <p> View outside of Sharjah Aquarium </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2B.JPG" class="fiximg" /> <!-- img! -->
            <p> Tunnel with aquatic sea animals </p>
            </div>

        </div>
        <div class="row row3">
            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2C.JPG" class="fiximg" /> <!-- img! -->
            <p> Aquarium filled with sea creatures </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2D.JPG" class="fiximg" /> <!-- img! -->
            <p> Overlooking a school of fish </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2E.JPG" class="fiximg" /> <!-- img! -->
            <p> A stingray within the aquarium </p>
            </div>

            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2F.JPG" class="fiximg" /> <!-- img! -->
            <p> Aquarium filled with sea creatures </p>
            </div>
            
            <div class="img-media">
            <img src="images\shj-pictures\Entertainment\Sharjah Aquarium\shjent2G.JPG" class="fiximg" /> <!-- img! -->
            <p> Tunnel with aquatic sea animals </p>
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
            $('#t-time').html('8:00 AM to 8:00 PM'); //so put the timings here

        }
        function mon(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('8:00 AM to 8:00 PM'); //so put the timings here

        }
        function tues(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('8:00 AM to 8:00 PM'); //so put the timings here
  
        }
        function wed(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('8:00 AM to 8:00 PM'); //so put the timings here
  
        }
        function thurs(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('8:00 AM to 8:00 PM'); //so put the timings here
            
        }
        function fri(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('2:00 AM to 8:00 PM');//so put the timings here

        }
        function sat(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('Closed');//so put the timings here
   
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