<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dubai</title>
	<link rel="stylesheet" type="text/css" href="css/category.css">
    <link rel="stylesheet" type="text/css" href="css/trans-page.css"> 
    <style>
        body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.288),rgba(0, 0, 0, 0.288)), url("images/emirates/dubai_bg.jpg");
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
                <h1>DUBAI</h1>
                <div class="description">
                    <p>Dubai is known for luxury shopping, modern architecture, and a lively nightlife scene. Burj Khalifa, the tallest building in the world, dominates the skyscraper-filled skyline.</p>
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
            <h1>ENTERTAINMENT IN DUBAI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/Dubai-Opera-House.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Opera</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Dubai Opera is a definitive international destination for performing arts and world-class entertainment productions with its unique 2000-seat multi-format theatre. Dubai Opera passionately embraces... </p>
                    <div class="cardButton">
                            <a href="dxb-ent1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dovi-KHR6LwUyODU-unsplash.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Mall</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>The Dubai Mall, the most-visited retail and entertainment destination, which welcomes more than 80 million visitors annually. The Dubai Mall has over 1,300 retail outlets, including two anchor department... </p>
                    <div class="cardButton">
                            <a href="dxb-ent2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/legolanf.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Legoland</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Legoland Dubai is an indoor theme park exclusively engineered for complete family entertainment. It is a one-of-its-kind amusement park which has got everything to satisfy the cravings of your 2 to 12-year-old child.</p>
                    <div class="cardButton">
                            <a href="dxb-ent3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/Dubai-Festival-City-Mall-1-1.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Festival City Mall</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>With over 400 outlets, the mall is home to UAE’s first IKEA and renowned fashion brands like Zara, H&M, Coach and Kate Spade. It also houses the global attraction, IMAGINE, a two-time Guinness World Records visual... </p>
                    <div class="cardButton">
                            <a href="dxb-ent4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dancers-bollywood-park-dubai.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Bollywood Parks</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Bollywood Parks Dubai is the first park of its kind in the world. In six fascinating zones, you can experience different environments inspired by the greatest Bollywood blockbusters. Experience the diverse cultures... </p>
                    <div class="cardButton">
                            <a href="dxb-ent5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
            </div>

            
        </div>

        <div class="wrapCateg acc-tabs" id="dine" style="display: none;">
        <div id="categTitle">
            <h1>DINE IN DUBAI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdin1B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Morimoto Restaurant</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Morimoto is the first restaurant in the region from Iron Chef star Masaharu Morimoto. Staying true to its namesake’s signature style, Morimoto offers a unique take on Japanese menu staples. </p>
                    <div class="cardButton">
                            <a href="dxb-din1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdin2A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Malecon Restaurant</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Malecon is the place to be for the full-on Latin experience, a zesty blend of Latin American cuisines and a carefully selected fusion of international styles. Live Latino entertainment further serves...</p>
                    <div class="cardButton">
                            <a href="dxb-din2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdin3A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Wokyo Noodle Bar</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Wokyo is a casual noodle bar with the mission to explore the great noodle tradition of the Far East. Creating noodle dishes with the perfect flavor, texture, aroma and slurp factor is a craft that we honor every day.</p>
                    <div class="cardButton">
                            <a href="dxb-din3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdin4C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Pitfire Pizza</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Pitfire may describe its pizzas as ‘not quite Neapolitan, not quite New York’, but all you really need to know is that these slices are simply not to be missed. Lovingly devised by founders Michele and Bill Johnson, beautifully blistered...</p>
                    <div class="cardButton">
                            <a href="dxb-din4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdin5D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Catch22</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Catch22 is a social contemporary eatery that serves an array of international dishes. Offering a dilemma of choice, the menu really has something for everyone, whether you want to share dishes among friends or enjoy all to yourself.</p>
                    <div class="cardButton">
                            <a href="dxb-din5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="activities" style="display: none;">
        <div id="categTitle">
            <h1>ACTIVITIES IN DUBAI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbact1B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>IMG Worlds of Adventure</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>IMG Worlds of Adventure is one of Dubai's best theme parks, bringing Marvel and Cartoon Network characters to life with state-of-the-art rides. Covering an area of more than 28 football fields, you’ll want to ensure you’re wearing comfortable shoes.</p>
                    <div class="cardButton">
                            <a href="dxb-act1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbact2C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Skydive Dubai</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Skydive Dubai is the top skydiving company located in Mina Seyahi, next to Jumeirah beach. Witness the ambience of Dubai from the sky & slash the dream of skydiving from your bucket list. </p>
                    <div class="cardButton">
                            <a href="dxb-act2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbact3A (1).jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ski Dubai</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Ski Dubai is an indoor ski resort with 22,500 square meters of indoor ski area. The park maintains a temperature of -1 degree to 2 degrees Celsius throughout the year. It is a part of the Mall of the Emirates... </p>
                    <div class="cardButton">
                            <a href="dxb-act3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbact4A.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Wild Wadi Waterpark</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Wild Wadi Water Park is an internationally renowned water park located in the Jumeirah area of Dubai near the famous Burj Al Arab. Owned and operated by the world-renowned hotel group, Jumeirah International...</p>
                    <div class="cardButton">
                            <a href="dxb-act4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbact5F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Global Village</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Global Village combines cultures of 90 countries across the world at one place. It claims to be the world's largest tourism, leisure, shopping and entertainment project. It is the region's first cultural, entertainment, family and shopping destination.</p>
                    <div class="cardButton">
                            <a href="dxb-act5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="wrapCateg acc-tabs" id="sights" style="display: none;">
        <div id="categTitle">
            <h1>SIGHTS TO SEE IN DUBAI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/burjkhalifa.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Burj Khalifa</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Soaring 828m into the sky, the Burj Khalifa is the tallest building in the world and one of the greatest engineering feats of all time. Completed in 2010, the mighty tower represents the beating heart of Dubai and its brave ambitions.</p>
                    <div class="cardButton">
                            <a href="dxb-sts1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dubaiframe.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Frame</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Dubai Frame opened to the public in January 2018 and has quickly become one of the most popular attractions in Dubai and in the UAE. If you’re looking for a great way to spend your day in Dubai, visiting the Dubai Frame...</p>
                    <div class="cardButton">
                            <a href="dxb-sts2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dubai-miracle-garden-emirates-plane.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Miracle Garden</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Each season, as the weather begins to cool at the onset of winter, the gates reopen at Dubai Miracle Garden. With more than 150 million flowers in full bloom, this 72,000-sq-m paradise has flowered into one of the region’s most...</p>
                    <div class="cardButton">
                            <a href="dxb-sts3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/fahidi.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Fahidi Historical District </h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>The traditional style of life that was prevalent in Dubai from the mid 19th century till the 1970s is reflected at Al-Fahidi Historical Neighbourhood, where buildings with high air towers (Barajeel), built...</p>
                    <div class="cardButton">
                            <a href="dxb-sts4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/aquarium.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dubai Aquarium and Underwater Zoo</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Rising to the third floor of The Dubai Mall, the aquarium is home to 140 species of sea life and offers many incredible ways to experience the underwater world. Stroll through a 48-metre tunnel, with the aquarium...</p>
                    <div class="cardButton">
                            <a href="dxb-sts5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="discover" style="display: none;">
        <div id="categTitle">
            <h1>DISCOVER IN DUBAI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdis1C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>The Buried Village of Al Madama</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Not too far from Dubai, one of the fastest developing cities in the world, is a buried village outside of Al Madam. Out in the desert, the town is a relic of an unknown past. No one is exactly sure why the... </p>
                    <div class="cardButton">
                            <a href="dxb-dis1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdis2G.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Shindagha Museum</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Set along the historic waters of Dubai Creek, Al Shindagha Museum tells the proud story of the nation’s past and reverent traditions. The museum’s 'Dubai Creek: Birth of a City' is a state-of-the-art multimedia...</p>
                    <div class="cardButton">
                            <a href="dxb-dis2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdis3B.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Serkal Avenue</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Once an industrial area in the very centre of Dubai, Alserkal Avenue now comprises around 40 warehouses, converted into galleries, dance studios, artisanal cafés and more. The neighbourhood has nurtured...</p>
                    <div class="cardButton">
                            <a href="dxb-dis3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdis4C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Etihad Museum</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>A dynamic 21st century museum, Etihad Museum is focused on inspiring its visitors with the story of the founding of the UAE.The 25,000 m2 landmark is befittingly located at the very place where the UAE was founded in 1971.</p>
                    <div class="cardButton">
                            <a href="dxb-dis4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/dxbdis5D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>The Green Planet </h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Discover the wonders of a tropical forest at The Green Planet, a bio-dome that invites visitors to explore our planet’s fascinating flora and fauna through an immersive expedition into the tropics. Designed as an enclosed... </p>
                    <div class="cardButton">
                            <a href="dxb-dis5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="wrapCateg acc-tabs" id="mosque" style="display: none;">
        <div id="categTitle">
            <h1>MOSQUES IN DUBAI</h1>
        </div>

        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/jmosque.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Jumeirah Mosque</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>One of the most iconic landmarks in Dubai is the Jumeirah Mosque. Adopting an ‘Open Doors, Open Minds’ policy, the mosque welcomes visitors of all faiths to admire the surroundings and learn about Islam and the local culture.</p>
                    <div class="cardButton">
                            <a href="dxb-mos1.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/iranian.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Iranian Mosque</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>The Iranian Mosque Hosainia is a Shia mosque Hosainia located near the old Textile Souk in the Bur Dubai district of Dubai, United Arab Emirates. The mosque is inspired by Persian architecture and is notable...</p>
                    <div class="cardButton">
                            <a href="dxb-mos2.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/alfarooq.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Farooq Omar Ibn Al Khattab Mosque – Umm Suqueim</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>The Al Farooq Omar Bin Al Khattab Mosque and Centre is one of the first mosques to open their doors to non-Muslims. Whether you want to discover the faith of Islam, admire stunning architecture, or stop by to pray...</p>
                    <div class="cardButton">
                            <a href="dxb-mos3.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/alsalam.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Salam Mosque</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Al Salam Mosque is one of the most magnificent mosques located in Al Barsha behind Mall of the Emirates. Its capacity is of 1,500 worshippers with a separate prayer hall for females and a separate hall for Iftar.</p>
                    <div class="cardButton">
                            <a href="dxb-mos4.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="card">
            <div class="imgCard">
                <img src="images/dubai/mkhalifa.JPG" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Khalifa Al Tajer Mosque</h3>
                        <h4>Dubai</h4>
                    </div>
                    <p>Covering an area more Khalifa Al Tajer Mosquethan 105,000 square feet, the Khalifa Al Tajer Mosque is the Middle East’s first eco-friendly mosque. Positioned in Deira, the mosque is to offer prayer and can house up to 3,500 worshippers.</p>
                    <div class="cardButton">
                            <a href="dxb-mos5.php"><button class="moreContent">READ MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

<footer></footer>



  
<script type="text/javascript" src="javascript/hide-show.js"></script>
</body>
</html>

