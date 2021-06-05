<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-scale=1.0">
    <title>UAQ Marine Club</title>
        
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
            $pageName = "uaq-ent5"; 

            ?>
    </div>
    
    <!-- TITLE -->
    <div class="wrapper1">
        <div class="title-container">
            <div class="another-container1">
                <div class="title-slider"> <!-- images the one sa top left -->
                        <div><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE1.JPG" class="picture" /></div>
                        <div><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE2.JPG" class="picture" /></div>
                        <div><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE3.JPG" class="picture" /></div>
                </div>
            </div>
            <div class="another-container">
                <h1 class="title1"> UAQ Marine Club </h1> <!-- title -->
                <p class="location-title"> Umm Al Quwain </p> <!-- location-->
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
                <div class="img-set"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE4.JPG" class="smallimg"/></div>
                <div class="img-set"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE5.JPG" class="smallimg"/></div>
                <div class="img-set"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE6.JPG" class="smallimg"/></div>
            </div>
            <div class="info-container">
                <div class="dl-bm">

                    <!-- change the path to this to download! simply look at the files to ur left (if ur using visual code)
                    right click > copy path and then paste it on the href ! -->
                    <a href="download/Umm Al Quwain/Entertainment/UAQ Marine Club.docx"> 
                    <button><img src="images/Desktop Download.png"/></button>
                    </a>
                    
                </div>
            <h2 class="info-title1"> Information </h2> <!-- description feel free to add per paragraph -->
                <p class="info-description"> The Umm Al Quwain Marine Club is one of the United Arab Emirates’ best- kept secrets. It sits on 
                the sea in the quaint Emirate of Umm Al Quwain, from where it takes its name. It is a secret because Umm Al Quwain has yet to 
                develop into a metropolis like Dubai or Abu Dhabi, and it does not draw tourists or even local visitors on a large scale. 
                This is one of the charms of both the city and the Marine Club. It is an understated city, which prides itself on local culture, 
                on its atmosphere and, of course, on its location beside the sea.


                    <br>
                    <br>
                    
                    Not only is it a fully functional marina, but it is also a club, an expanding center of activity not just for Umm Al Quwain but 
                    for neighboring Emirates as well. It offers good value for money so many water sports enthusiastic are relocating from Dubai, 
                    to take advantage of the setting, the services and the value offered by the Club.   
                    
                    <br>
                    <br>

                </p>              
                    
            </div>
            
         </div>
        </div>
        </div>



        <!-- WHAT TO DO -->
        <div class="wtd-container" id="wtd-container">
        <div class="blackbg">
        <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE6.JPG" class="wtd-bg"/> <!-- the bg for the entirety of the what to do part -->
        </div>
        <div class="scroller-area">

            
            <div class="contents-box">
                <div class="contents-container1">
                <h2 class="contents-title1"> What to do </h2> <!-- this is the what to do part -->
                <p class="contents-desc1">
                
                UAQ Marine Club offers countless activities for you.  It lets thrill-seekers try speed boating, jet skiing, windsurfing, horse riding and more.                  
                
                </div>
            </div> 
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE2.JPG" />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Adventures </h2>
                <p class="contents-desc">

                You can do wall climbing, Jacobs ladder, leap of faith, zip lining, cargo net, create stacking, maze, low ropes, archery, kayaking, canoeing, 
                raft building, houseboat, survival skills, team building, swimming, fishing and orienteering
                </p> <!-- put the actual activities here -->
               </div>

            </div> 
            
            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE3.JPG" />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Camping </h2>
                <p class="contents-desc"> 
                
                Our camping area is not far from the beach and if you pitch your tent correctly the view as you peer out of your tent in the morning is truly breathtaking. 
                Spotted inside the camping area are small cabanas with picnic benches for you to set up your evening meals or for a table where the children can colour 
                and play out of the rays of the midday sun.
                </p> <!-- put the actual activities here -->
                </div>
            </div> 

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE1.JPG" />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Houseboat Tours </h2>
                <p class="contents-desc">

                <br><br>

                The Marine Club takes pride in offering its guests an exclusive and private party on a houseboat, cruising the waters around the mangrove islands.

                </p> <!-- put the actual activities here -->
               </div>

            </div> 

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE5.JPG" />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> High Ropes </h2>
                <p class="contents-desc">

                <br><br>

                Come and try scaling our climbing wall which is one of the highest in the UAE and suitable for most ages; or flying like a bird down our zip line; 
                or maybe you want to push yourself and launch yourself from our leap of faith tower.
                </p> <!-- put the actual activities here -->
               </div>

            </div> 

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE7.JPG" />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Fishing </h2>
                <p class="contents-desc">

                With UAQ having a coastline of 24km, experience the deep sea fishing, we offer a wide of types of fishing and a large school of fish to choose from. 
                </p> <!-- put the actual activities here -->
               </div>

            </div> 

            <div class="contents-box">
                <div class="contents-img">
                    <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE6.JPG" />
                </div>
                <div class="contents-container">
                <h2 class="contents-title"> Water Sports </h2>
                <p class="contents-desc">

                <br><br>

                Engage yourself with water sports such as water skiing and wake boarding, kayaking and canoeing, knee boarding, stand-up padding, banana boat or 
                doughnut rides, and windsurfing.
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
   
        <br> <br>     <br> <br>
        <h3 style="text-align: center;">Sorry! There's no  virtual Tour available for this place, but you can visit them on the location below:</h3>
        <br> <br>     <br> <br>
             
      <!-- google tour -->
    
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.27585653381!2d55.56258201495536!3d25.562487583727556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5fe89e5fa09bf%3A0x7d9c1cb49dda4c02!2sUAQ%20Marine%20Club!5e0!3m2!1sen!2sae!4v1622868414892!5m2!1sen!2sae" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      
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
            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE1.JPG" class="fiximg" />
            <p> Beach side </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE2.JPG" class="fiximg" />
            <p> Wall climbing </p>
            </div>
            
            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE3.JPG" class="fiximg" />
            <p> One of their villas </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE4.JPG" class="fiximg" />
            <p> Dining area </p>
            </div>
            
            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE5.JPG" class="fiximg" />
            <p> The sun setting at the beach </p>
            </div>
        
        </div>

        <div class="row row2">
            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE6.JPG" class="fiximg" />
            <p> Surroundings </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE7.JPG" class="fiximg" />
            <p> Exterior of their villas </p>
            </div>
            
            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE8.JPG" class="fiximg" />
            <p> A different view of their villa </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE1.JPG" class="fiximg" />
            <p> Beach side </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE2.JPG" class="fiximg" />
            <p> Wall climbing </p>
            </div>
            
        </div>

        <div class="row row3">
        <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE3.JPG" class="fiximg" />
            <p> One of their villas </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE4.JPG" class="fiximg" />
            <p> Dining area </p>
            </div>
            
            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE5.JPG" class="fiximg" />
            <p> The sun setting at the beach </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE6.JPG" class="fiximg" />
            <p> Surroundings </p>
            </div>

            <div class="img-media"><img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE7.JPG" class="fiximg" />
            <p> Exterior of their villas </p>
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
            $('#t-time').html(' Open 24/7 '); //so put the timings here

        }
        function mon(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' Open 24/7 '); //so put the timings here

        }
        function tues(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' Open 24/7 '); //so put the timings here
  
        }
        function wed(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' Open 24/7'); //so put the timings here
  
        }
        function thurs(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' Open 24/7 '); //so put the timings here
            
        }
        function fri(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' Open 24/7 '); //so put the timings here

        }
        function sat(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html(' Open 24/7 '); //so put the timings here
   
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