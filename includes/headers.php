<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">


</head>
<body>

<!-- holds all the navigation contents -->
<div class="container-nav"> 

  <div class = "navbar" id="myTopnav">

 
  <!-- all the links, each has id to highlight the corresponding text for page -->
    <div class="holder"> 
     <a href="index.php" id = "home-nav">Home</a>
     <a href="emirates.php" id = "emirates-nav" >Emirates</a>
     <a href="#" id = "home-boomarks">Bookmarks</a>
     <a href="profile.php" id="profile"> 
       <svg width="23" height="26" viewBox="0 0 26 29" fill="none" xmlns="http://www.w3.org/2000/svg">
       <g filter="url(#filter0_d)">
       <path d="M13 12.75C11.6739 12.75 10.4021 12.2232 9.46447 11.2855C8.52678 10.3479 8 9.07608 8 7.75C8 6.42392 8.52678 5.15215 9.46447 4.21447C10.4021 3.27678 11.6739 2.75 13 2.75C14.3261 2.75 15.5979 3.27678 16.5355 4.21447C17.4732 5.15215 18 6.42392 18 7.75C18 9.07608 17.4732 10.3479 16.5355 11.2855C15.5979 12.2232 14.3261 12.75 13 12.75Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
       <path d="M3 25.25V24C3 22.0109 3.79018 20.1032 5.1967 18.6967C6.60322 17.2902 8.51088 16.5 10.5 16.5H15.5C17.4891 16.5 19.3968 17.2902 20.8033 18.6967C22.2098 20.1032 23 22.0109 23 24V25.25" stroke="white" stroke-width="2" stroke-linecap="round"/>
       </g>
       <defs>
       <filter id="filter0_d" x="0" y="0.75" width="26" height="28.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
       <feFlood flood-opacity="0" result="BackgroundImageFix"/>
       <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
       <feOffset dy="1"/>
       <feGaussianBlur stdDeviation="1"/>
       <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
       <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
       <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
       </filter>
       </defs>
      </svg>
     </a>

     <!-- menu icon for responsiveness -->
      <a href="javascript:void(0);" class="icon"  id = "menu"  onclick="myFunction()">
        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 2H22M0 18H22M0 10H22" stroke="white" stroke-width="3"/>
        </svg> 
      </a>

    </div>

  </div>

</div>


<!-- javascript  -->

<script>

// the onclick function
  function myFunction() {

    // gets the menu icon
    var x = document.getElementById("myTopnav");

    // checks if x has a class called navbar
    if (x.className === "navbar") {

      // add the class called responsive
      x.className += " responsive";

    } else {

      // if there's none, put navbar
     x.className = "navbar";

    }
  }
</script>

</body>
</html>