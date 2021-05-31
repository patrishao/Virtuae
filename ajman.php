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
                <img src="images/ajman/ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajment3F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Museum</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajment4D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Corniche</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajment5G.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>China Mall</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/ajman/ajmdin2C.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Cafe Naseem</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajmdin3D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Bab Al Bahr</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajmdin5F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Danial Restaurant</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajmdin4F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Dragon's Place</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/ajman/ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajment3F.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Museum</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajment4D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Ajman Corniche</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
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
                <img src="images/ajman/ajment2E.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Sinniyah Island</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
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
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Jarah Culture Centre</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/ajmdis3D.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Zorah Natural Reserve</h3>
                        <h4>Ajman</h4>
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
                <img src="images/ajman/IMG_2172.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Al Murabba Watchtower</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    <div class="cardButton">
                            <a href="#"><button class="moreContent">READ MORE</button></a>
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
                <img src="marina.jpg" alt="" srcset="">
            </div>
            <div class="cardContent">
                <div class="contents">
                    <div class="contentTitle">
                        <h3>Sheikh Zayed Mosque</h3>
                        <h4>Ajman</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
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

