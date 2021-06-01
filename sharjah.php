<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sharjah</title>
	<link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <style>
        body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.288),rgba(0, 0, 0, 0.288)), url("images/emirates/shj_bg.jpeg");
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
                <h1>SHARJAH</h1>
                <div class="description">
                    <p>Sharjah is known for its Arabic and Islamic architecture as well as its libraries, Islamic museums, and cultural centers. The city is known as the cultural and literature hub of the United Arab Emirates.</p>
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
                        <button class="tab-btn tablink link" onclick="toggleShow(); openTab(event, 'mosque')">MOSQUES</button>
                </div>
                
            </div>
        </div> 
   

    <div class="categ" id="categ" style="display: none;">
        <div class="wrapCateg acc-tabs" id="events" style="display: none;">
        <div id="categTitle">
            <h1>ENTERTAINMENT IN SHARJAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/ad_bg.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Noor Island</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>As one of the main family attractions in Sharjah, Al Noor Island is known for its tropical biosphere filled with floating butterflies. Families can pick up a snack and a beverage from a cafe serving healthy...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/fuj_bg.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sharjah Aquarium</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Sharjah Aquarium features 20 tanks that recreate different local aquatic environments, from coral reefs and rock pools to lagoons and mangroves. An indoor walkway allows up-close viewing of the marine animals in these habitats.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Montazah Park</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Al Montazah Amusement and Water Park is Sharjah’s number one family destination, offering thrilling water rides and lavish leisure amenities. Thanks to its strategic location in Sharjah near the Government...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Qasba</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Among the most popular places to visit in Sharjah at night, Al Qasba is the complete experience for anyone looking to tour on foot. With pedestrian bridges and a canal-side complex, this destination...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Wasit Wetland Center</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Wasit Nature Reserve is located at a meeting point between the land and the sea. It features extensive dunes, mud flats and salty lagoons, as well as fresh water pools, and is part of an ancient chain of historical...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
            </div>

            
        </div>

        <div class="wrapCateg acc-tabs" id="dine" style="display: none;">
        <div id="categTitle">
            <h1>DINE IN SHARJAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/shj_bg.jpeg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Shakespear and Co.</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Shakespeare and Co. is a place where you can go with friends, colleagues, family, a laptop, or even a book to enjoy a good meal and relax, knowing there's always something to look forward to on the menu... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/fuj_bg.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ratios Coffee</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Located in the Heart of Sharjah and near the arts areas and souqs, Ratios is a great coffee choice for residents and visitors alike, offering single origin coffee from small-batch roasters. The cold brew iced coffee...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Fen Café & Restaurant</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Opened in January, the latest Fen iteration is as chic and contemporary as its predecessors. The kitchen is led by the Fen brand’s head chef, Marco Padre, and at Zero 6 Mall features an open counter where guests...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Waffee Street</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>If you love waffles and have always wanted to visit London but have never had the chance, then this is the place for you, however unlikely that combination seems. With an interior featuring a bright red phone box...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Gazebo Restaurant</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Gazebo offers a mouthwatering miscellany of culinary gems. With an impressively extensive selection of succulent Kababs, luxurious Curries, aromatic Biryanis and decadent Desserts, there’s something to satisfy every gourmand.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="activities" style="display: none;">
        <div id="categTitle">
            <h1>ACTIVITIES IN SHARJAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/ajm_bg.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Montazah Park</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Al Montazah Amusement and Water Park is Sharjah’s number one family destination, offering thrilling water rides and lavish leisure amenities. Thanks to its strategic location in Sharjah near the Government...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/fuj_bg.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Wasit Wetland Center</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Wasit Nature Reserve is located at a meeting point between the land and the sea. It features extensive dunes, mud flats and salty lagoons, as well as fresh water pools, and is part of an ancient chain of historical...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sharjah Science Museum</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>The only interactive museum in the United Arab Emirates, this exciting science museum lets visitors test their flexibility, create cartoons, study the stars and much more.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sharjah Discovery Center</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>The Sharjah Discovery Centre hosts the most popular summer activities for kids, featuring seven themed areas to spark scientific curiosity while having tons of fun. Join your child as a lab partner...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sharjah Desert Park</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>For wildlife enthusiasts, families and travelers alike, this Sharjah wildlife centre should top the list of places to visit in Sharjah. Inside, you will find four major venues. Arabia’s Wildlife Centre houses...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="sights" style="display: none;">
        <div id="categTitle">
            <h1>SIGHTS TO SEE IN SHARJAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/shj_bg.jpeg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Martyrs Square and Monument</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Establishing the Martyrs Square, which was built by members of the armed forces, in accordance with the directives of His Highness Sheikh Dr. Sultan bin Mohammed Al Qasimi, Member of the Supreme Council...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/fuj_bg.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Bait Obaid Al Shams</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>The house in the Al Shuwaiheen neighbourhood was built around 1845, and owned by the merchant Obaid Bin Hamad Al Shamsi. Around a large courtyard there are 13 rooms on the ground floor and 3 more on the upper floor.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sharjah Municipality Building</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Sharjah Municipality is responsible for planning and providing the requirements of transport, roads & traffic in the Emirate of Sharjah, and between Sharjah and other Emirates of the UAE, neighboring...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Rafisah Dam</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Heading toward Khorfakkan on the new Sharjah – Khorfakkan highway opens up a vista of the beautiful Al Rafisah Dam. Originally built in the 1980s, the dam has had an upgrade with a new visitor centre...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Gold Souk</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>When you’re thinking about what to do in Sharjah, the Central Souk should be among your first stops. With a well-known blue tile-trimmed facade - the Central Souk is an iconic landmark on the Sharjah map...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="discover" style="display: none;">
        <div id="categTitle">
            <h1>DISCOVER IN SHARJAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/rak_bg (2).jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sharjah Art Museum</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Enjoy a world of artistic wonder and creativity‎ spread over large spacious galleries that welcome you throughout the year. This unique museum offers art lovers and all visitors, the opportunity to admire the splendor...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/emirates/fuj_bg.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Mleiha Archeological Center</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Meliha Archaeological Centre is a visitor centre and exhibition based around the history and archaeology of the areas surrounding the village of Mleiha in Sharjah, the United Arab Emirates. Built around a...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Hefaiyah Mountain Conservation Centre</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Spread over 12 sq km in the Khor Kalba area, Al Hefaiyah Conservation Centre is home to 30 native mountain and desert species. With successful wildlife conservation measures, this Kalba centre...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sharjah Archaeology Museum</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>This museum offers a unique opportunity to explore the rich and deep-rooted history of Sharjah. Reports of many excavations and expeditions have shown that humans have been settled in Sharjah for more than 125.000 years.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Arabian Wildlife Center</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Located in Sharjah Desert Park, Arabia’s Wildlife Centre hosts several animals, including the Arabian Oryx, the UAE’s national animal, and the Arabian leopard, the region’s famous big cat. These endangered...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="mosque" style="display: none;">
        <div id="categTitle">
            <h1>MOSQUES IN SHARJAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Noor Mosque</h3>
                        <h4>Sharjah</h4>
                    </div>
                    <p>Al Noor Mosque is a place of worship open to the public and a popular Islamic tourism destination. It is an iconic landmark along the Sharjah corniche, with cascading domes and two towering minarets in the Ottoman style.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

<footer></footer>



  
<script type="text/javascript" src="javascript/hide-show.js"></script>
</body>
</html>

