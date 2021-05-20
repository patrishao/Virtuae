<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/header-edit.css">


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
     <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M15 13.75C13.6739 13.75 12.4021 13.2232 11.4645 12.2855C10.5268 11.3479 10 10.0761 10 8.75C10 7.42392 10.5268 6.15215 11.4645 5.21447C12.4021 4.27678 13.6739 3.75 15 3.75C16.3261 3.75 17.5979 4.27678 18.5355 5.21447C19.4732 6.15215 20 7.42392 20 8.75C20 10.0761 19.4732 11.3479 18.5355 12.2855C17.5979 13.2232 16.3261 13.75 15 13.75Z" stroke="#2C2C2C" stroke-width="2" stroke-linecap="round"/>
     <path d="M5 26.25V25C5 23.0109 5.79018 21.1032 7.1967 19.6967C8.60322 18.2902 10.5109 17.5 12.5 17.5H17.5C19.4891 17.5 21.3968 18.2902 22.8033 19.6967C24.2098 21.1032 25 23.0109 25 25V26.25" stroke="#2C2C2C" stroke-width="2" stroke-linecap="round"/>
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