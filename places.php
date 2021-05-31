<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-scale=1.0">
    <title>PLACE HOLDER FOR PLACES</title>
        
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
                <div class="title-slider">
                        <div><img src="images/image21.png" class="picture" /></div>
                        <div><img src="images/image21.png" class="picture" /></div>
                        <div><img src="images/image21.png" class="picture" /></div>
                </div>
            </div>
            <div class="another-container">
                <h1 class="title1"> JUMEIRAH MOSQUE </h1>
                <p class="location-title"> PLACEHOLDER </p>
                <button href="#" class="line1"> TOUR </button>
            </div>
        </div>
    </div>
    <!-- CATEGORIES -->
    <div class="wrapper3">
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

            <div class="rectangle"></div>

    <!-- INFORMATION -->
    <div class="rectangle2"></div>
    <div class="wrapper2">
        <div class="info-hist-box" id="history">
        
         <div class="layer1">
         
            <div class="left-images"> 
            <h2 class="info-title"> Information </h2>
                <img src="images/PLACEHOLDER.png" class="img-set"/>
                <img src="images/PLACEHOLDER.png" class="img-set"/>
                <img src="images/PLACEHOLDER.png" class="img-set"/>
            </div>
            <div class="info-container">
                <div class="dl-bm">
                    <img src="images/Star.png" />
                    <img src="images/Desktop Download.png" />
                </div>
            <h2 class="info-title1"> Information </h2>
                <p class="info-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Habitasse platea dictumst quisque 
                    sagittis. Lorem donec massa sapien faucibus et. Iaculis urna id volutpat 
                    lacus laoreet. Et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. 
                    At risus viverra adipiscing at in. </p>
            </div>
            
         </div>
        </div>
        </div>



        <!-- WHAT TO DO -->
        <div class="wtd-container" id="wtd-container">
            <div class="scroller-area">
            
            <div class="contents-box">
                <img src="images/PLACEHOLDER.png" class="contents-img"/>
                <div class="contents-container">
                <h2 class="contents-title"> Placeholder </h2>
                <p class="contents-desc">Justo nec ultrices dui sapien eget. Sagittis purus sit amet eu volutpat consequat.
                 Feugiat in ante metus dictum at tempor commodo. </p>
                 </div>
            </div> 
            
            <div class="contents-box">
                <img src="images/PLACEHOLDER.png" class="contents-img"/>
                <div class="contents-container">
                <h2 class="contents-title"> Placeholder </h2>
                <p class="contents-desc">Justo nec ultrices dui sapien eget. Sagittis purus sit amet eu volutpat consequat.
                 Feugiat in ante metus dictum at tempor commodo. </p>
                 </div>
            </div> 
            

            <div class="contents-box">
                <img src="images/PLACEHOLDER.png" class="contents-img"/>
                <div class="contents-container">
                <h2 class="contents-title"> Placeholder </h2>
                <p class="contents-desc">Justo nec ultrices dui sapien eget. Sagittis purus sit amet eu volutpat consequat.
                 Feugiat in ante metus dictum at tempor commodo. </p>
                 </div>
            </div>

            <div class="contents-box">
                <img src="images/PLACEHOLDER.png" class="contents-img"/>
                <div class="contents-container">
                <h2 class="contents-title"> Placeholder </h2>
                <p class="contents-desc">Justo nec ultrices dui sapien eget. Sagittis purus sit amet eu volutpat consequat.
                 Feugiat in ante metus dictum at tempor commodo. </p>
                 </div>
            </div>

            </div>
        </div>
        <!-- -->

        <!-- TIMINGS -->

        <div class="timing-container">
            <h2 class="timing-title">TIMINGS</h2>
            <div class="wrapper3">
            <div class="timing-week">
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
                    <div class="timing-info" id="timing-info">
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
                <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"><p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"><p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>



        </div>

        <div class="e-row">

            <div class="event-content">
            <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
                </div>

            </div>

            <div class="event-content">  
            <div class="extra-wrapper">   
                <div class="e-date">
                    <div class="e-month"> MAY </div>
                    <div class="e-number"> 11 </div>
                </div>
                <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
                </div> 

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
            <div class="e-date">
                <div class="e-month"> MAY </div>
                <div class="e-number"> 11 </div>
            </div>
            <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
            </div>

            </div>

            <div class="event-content">
            <div class="extra-wrapper">
            <div class="e-date">
                <div class="e-month"> MAY </div>
                <div class="e-number"> 11 </div>
            </div>
            <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
            </div>

            </div>

            <div class="event-content">  
            <div class="extra-wrapper">
            <div class="e-date">
                <div class="e-month"> MAY </div>
                <div class="e-number"> 11 </div>
            </div>
            <div class="name-event"> <p class="en-adjusting">Eid Al Fitr</p></div>
            </div>

            </div>

            
            
        </div>

        </div>
    </div>

    <!-- -->

    <!-- VIRTUAL TOUR -->
    <h2 class="vt-title">VIRTUAL TOUR</h2>
    <!-- to be replaced -->

    <iframe width="100%" height="1000px" src="https://poly.google.com/view/ewUGbxgQ_bL/embed?chrome=min" 
        frameborder="0" style="border:none;" allowvr="yes" 
        allow="vr; xr; accelerometer; magnetometer; gyroscope; autoplay;" 
        allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" >
    </iframe>	

    <!-- -->
    
    <!-- COMMENTS -->
    <h2 class="review-title">REVIEWS</h2>
  
    <div class="review-container" id="review-container">
        
        <div class="user-review">
       
            <div class="main-review review">
            <img src="images/PLACEHOLDER.png" class="pfp"/>
                <div class="r-box main-box">
                <div class="user">Avery Angel <div class="dot"></div>
                <span class="date">Apr 01 2012</span></div>
                <div class="review-content">
                    I am placeholder review, I am reviewing the placeholder
                    and the place is very holding.

                </div>
                <a class="reply-btn" onClick="reply()"><img src="images/reply.png"/>Reply</a>
                
                </div>
            </div>

            <div class="review-replies review">
                <div class="line-r"></div>
                <img src="images/PLACEHOLDER.png" class="pfp"/>
                <div class="r-box reply-box">
                <div class="user">Avery Angel <div class="dot"></div>
                <span class="date">Apr 01 2012</span></div>
                <div class="review-content">
                    I am placeholder review, I am reviewing the placeholder
                    and the place is very holding.

                </div>
                <a class="reply-btn" onClick="reply()"><img src="images/reply.png"/>Reply</a>

   

                </div>
            </div>
            
        </div>
    </div>
    
        <!-- replying function -->

    <div class="reply-function" id="reply-function">
        <h3 class="rep-to">reply:</h3>
            <input class="form-control" placeholder="add a reply"></input>
        <button class="rep btn">reply</button>
        <button class="cancel btn" onClick="closeReply()">cancel</button>
        </div>

    <div class="wr-container" id="wr-container">
    <div class="write-review">
    <img src="images/PLACEHOLDER.png" class="pfp self" />
        <input class="form-control" placeholder="add a review"></input>
    </div>
    <button class="post btn">post</button>
        <button class="cancel btn">cancel</button>
    </div>
    </div>


    <!-- -->

    <section id="media-wrappper">
        <h2 class="media-title">MEDIA</h2>
        <div class="showcase">

        <div class="row row1">
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
        </div>
        <div class="row row2">
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
        </div>
        <div class="row row3">
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
            <div class="img-media"><img src="images/PLACEHOLDER.png" /></div>
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
        $('#timing-info').hide();
        function sun(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('this is sun');
            $('#t-info').html('placeholder for sunday information');
        }
        function mon(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('this is mon');
            $('#t-info').html('placeholder for monday information');
        }
        function tues(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('this is tues');
            $('#t-info').html('awooga');
        }
        function wed(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('this is wed');
            $('#t-info').html('placeholder for wednesady information');
        }
        function thurs(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('this is thurs');
            $('#t-info').html('placeholder for thursdsa information');
        }
        function fri(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('this is fri');
            $('#t-info').html('placeholder for friday information');
        }
        function sat(){
            $('#timing-info').hide().fadeIn();
            $('#t-time').html('this is sat');
            $('#t-info').html('placeholder for saturday information');
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