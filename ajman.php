<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajman</title>
	<link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <style>
        body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.288),rgba(0, 0, 0, 0.288)), url("images/emirates/ajm_bg.jpg");
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
                <h1>AJMAN</h1>
                <div class="description">
                    <p>Ajman is the capital of the emirate of Ajman in the United Arab Emirates. It is the smallest emirate of the United Arab Emirates and is engulfed by the larger emirate of Sharjah.</p>
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
            <h1>ENTERTAINMENT IN AJMAN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment1A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman City Centre</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>City Centre Ajman, conveniently located on Al Ittihad Street, is the largest shopping and entertainment destination in the emirate with 34,000sqm of retail space. The mall is home to more than 79 international...</p>
                    <div class="cardButton">
                            <a href="ajm-ent1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>At a distance of 19 km from Umm Al Quwain and 39 km from Ajman, Seneyah Island or Al Sinniyah Island is a serene island situated near the coast of Umm Al-Quwain city. It is one of the most popular places to visit...</p>
                    <div class="cardButton">
                            <a href="ajm-act2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment3F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Museum</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Ajman Museum is the emirate’s foremost museum illustrating life as it once was. The 18th-century fort served as the ruler’s residence until 1970, before it was converted into a museum a decade later.</p>
                    <div class="cardButton">
                            <a href="ajm-act3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
            <!--  -->
            <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment4D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Corniche</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lined with cafés and restaurants, the Corniche is a four-kilometre-long esplanade overlooking the Arabian Gulf. Much of the emirate’s social activities and events are centred on this area. Situated along the...</p>
                    <div class="cardButton">
                            <a href="ajm-act4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment5G.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>China Mall</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>One of the most well-known places in Ajman is China Mall. Formally known as China Mall Ajman, it is a major retail complex situated in the southern region of Al Jurf Industrial Area. It is a commercial strip...</p>
                    <div class="cardButton">
                            <a href="ajm-ent5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>

            
        </div>

        <div class="wrapCateg acc-tabs" id="dine" style="display: none;">
        <div id="categTitle">
            <h1>DINE IN AJMAN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmdin1C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Safi Steakhouse</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Unwind in chic sophistication while enjoying panoramic views of the pool, gardens and the Arabian Gulf at Safi. The menu features delectable cut of meat, freshly prepared on demand according to guest's preferences.</p>
                    <div class="cardButton">
                            <a href="ajm-din1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmdin2C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Cafe Naseem</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Wondering where to brunch this season? Cafe Naseem is the place and this is why it is - a lavish international buffet spread, live cooking stations, seating facing the beach and live music - perfect enough for a laid-back brunch.</p>
                    <div class="cardButton">
                            <a href="ajm-din2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmdin3D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Bab Al Bahar</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Bab Al Bahar it's a beach bar located in 5* hotel Ajman Palace. It got a nice see view, simple but accurate decor. </p>
                    <div class="cardButton">
                            <a href="ajm-din3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmdin5F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Danial Restaurant</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Bringing the best taste to your parties and gatherings. Our catering service is available for your parties and gathering anywhere in the UAE. With an exquisite menu of phenomenal tastes and textures...  </p>
                    <div class="cardButton">
                            <a href="ajm-din5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmdin4F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dragon's Place</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Dragon's Place is a smart casual and contemporary restaurant, featuring a sushi bar, private Teppanyaki dining table, and two private washitsu rooms with low floor seating. It is the place where you can enjoy...</p>
                    <div class="cardButton">
                            <a href="ajm-din4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="activities" style="display: none;">
        <div id="categTitle">
            <h1>ACTIVITIES IN AJMAN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmact1A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Aqua Bounce</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>It’s a fun way to get in some serious exercise – the bouncy assault course also provides a test on scrambler’s stamina, balance and motor-skills. With obstacles providing challenges for a range of abilities...</p>
                    <div class="cardButton">
                            <a href="ajm-act1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>At a distance of 19 km from Umm Al Quwain and 39 km from Ajman, Seneyah Island or Al Sinniyah Island is a serene island situated near the coast of Umm Al-Quwain city. It is one of the most popular places to visit...</p>
                    <div class="cardButton">
                            <a href="ajm-act2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment3F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Museum</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Ajman Museum is the emirate’s foremost museum illustrating life as it once was. The 18th-century fort served as the ruler’s residence until 1970, before it was converted into a museum a decade later.</p>
                    <div class="cardButton">
                            <a href="ajm-act3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment4D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Corniche</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lined with cafés and restaurants, the Corniche is a four-kilometre-long esplanade overlooking the Arabian Gulf. Much of the emirate’s social activities and events are centred on this area. Situated along the...</p>
                    <div class="cardButton">
                            <a href="ajm-act4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="sights" style="display: none;">
        <div id="categTitle">
            <h1>SIGHTS TO SEE IN AJMAN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment3F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Museum</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Ajman Museum is the emirate’s foremost museum illustrating life as it once was. The 18th-century fort served as the ruler’s residence until 1970, before it was converted into a museum a decade later.</p>
                    <div class="cardButton">
                            <a href="ajm-act3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>At a distance of 19 km from Umm Al Quwain and 39 km from Ajman, Seneyah Island or Al Sinniyah Island is a serene island situated near the coast of Umm Al-Quwain city. It is one of the most popular places to visit...</p>
                    <div class="cardButton">
                            <a href="ajm-act2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <div class="wrapCateg acc-tabs" id="discover" style="display: none;">
        <div id="categTitle">
            <h1>DISCOVER IN AJMAN</h1>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/IMG_2152.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Dhow Building Yard</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Historically, wooden dhows played a vital role in fishing, pearling and trading across the region. Ajman’s Dhow Yard remains one of the world's largest dhow-building centres. You’ll find the...</p>
                    <div class="cardButton">
                            <a href="ajm-dis1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajment5G.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>China Mall</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>One of the most well-known places in Ajman is China Mall. Formally known as China Mall Ajman, it is a major retail complex situated in the southern region of Al Jurf Industrial Area. It is a commercial strip...</p>
                    <div class="cardButton">
                            <a href="ajm-ent5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmdis3D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Zorah Natural Reserve</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Al Zorah Nature Reserve is a vibrant ecosystem made up of mangroves, turquoise lagoons and sandy beaches, which is home to nearly 58 species of bird including pink flamingo, egret and heron.</p>
                    <div class="cardButton">
                            <a href="ajm-dis3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/IMG_2172.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Murabba Watchtower</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>The Arabian Peninsula is dotted with mud-brick forts and watchtowers, built to protect coastal towns, and the sandy-coloured Al-Muraba Watchtower has served as the guardian of Ajman for over 80 years.</p>
                    <div class="cardButton">
                            <a href="ajm-dis2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="mosque" style="display: none;">
        <div id="categTitle">
            <h1>MOSQUES IN AJMAN</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/ajman/ajmmos1C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Mosque</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Among all the religious institutions of Ajman, Sheikh Zayed Ajman Mosque stands high on the itinerary of the emirate with its remarkable and intrinsic architecture. Built in the memory of Late Sheikh Rashid bin Humaid Al Nuaimi...</p>
                    <div class="cardButton">
                            <a href="ajm-mos1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

<footer></footer>



  
<script type="text/javascript" src="javascript/hide-show.js"></script>
</body>
</html>

