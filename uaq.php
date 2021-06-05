<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Umm Al Quwain</title>
	<link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <style>
        body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.288),rgba(0, 0, 0, 0.288)), url("images/emirates/uaq_bg.jpg");
         background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        width: 100%;
        height: 100vh;
        background-color: #252525;}
    </style>
</head>
<body>
    <!-- <img src = "images/logo_thickb.png" id="virtuae" style="width: 60px; height: 60px;"> -->
    <img src = "images/logo_thickw.png" id="virtuae" style="width: 60px; height: 60px;">
    <div id="navbar">
        <?php include 'includes/headers.php';?>
    </div>

        <div class="wrapper">
            <div class="title">
                <h1>UMM AL QUWAIN</h1>
                <div class="description">
                    <p>Umm Al Quwain provides facilities for numerous recreational activities; from sailing to skydiving. Traditional activities such as dhow building and sports such as falconry and camel racing are also popular in the emirate.</p>
                </div>
            </div>
            
            <div class="container">    
                 
                <div class="toggleArea">
                    <label for="toggle">MENU</label>
                </div>
                <input type="checkbox" id="toggle">
                <div class="categories"> 
                        <button class="tab-btn tablink link" onclick="toggleShow(); openTab(event, 'events')">ENTERTAINMENT</button>
                        <button class="tab-btn tablink link" onclick="toggleShow(); openTab(event, 'dine');">DINE</button>
                        <button class="tab-btn tablink link" onclick="toggleShow(); openTab(event, 'activities')">ACTIVITIES</button>
                        <button class="tab-btn tablink link" onclick="toggleShow(); openTab(event, 'sights')">SIGHTS TO SEE</button>
                        <button class="tab-btn tablink link" onclick="toggleShow(); openTab(event, 'discover')">DISCOVER</button>
                        <!-- <button class="tab-btn tablink link" onclick="toggleShow(); openTab(event, 'mosque')">MOSQUES</button> -->
                </div>
                
            </div>
        </div> 
   

    <div class="categ" id="categ" style="display: none;">
        <div class="wrapCateg acc-tabs" id="events" style="display: none;">
        <div id="categTitle">
            <h1>ENTERTAINMENT IN UMM AL QUWAIN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>UAQ Marine Club</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>The Umm Al Quwain Marine Club is one of the United Arab Emirates’ best- kept secrets. It sits on the sea in the quaint Emirate of Umm Al Quwain, from where it takes its name. It is a secret because Umm Al Quwain... </p>
                    <div class="cardButton">
                            <a href="uaq-ent5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/Sheikh Zayed Park/uaqentD1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Park</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Sheikh Zayed Park is one of the best parks in Umm Al Quwain.  It was established on an area of 54000 m2, 42000 m2 of which is planted with palm, decorative plants and seasonal flowers that impart on the park...</p>
                    <div class="cardButton">
                            <a href="uaq-ent4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/Dreamland Aqua Park/uaqentB1.JPG" alt="" srcset="">
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
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/Emirates Motorplex/uaqentC8.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Emirates Motorplex</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Fans of the Ferrari World in Abu Dhabi would certainly enjoy Emirates Motorplex. Trying out the high-octane motorsports in the Emirates Motorplex is one of the most exciting things to do in Umm Al Quwain. </p>
                    <div class="cardButton">
                            <a href="uaq-ent3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/Barracuda Beach Resort/uaqentA2.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Barracuda Beach Resort</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Located just 60km from Dubai on the edge of the Umm Al Quwain lagoon, Barracuda Beach Resort is the perfect spot for a weekend away to relax and recharge whilst still having fun. Unfussy rooms feature flat-screen TVs...</p>
                    <div class="cardButton">
                            <a href="uaq-ent1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
            </div>

            
        </div>

        <div class="wrapCateg acc-tabs" id="dine" style="display: none;">
        <div id="categTitle">
            <h1>DINE IN UMM AL QUWAIN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Dine/Sikkat Beirut Restaurant and Cafe/uaqdinD1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sikkat Beirut Restaurant and Cafe</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Sikkat Beirut is a premium fine dining restaurant serving with the real taste of authenticity. There are diverse cuisines being served from delicious Lebanese to Italian and American street food. The Restaurant is one...</p>
                    <div class="cardButton">
                            <a href="uaq-din4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Dine/Kite Beach Center Restaurant _ Cafe/uaqdinC4.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Kite Beach Center Restaurant & Cafe</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>On this stunning stretch of white sandy beach, every day is Friday, and Kite Beach Center Restaurant & Cafe offers a memorable dining experience like no other. They give every seat a sea view so dine in...</p>
                    <div class="cardButton">
                            <a href="uaq-din3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Dine/Das Brauhaus/uaqdinB1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Das Brauhas</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Das Brauhas is a modern styled, authentic Bavarian restaurant located at the Pearl Beach hotel in Umm Al Quwain. They offer genuine German homemade cuisine, always fresh and based on family recipes. Experience your...</p>
                    <div class="cardButton">
                            <a href="uaq-din2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Dine/Backwaters/uaqdinA1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Backwaters</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Backwaters as a concept brings to you the taste of traditional Kerala cuisine treating your taste buds with mouthwatering flavors from God’s own country Kerala. This traditional restaurant and bar is the perfect place...</p>
                    <div class="cardButton">
                            <a href="uaq-din1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Dine/Thunder Road Pizza _ Grill, Barracuda/uaqdinE1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Thunder Road Pizza & Grill, Barracuda</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Located in Barracuda Beach Resort, the restaurant offers homemade Italian cuisine with American twist coupled with  stunning sea view. From piping hot, freshly baked pizzas made to order with your favorite toppings...</p>
                    <div class="cardButton">
                            <a href="uaq-din5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="activities" style="display: none;">
        <div id="categTitle">
            <h1>ACTIVITIES IN UMM AL QUWAIN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/Dreamland Aqua Park/uaqentB1.JPG" alt="" srcset="">
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
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/Emirates Motorplex/uaqentC8.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Emirates Motorplex</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Fans of the Ferrari World in Abu Dhabi would certainly enjoy Emirates Motorplex. Trying out the high-octane motorsports in the Emirates Motorplex is one of the most exciting things to do in Umm Al Quwain. </p>
                    <div class="cardButton">
                            <a href="uaq-ent3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Activities/Al Labsa/uaqactA6.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Labsa</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Camels have been at the centre of life in the UAE for decades and the best place to see them is in Al Labsah. They’re known for their Camel Racing Track. The road to the Camel race track at Al Labsa affords...</p>
                    <div class="cardButton">
                            <a href="uaq-act1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/Barracuda Beach Resort/uaqentA2.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Barracuda Beach Resort</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Located just 60km from Dubai on the edge of the Umm Al Quwain lagoon, Barracuda Beach Resort is the perfect spot for a weekend away to relax and recharge whilst still having fun. Unfussy rooms feature flat-screen TVs...</p>
                    <div class="cardButton">
                            <a href="uaq-ent1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Entertainment/UAQ Marine Club/uaqentE1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>UAQ Marine Club</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>The Umm Al Quwain Marine Club is one of the United Arab Emirates’ best- kept secrets. It sits on the sea in the quaint Emirate of Umm Al Quwain, from where it takes its name. It is a secret because Umm Al Quwain... </p>
                    <div class="cardButton">
                            <a href="uaq-ent5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="sights" style="display: none;">
        <div id="categTitle">
            <h1>SIGHTS TO SEE IN UMM AL QUWAIN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Discover/Khor Al Beidah/uaqdisD1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Khor Al Beidah</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Less than an hour from Dubai lie the Khor Al Beidah wetlands, it is an untouched haven for birds and birdwatchers alike. A patchwork of pristine beaches, emerald blue lagoons, hidden islands and dense mangroves, the wetlands are...</p>
                    <div class="cardButton">
                            <a href="uaq-dis4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Discover/Al-Dur Archeological Site/uaqdisC1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al-Dur Archaeological Site</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Al-Dur Archaeological site is one of the most important archaeological sites in UAE and among the prime places to visit in Umm Al Quwain. Also known as Ed-Dur or Ed-Dour, Al Dur is the largest pre-Islamic site in the...</p>
                    <div class="cardButton">
                            <a href="uaq-dis3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images\ajm-pictures\Activities\Al Sinniyah Island\ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>The Al Sinniyah Island among other islands lie east to the mainland of Umm al-Quwain. The length of the island is about eight kilometers, and its width extends up to four miles.  The island is full of natural reserves... </p>
                    <div class="cardButton">
                            <a href="uaq-dis2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Sights to see/Falaj Al Mualla/uaqstsA3.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Fallaj Al Mualla</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Falaj Al Mualla may not be as popular as other cities in the United Arab Emirates, but don’t let that fool you. Falaj Al Mualla is a smaller but beautiful tourist destination that is worth a visit. You will be surprised by...</p>
                    <div class="cardButton">
                            <a href="uaq-sts1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="discover" style="display: none;">
        <div id="categTitle">
            <h1>DISCOVER IN UMM AL QUWAIN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Discover/Umm Al Quwain Museum/uaqdisE6.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Umm Al Quwain Museum</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>UAQ Museum is the centre of history and heritage in the city. With a wide range of visitors from GCC expats to school field trips, this museum depicts the history of UAE in one beautiful fortress. The exhibits focus mainly..</p>
                    <div class="cardButton">
                            <a href="uaq-dis5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images\ajm-pictures\Activities\Al Sinniyah Island\ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>The Al Sinniyah Island among other islands lie east to the mainland of Umm al-Quwain. The length of the island is about eight kilometers, and its width extends up to four miles. The island is full of natural reserves...</p>
                    <div class="cardButton">
                            <a href="ajm-act2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Discover/Abandoned IL-76/uaqdisA6.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Abandoned IL-76</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Abandoned IL-76 is a Russian cargo plane that was left abandoned and rusting away since probably the 1970s at a non-functional airstrip in Umm al-Quwain. This soviet-era abandoned cargo plane... </p>
                    <div class="cardButton">
                            <a href="uaq-dis1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Discover/Al-Dur Archeological Site/uaqdisC1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al-Dur Archaeological Site</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Al-Dur Archaeological site is one of the most important archaeological sites in UAE and among the prime places to visit in Umm Al Quwain. Also known as Ed-Dur or Ed-Dour, Al Dur is the largest pre-Islamic site in the...</p>
                    <div class="cardButton">
                            <a href="uaq-dis3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/umm al quwain/Discover/Khor Al Beidah/uaqdisD1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Khor Al Beidah</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Less than an hour from Dubai lie the Khor Al Beidah wetlands, it is an untouched haven for birds and birdwatchers alike. A patchwork of pristine beaches, emerald blue lagoons, hidden islands and dense mangroves, the wetlands are...</p>
                    <div class="cardButton">
                            <a href="uaq-dis3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--  
        <div class="wrapCateg acc-tabs" id="mosque" style="display: none;">
        <div id="categTitle">
            <h1>MOSQUES IN UMM AL QUWAIN</h1>
        </div>
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Mosque</h3>
                        <h4>Umm Al Quwain</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>-->

<footer></footer>



  
<script type="text/javascript" src="javascript/hide-show.js"></script>
</body>
</html>

