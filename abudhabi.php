<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Abu Dhabi</title>
	<link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <style>
        body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.288),rgba(0, 0, 0, 0.288)), url("images/emirates/ad_bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        width: 100%;
        height: 100vh;
        background-color: #252525;
    } 
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
                <h1>ABU DHABI</h1>
                <div class="description">
                    <p>Abu Dhabi has made itself known worldwide for holding Formula 1 races. The capital has a state-of-the-art, luxurious racing circuit and some of the most famous races in the world have taken place here.</p>
                </div>
            </div>
            
            <div class="container">            
                  
                <div class="toggleArea">
                    <label for="toggle">MENU</label>
                </div>
                <input type="checkbox" id="toggle">
                <div class="categories"> 
                        <button class="tab-btn tablink" onclick="toggleShow(); openTab(event, 'events')" id="menuHide">ENTERTAINMENT</button>
                        <button class="tab-btn tablink" onclick="toggleShow(); openTab(event, 'dine');" id="menuHide">DINE</button>
                        <button class="tab-btn tablink" onclick="toggleShow(); openTab(event, 'activities')" id="menuHide">ACTIVITIES</button>
                        <button class="tab-btn tablink" onclick="toggleShow(); openTab(event, 'sights')" id="menuHide">SIGHTS TO SEE</button>
                        <button class="tab-btn tablink" onclick="toggleShow(); openTab(event, 'discover')" id="menuHide">DISCOVER</button>
                        <button class="tab-btn tablink" onclick="toggleShow(); openTab(event, 'mosque')" id="menuHide">MOSQUES</button>
                </div>
                
            </div>
        </div> 
   

    <div class="categ" id="categ" style="display: none;">
        <div class="wrapCateg acc-tabs" id="events" style="display: none;">
        <div id="categTitle">
            <h1>ENTERTAINMENT IN ABU DHABI</h1>
        </div>

        <!--  -->
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
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhent2A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ferrari World</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Ferrari World Abu Dhabi is a mostly indoors amusement park on Yas Island in Abu Dhabi, United Arab Emirates. It is the first Ferrari-branded theme park and has the record for the largest space frame structure ever built.</p>
                    <div class="cardButton">
                            <a href="auh-ent2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhent3D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Yas Waterworld</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Yas Waterworld Abu Dhabi is an Emirati-themed waterpark located on Yas Island in Abu Dhabi, United Arab Emirates, the park is home to more than 40 rides, slides and attractions, including Bubble’s Barrel, Rush Rider...</p>
                    <div class="cardButton">
                            <a href="auh-ent3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhent4B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Yas Marina Circuit</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Yas Marina Circuit is one of the most technologically-advanced tracks in the world, home to the annual Formula 1® Etihad Airways Abu Dhabi Grand Prix and a living, breathing part of life in Abu Dhabi. </p>
                    <div class="cardButton">
                            <a href="auh-ent4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhent5D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Yas Mall</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Yas Mall is a mall in Yas Island in Abu Dhabi, United Arab Emirates. It serves as a place for shopping, dining and entertainment for residents of Abu Dhabi and Yas Island. It covers an area of approximately 235,000 square metres.</p>
                    <div class="cardButton">
                            <a href="auh-ent5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
            </div>

            
        </div>

        <div class="wrapCateg acc-tabs" id="dine" style="display: none;">
        <div id="categTitle">
            <h1>DINE IN ABU DHABI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdin1B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Observation Deck at 300</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Located on Level 74, Tower 2, the Observation Deck at 300 offers the highest vantage of Abu Dhabi's cityscape and guests can enjoy delicious refreshments and the city's highest high tea against a spectacular backdrop.</p>
                    <div class="cardButton">
                            <a href="auh-din1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdin2H.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Cipriani</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Available all year around, Cipriani Yas Island’s à la carte menu menu is built on the concept of simple Italian food made to perfection and was inspired by the story of Giuseppe Cipriani Sr. Appealing to many different...</p>
                    <div class="cardButton">
                            <a href="auh-din2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdin3G.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Cascade Dining</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Cascade Dining is a collection of 21 outlets serving cuisine from around the world including authentic Middle Eastern, Mediterranean, Italian, Asian, American, seafood, burgers, dessert kiosks and coffee houses.</p>
                    <div class="cardButton">
                            <a href="auh-din3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/IMG_1788.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Catch at St. Regis</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Located within the premises of Nation Riviera Beach Club, Catch at St. Regis is the newest addition amongst the many award winning restaurants of The St. Regis Abu Dhabi. Introducing an ambiance of elegance and sophistication...</p>
                    <div class="cardButton">
                            <a href="auh-din4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdin5B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>The Terrace On The Corniche</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Delight in a vast array of culinary stations, savour the finest flavours from the region and experience a fresh perspective on international cuisine. Located on the ground level at The St. Regis Abu Dhabi, a highlight...</p>
                    <div class="cardButton">
                            <a href="auh-din5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="activities" style="display: none;">
        <div id="categTitle">
            <h1>ACTIVITIES IN ABU DHABI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhact1G.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Emirates Park Zoo</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Perfect for families, this zoo is home to over 1,700 animals, including a majestic pair of white tigers, a 31-year-old 300kg-plus Siberian bear, lions, cheetahs and dozens of zebras. Located in Al Bahia...</p>
                    <div class="cardButton">
                            <a href="auh-act1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhact2D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Zaya Nurai Island</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>A short 15 minute boat ride off the shores of Abu Dhabi, discover Zaya Nurai Island. A piece of paradise like nowhere else. Our boutique private island resort features a world-class oceanside spa, five fine...</p>
                    <div class="cardButton">
                            <a href="auh-act2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
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
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhent2A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ferrari World</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Ferrari World Abu Dhabi is a mostly indoors amusement park on Yas Island in Abu Dhabi, United Arab Emirates. It is the first Ferrari-branded theme park and has the record for the largest space frame structure ever built.</p>
                    <div class="cardButton">
                            <a href="auh-ent2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhent3D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Yas Waterworld</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Yas Waterworld Abu Dhabi is an Emirati-themed waterpark located on Yas Island in Abu Dhabi, United Arab Emirates, the park is home to more than 40 rides, slides and attractions, including Bubble’s Barrel, Rush Rider...</p>
                    <div class="cardButton">
                            <a href="auh-ent3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="sights" style="display: none;">
        <div id="categTitle">
            <h1>SIGHTS TO SEE IN ABU DHABI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdis5E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Emirates Palace</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>This lavish property is world-famous thanks to its enchanting Arabesque style, award-winning five-star hospitality and wonderfully unique and authentic local experiences. Located in the heart of Abu Dhabi...</p>
                    <div class="cardButton">
                            <a href="auh-dis5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdin1B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Observation Deck at 300</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Located on Level 74, Tower 2, the Observation Deck at 300 offers the highest vantage of Abu Dhabi's cityscape and guests can enjoy delicious refreshments and the city's highest high tea against a spectacular backdrop.</p>
                    <div class="cardButton">
                            <a href="auh-din1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdis6B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Yas Viceroy</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>This unique hotel is constructed from two twelve-story towers - one in the middle of the track itself and one in the marina with a spidery structure (grid shell) linking them. There are two rooftop swimming pools.</p>
                    <div class="cardButton">
                            <a href="auh-dis6.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhmos1H.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Grand Mosque</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>The impressive and inspiring Sheikh Zayed Grand Mosque is one of the world’s largest mosques and the only one that captures the unique interactions between Islam and other world cultures. </p>
                    <div class="cardButton">
                            <a href="auh-mos1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhact2D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Zaya Nurai Island</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>A short 15 minute boat ride off the shores of Abu Dhabi, discover Zaya Nurai Island. A piece of paradise like nowhere else. Our boutique private island resort features a world-class oceanside spa, five fine...</p>
                    <div class="cardButton">
                            <a href="auh-act2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="discover" style="display: none;">
        <div id="categTitle">
            <h1>DISCOVER IN ABU DHABI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdis1B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Louvre</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>The Louvre Abu Dhabi is an art and civilization museum, located in Abu Dhabi, United Arab Emirates. The museum is located on the Saadiyat Island Cultural District. It is approximately 24,000 square metres in size...</p>
                    <div class="cardButton">
                            <a href="auh-dis1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdis2C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Yas Island</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Yas Island is an island in Abu Dhabi, United Arab Emirates. It occupies a total land area of 25 km². It is a popular leisure island and one of the top tourism projects in Abu Dhabi. Yas Island holds the...</p>
                    <div class="cardButton">
                            <a href="auh-dis2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdis3D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Heritage Village</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>If you’re looking for a family-friendly spot in which to experience traditional aspects of the desert way of living and immerse yourself in a time capsule that brings an old-world souk (market), mosque and camp...</p>
                    <div class="cardButton">
                            <a href="auh-dis3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdin1B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Observation Deck at 300</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>Located on Level 74, Tower 2, the Observation Deck at 300 offers the highest vantage of Abu Dhabi's cityscape and guests can enjoy delicious refreshments and the city's highest high tea against a spectacular backdrop.</p>
                    <div class="cardButton">
                            <a href="auh-din1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhdis5E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Emirates Palace</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>This lavish property is world-famous thanks to its enchanting Arabesque style, award-winning five-star hospitality and wonderfully unique and authentic local experiences. Located in the heart of Abu Dhabi...</p>
                    <div class="cardButton">
                            <a href="auh-dis5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="mosque" style="display: none;">
        <div id="categTitle">
            <h1>MOSQUES IN ABU DHABI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/abu dhabi/auhmos1H.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Grand Mosque</h3>
                        <h4>Abu Dhabi</h4>
                    </div>
                    <p>The impressive and inspiring Sheikh Zayed Grand Mosque is one of the world’s largest mosques and the only one that captures the unique interactions between Islam and other world cultures.</p>
                    <div class="cardButton">
                            <a href="auh-mos1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

<footer></footer>



  
<script type="text/javascript" src="javascript/hide-show.js"></script>
</body>
</html>

