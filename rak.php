<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ras Al Khaimah</title>
	<link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <style>
        body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.288),rgba(0, 0, 0, 0.288)), url("images/emirates/rak_bg\ \(2\).jpg");
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
                <h1>RAS AL KHAIMAH</h1>
                <div class="description">
                    <p>The Emirate of Ras Al Khaimah has an impressive archaeological heritage and rich cultural history. This area has enticed settlers with its unique combination of the four different landscapes.</p>
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
            <h1>ENTERTAINMENT IN RAS AL KHAIMAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent1B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Hamra Mall</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Al Hamra Mall is uniquely themed and exudes a calm aura and is one of the most beautiful malls in the UAE. Designed in a distinctive traditional Arabic style, capturing warm colours and exquisite details... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent2A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Manar Mall</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Manar Mall is owned by Al Hamra Group, a leading real estate developer of the region. Since its opening in the year 2000, it has become a favourite spot for shopping and leisure. For retail, grocery shopping... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent3F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Flamingo Beach</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>At a distance of 21 km from Ras Al Khaimah International Airport, Flamingo Beach is a public beach located in Ras Al Khaimah. It is one of the popular public beaches of Ras Al Khaimah and among the... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent4F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Jasims Wildlife Park</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Jasim's Wildlife Park in Ras al Khaimah - United Arab Emirates is a wildlife park. This is a family-friendly place and the kids will have a great time over here due to the presence of a great variety of animals. The place... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent5C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Iceland Waterpark</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>The UAE’s largest waterpark and is located in Ras Al Khaimah – only an hours’ drive from Dubai. Iceland has more than 30 exciting slides, a huge wave pool, high end- private cabanas, an Olympic sized lap pool... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
            </div>

            
        </div>

        <div class="wrapCateg acc-tabs" id="dine" style="display: none;">
        <div id="categTitle">
            <h1>DINE IN RAS AL KHAIMAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdin1H.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Waldorf Astoria</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Waldorf Astoria Ras Al Khaimah is home to a variety of bespoke restaurants and bars, offering an exclusive range of dining and entertainment experiences to suit every mood and taste. Dine on...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdin2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Zaitouna House</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>With sweeping views of the Al Marjan waterfront, Zaitouna House serves up authentic Lebanese dishes and a sparkling al fresco setting. Try the restaurant’s moreish mezze, perfect grills and delicious desserts, as well... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdin3A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sanchaya</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Sanchaya will offer Asian flavors with fresh ingredients and an infusion of spices to tackle your taste buds. The restaurant offers great indoor ambiance and a large terrace with undisturbed views of the Arabian Gulf. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdin4E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Meze</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>An authentic Turkish restaurant that will take you on a trip inspired by the beautiful colors​ and tastes of the orient's spice markets. Enjoy great food in a stunning setting. Relax with shisha on the spacious... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdin5C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Piaceri Da Gustare</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Indulge in the finest à la carte Italian classics and pair with fine wines from an extensive collection at the elegant Piaceri da Gustare restaurant. Perfect for couples, the restaurant's wide selections of classic... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="activities" style="display: none;">
        <div id="categTitle">
            <h1>ACTIVITIES IN RAS AL KHAIMAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakact1D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Jebel Jais (Zipline)</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>The UAE's highest peak, Jebel Jais, is part of the spectacular Hajar mountains that were formed over 70 million years ago in the eastern part of Ras Al Khaimah, United Arab Emirates and Oman. The summit has an elevation of... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent5C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Iceland Waterpark</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>The UAE’s largest waterpark and is located in Ras Al Khaimah – only an hours’ drive from Dubai. Iceland has more than 30 exciting slides, a huge wave pool, high end- private cabanas, an Olympic sized lap pool...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent2A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Manar Mall</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Manar Mall is owned by Al Hamra Group, a leading real estate developer of the region. Since its opening in the year 2000, it has become a favourite spot for shopping and leisure. For retail, grocery shopping... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakact4H.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Wadi Shawka</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Wadi Shawka (literally 'powerful wadi') is a seasonal watercourse in the Hajar Mountains of Ras Al Khaimah, in the United Arab Emirates. Famous locally for the Shawka Dam, a renowned beauty spot and destination...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakact5C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Bassata Desert Village</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Bassata is an Arabic word for simplicity. Venture around the desert and you will find the entire camp reflecting simplicity. Bassata Village is a stretch of sand where you can enjoy adrenaline-fuelled dune bashing... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="sights" style="display: none;">
        <div id="categTitle">
            <h1>SIGHTS TO SEE IN RAS AL KHAIMAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/raksts1A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Jebel Jais</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/raksts2B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Hajar Mountains</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/raksts3F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dhayah Fort</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/raksts4G.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Jazirat Al Hamra</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdis1A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Shimal</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Shimal is the name of a settlement in Ras Al Khaimah, United Arab Emirates. It is associated with the Shihuh tribe of the Northern UAE and Oman and with the foundation of the Islamic era port of Julfar, and was once... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="discover" style="display: none;">
        <div id="categTitle">
            <h1>DISCOVER IN RAS AL KHAIMAH</h1>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdis1A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Shimal</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Shimal is the name of a settlement in Ras Al Khaimah, United Arab Emirates. It is associated with the Shihuh tribe of the Northern UAE and Oman and with the foundation of the Islamic era port of Julfar, and was once... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakent4F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Jasims Wildlife Park</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Jasim's Wildlife Park in Ras al Khaimah - United Arab Emirates is a wildlife park. This is a family-friendly place and the kids will have a great time over here due to the presence of a great variety of animals. The place... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ras al khaimah/rakdis3B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Saqr Park</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Saqr Park is the largest public park in Ras Al Khaimah, known for its vast areas of greenery. It is the perfect spot for adults and kids to unwind and relax. Under the guidance of El Sheikh Saqr bin Mohammed Al Qasimi the... </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="mosque" style="display: none;">
        <div id="categTitle">
            <h1>MOSQUES IN RAS AL KHAIMAH</h1>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Mosque</h3>
                        <h4>Ras Al Khaimah</h4>
                    </div>
                    <p>Sheikh Zayed Mosque is one of the most recognizable buildings in Ras al-Khaimah. It is a common point of reference.
                    There are a number of mosques in Ras al Khaimah. The best known...</p>
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

