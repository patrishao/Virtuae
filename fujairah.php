<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fujairah</title>
	<link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <style>
        body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.288),rgba(0, 0, 0, 0.288)), url("images/emirates/fuj_bg.jpg");
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
                <h1>FUJAIRAH</h1>
                <div class="description">
                    <p>Fujairah is known for its beaches and the solitude and relaxation they present. Offshore activities include scuba diving and snorkelling and there are many beautiful sites for these available in the area.</p>
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
            <h1>ENTERTAINMENT IN FUJAIRAH</h1>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/Shark-Island-Khorfakkan-1-scaled.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Shark Island</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Off the coast of the Khorfakkan public beach, this small rocky island is an underwater marvel for everyone who enjoys snorkeling, scuba diving and swimming. Sea anemones and turtles are a treat for snorkelers, while...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/snoopy.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Snoopy Island</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>A small rock island about 120m x 80m, Snoopy Island is named for the three sections of rock rising up to create a profile of feet, belly, and nose similar to the iconic image of Snoopy sleeping on top of his...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
            </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/kalba.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Kalba Corniche Park</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>The park is recognised as an ideal picnic and barbeque spot among tourists and a number of families. The park also has an open playground for children and access to a beach, but this is not ideal for swimming.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>            
        </div>

        <div class="wrapCateg acc-tabs" id="dine" style="display: none;">
        <div id="categTitle">
            <h1>DINE IN FUJAIRAH</h1>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/orangery.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>The Orangery</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Step into The Orangery where traditional and delicious British food triumphs. We make contemporary dining experience with influence from Europe and beyond with a local influences. Located in the heart...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/almeshwar.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Meshwar Restaurant</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Al Meshwar restaurant is divided in 2 floors and mezzanine with smoking and non smoking areas, VIP lounges, conference and wedding hall, butchery, kids area, prayer room and basement car parking. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/bookstore.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>The Bookstore</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>For every prohibition you create, you also create an underground. A small intimate speakeasy bar hidden behind a bookcase. Transform yourself back to the 20's and fully absorb yourself within the prohibition era.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/hooked.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Hooked Seafood</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Hooked is a contemporary seafood restaurant that pays homage to the rich Louisiana-inspired flavors & freshest seafood-boil favorites you've come to love! The rustic-industrial set up is the perfect venue...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/crepes.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Crepes and Burgers LLC</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>At Crepes & Burgers, we maintain high and consistent standards. Our customers are the most important part of our business and we do our best to make sure that their visit will be a pleasant one. Our guests...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="activities" style="display: none;">
        <div id="categTitle">
            <h1>ACTIVITIES IN FUJAIRAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/alaqahbeach.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Aqah Beach</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Nestled between the extraordinary backdrop of the Hajar Mountains and the glistening Indian Ocean, Le Meridien Al Aqah is a family friendly resort in Fujairah providing a scenic setting for a fun filled holiday.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/snoopy.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Snoopy Island</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>A small rock island about 120m x 80m, Snoopy Island is named for the three sections of rock rising up to create a profile of feet, belly, and nose similar to the iconic image of Snoopy sleeping on top of his...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/Shark-Island-Khorfakkan-1-scaled.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Shark Island</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Off the coast of the Khorfakkan public beach, this small rocky island is an underwater marvel for everyone who enjoys snorkeling, scuba diving and swimming. Sea anemones and turtles are a treat for snorkelers, while...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/fujmuseum.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Fujairah Museum</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>It covers famous places like Ajman Museum and the Ajman Beach, Fujairah Emirate's oldest mosque Al Bidiya, Sharjah Urban attractions and Khor Fakkan beach. Drive through the busy streets and experience local...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="sights" style="display: none;">
        <div id="categTitle">
            <h1>SIGHTS TO SEE IN FUJAIRAH</h1>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/alhayl.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al-Hayl Castle</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Al Hayl Castle or Al Hayl Palace was built around 1830 and belonged to the ruling family of Fujairah. Today, however, this historical site is managed by the Department of Antiquities and Heritage.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/snoopy.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Snoopy Island</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>A small rock island about 120m x 80m, Snoopy Island is named for the three sections of rock rising up to create a profile of feet, belly, and nose similar to the iconic image of Snoopy sleeping on top of his...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/fort.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Fujairah Fort</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Fujairah Fort is a fort in the city of Fujairah, United Arab Emirates (UAE). Dating back to the 16th century, it is among the oldest as well as the largest castles in the country. It is noted for playing...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="discover" style="display: none;">
        <div id="categTitle">
            <h1>DISCOVER IN FUJAIRAH</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/fort.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Fujairah Fort</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Fujairah Fort is a fort in the city of Fujairah, United Arab Emirates (UAE). Dating back to the 16th century, it is among the oldest as well as the largest castles in the country. It is noted for playing...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/alaqahbeach.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Aqah Beach</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Nestled between the extraordinary backdrop of the Hajar Mountains and the glistening Indian Ocean, Le Meridien Al Aqah is a family friendly resort in Fujairah providing a scenic setting for a fun filled holiday.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/bitnahfort.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Bitnah Fort</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Bithnah Fort is thought to date back to the late 18th century, having been built as a result of the Wahhabi incursions of the early 1800s following the Battle of Bithnah. The fort is constructed from stone, mudbrick...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/alhayl.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al-Hayl Castle</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Al Hayl Castle or Al Hayl Palace was built around 1830 and belonged to the ruling family of Fujairah. Today, however, this historical site is managed by the Department of Antiquities and Heritage.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/fridaymarket.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Friday Market</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Experience the feeling of a traditional Arabian souq (market) at Fujairah's Friday market. Set among mountains and valleys, with an open market setting, the iconic Friday Market attracts visitors from all over the region.</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="mosque" style="display: none;">
        <div id="categTitle">
            <h1>MOSQUES IN FUJAIRAH</h1>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/albidyah.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al-Bidyah Mosque</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>Also known as the Ottoman Mosque, Al-Badiyah Mosque is the oldest mosque in U.A.E, named after the town that once surrounded the holy place. There are several other archaeological sites...</p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/fujairah/sheikhzayed.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Mosque</h3>
                        <h4>Fujairah</h4>
                    </div>
                    <p>As part of the prudent initiatives of the President of UAE, H.H Sheikh Khalifa bin Zayed  Al Nahyan  (may Allah protect him), the Sheikh Zayed Mosque-Al Fujairah was constructed to be the second large mosque...</p>
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

