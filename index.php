
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<body>




<!-- Nav and First Part -->
<div id="nav"> 
<!-- <img src = "images/logo_thickb.png" id="virtuae" style="width: 60px; height: 60px;"> -->
<img src = "images/logo_thickw.png" id="virtuae" style="width: 60px; height: 60px;">
<!-- including the nav layout -->
<?php include 'includes/headers.php';?> 

<!-- the moving images and its contents -->
   <div id="slideshow">   

       <!-- place1, green planet -->
       <div id="place1" class="place">   
          <h1>THE GREEN PLANET</h1>
           <div class="nav-contents">
              <svg width="28" height="30" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                     <path d="M9.54162 11.4042C8.38074 11.1637 7.35015 10.5016 6.64889 9.54572C5.94764 8.58984 5.62547 7.40801 5.74462 6.22849C5.86376 5.04897 6.41576 3.95544 7.29401 3.15911C8.17225 2.36277 9.31443 1.92013 10.4999 1.91667C11.6882 1.91548 12.8346 2.35586 13.7164 3.15232C14.5983 3.94879 15.1528 5.04451 15.2722 6.22678C15.3916 7.40905 15.0675 8.59352 14.3627 9.55025C13.6579 10.507 12.6228 11.1677 11.4583 11.4042V20.125C11.4583 20.3792 11.3573 20.6229 11.1776 20.8027C10.9979 20.9824 10.7541 21.0833 10.4999 21.0833C10.2458 21.0833 10.002 20.9824 9.82231 20.8027C9.64258 20.6229 9.54162 20.3792 9.54162 20.125V11.4042ZM10.4999 9.58334C10.8775 9.58334 11.2514 9.50898 11.6002 9.36449C11.949 9.22001 12.2659 9.00824 12.5329 8.74127C12.7998 8.4743 13.0116 8.15737 13.1561 7.80856C13.3006 7.45974 13.3749 7.08589 13.3749 6.70834C13.3749 6.33079 13.3006 5.95694 13.1561 5.60813C13.0116 5.25932 12.7998 4.94238 12.5329 4.67541C12.2659 4.40844 11.949 4.19667 11.6002 4.05219C11.2514 3.90771 10.8775 3.83334 10.4999 3.83334C9.73745 3.83334 9.00618 4.13624 8.46702 4.67541C7.92785 5.21458 7.62495 5.94584 7.62495 6.70834C7.62495 7.47084 7.92785 8.20211 8.46702 8.74127C9.00618 9.28044 9.73745 9.58334 10.4999 9.58334Z" fill="white"/>
                     <path d="M10.4997 1.66667L10.4992 1.66668C9.25187 1.67031 8.05013 2.13604 7.12608 2.9739C6.20203 3.81177 5.62124 4.96233 5.49588 6.20336C5.37053 7.4444 5.70949 8.68786 6.44732 9.69359C7.14476 10.6443 8.15182 11.3188 9.29162 11.6035V20.125C9.29162 20.4455 9.41892 20.7528 9.64553 20.9794C9.87213 21.206 10.1795 21.3333 10.4999 21.3333C10.8204 21.3333 11.1278 21.206 11.3544 20.9794C11.581 20.7528 11.7083 20.4455 11.7083 20.125V11.6043C12.8517 11.3232 13.8631 10.65 14.564 9.69853C15.3055 8.69188 15.6466 7.44561 15.5209 6.20166C15.3953 4.9577 14.8119 3.80481 13.884 2.96679C12.9561 2.12877 11.75 1.66542 10.4997 1.66667ZM11.5045 9.13352C11.186 9.26544 10.8447 9.33334 10.4999 9.33334C9.80376 9.33334 9.13608 9.05678 8.64379 8.5645C8.15151 8.07221 7.87495 7.40453 7.87495 6.70834C7.87495 6.01215 8.15151 5.34447 8.64379 4.85219C9.13608 4.3599 9.80376 4.08334 10.4999 4.08334C10.8447 4.08334 11.186 4.15124 11.5045 4.28316C11.823 4.41508 12.1123 4.60843 12.3561 4.85219C12.5999 5.09594 12.7932 5.38532 12.9251 5.7038C13.0571 6.02228 13.1249 6.36362 13.1249 6.70834C13.1249 7.05306 13.0571 7.39441 12.9251 7.71288C12.7932 8.03136 12.5999 8.32074 12.3561 8.5645C12.1123 8.80825 11.823 9.00161 11.5045 9.13352Z" stroke="white" stroke-width="0.5"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.220337" y="-3.58333" width="20.5761" height="30.1667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset/>
                      <feGaussianBlur stdDeviation="2.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
              </svg>
 

              <p>Dubai</p>
              <br>
              <a href="#">EXPLORE</a> 
            </div>
        </div>

        <!-- place2, jebel jais  -->
        <div id="place2" class="place hidden">   
          <h1>JEBEL JAIS</h1>
           <div class="nav-contents">
              <svg width="28" height="30" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                     <path d="M9.54162 11.4042C8.38074 11.1637 7.35015 10.5016 6.64889 9.54572C5.94764 8.58984 5.62547 7.40801 5.74462 6.22849C5.86376 5.04897 6.41576 3.95544 7.29401 3.15911C8.17225 2.36277 9.31443 1.92013 10.4999 1.91667C11.6882 1.91548 12.8346 2.35586 13.7164 3.15232C14.5983 3.94879 15.1528 5.04451 15.2722 6.22678C15.3916 7.40905 15.0675 8.59352 14.3627 9.55025C13.6579 10.507 12.6228 11.1677 11.4583 11.4042V20.125C11.4583 20.3792 11.3573 20.6229 11.1776 20.8027C10.9979 20.9824 10.7541 21.0833 10.4999 21.0833C10.2458 21.0833 10.002 20.9824 9.82231 20.8027C9.64258 20.6229 9.54162 20.3792 9.54162 20.125V11.4042ZM10.4999 9.58334C10.8775 9.58334 11.2514 9.50898 11.6002 9.36449C11.949 9.22001 12.2659 9.00824 12.5329 8.74127C12.7998 8.4743 13.0116 8.15737 13.1561 7.80856C13.3006 7.45974 13.3749 7.08589 13.3749 6.70834C13.3749 6.33079 13.3006 5.95694 13.1561 5.60813C13.0116 5.25932 12.7998 4.94238 12.5329 4.67541C12.2659 4.40844 11.949 4.19667 11.6002 4.05219C11.2514 3.90771 10.8775 3.83334 10.4999 3.83334C9.73745 3.83334 9.00618 4.13624 8.46702 4.67541C7.92785 5.21458 7.62495 5.94584 7.62495 6.70834C7.62495 7.47084 7.92785 8.20211 8.46702 8.74127C9.00618 9.28044 9.73745 9.58334 10.4999 9.58334Z" fill="white"/>
                     <path d="M10.4997 1.66667L10.4992 1.66668C9.25187 1.67031 8.05013 2.13604 7.12608 2.9739C6.20203 3.81177 5.62124 4.96233 5.49588 6.20336C5.37053 7.4444 5.70949 8.68786 6.44732 9.69359C7.14476 10.6443 8.15182 11.3188 9.29162 11.6035V20.125C9.29162 20.4455 9.41892 20.7528 9.64553 20.9794C9.87213 21.206 10.1795 21.3333 10.4999 21.3333C10.8204 21.3333 11.1278 21.206 11.3544 20.9794C11.581 20.7528 11.7083 20.4455 11.7083 20.125V11.6043C12.8517 11.3232 13.8631 10.65 14.564 9.69853C15.3055 8.69188 15.6466 7.44561 15.5209 6.20166C15.3953 4.9577 14.8119 3.80481 13.884 2.96679C12.9561 2.12877 11.75 1.66542 10.4997 1.66667ZM11.5045 9.13352C11.186 9.26544 10.8447 9.33334 10.4999 9.33334C9.80376 9.33334 9.13608 9.05678 8.64379 8.5645C8.15151 8.07221 7.87495 7.40453 7.87495 6.70834C7.87495 6.01215 8.15151 5.34447 8.64379 4.85219C9.13608 4.3599 9.80376 4.08334 10.4999 4.08334C10.8447 4.08334 11.186 4.15124 11.5045 4.28316C11.823 4.41508 12.1123 4.60843 12.3561 4.85219C12.5999 5.09594 12.7932 5.38532 12.9251 5.7038C13.0571 6.02228 13.1249 6.36362 13.1249 6.70834C13.1249 7.05306 13.0571 7.39441 12.9251 7.71288C12.7932 8.03136 12.5999 8.32074 12.3561 8.5645C12.1123 8.80825 11.823 9.00161 11.5045 9.13352Z" stroke="white" stroke-width="0.5"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.220337" y="-3.58333" width="20.5761" height="30.1667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset/>
                      <feGaussianBlur stdDeviation="2.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
              </svg>
 

              <p>Ras Al Khaimah</p>
              <br>
              <a href="#">EXPLORE</a> 
            </div>
        </div>


        <!-- place3, louvre -->
        <div id="place3" class="place hidden">   
          <h1>LOUVRE</h1>
           <div class="nav-contents">
              <svg width="28" height="30" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                     <path d="M9.54162 11.4042C8.38074 11.1637 7.35015 10.5016 6.64889 9.54572C5.94764 8.58984 5.62547 7.40801 5.74462 6.22849C5.86376 5.04897 6.41576 3.95544 7.29401 3.15911C8.17225 2.36277 9.31443 1.92013 10.4999 1.91667C11.6882 1.91548 12.8346 2.35586 13.7164 3.15232C14.5983 3.94879 15.1528 5.04451 15.2722 6.22678C15.3916 7.40905 15.0675 8.59352 14.3627 9.55025C13.6579 10.507 12.6228 11.1677 11.4583 11.4042V20.125C11.4583 20.3792 11.3573 20.6229 11.1776 20.8027C10.9979 20.9824 10.7541 21.0833 10.4999 21.0833C10.2458 21.0833 10.002 20.9824 9.82231 20.8027C9.64258 20.6229 9.54162 20.3792 9.54162 20.125V11.4042ZM10.4999 9.58334C10.8775 9.58334 11.2514 9.50898 11.6002 9.36449C11.949 9.22001 12.2659 9.00824 12.5329 8.74127C12.7998 8.4743 13.0116 8.15737 13.1561 7.80856C13.3006 7.45974 13.3749 7.08589 13.3749 6.70834C13.3749 6.33079 13.3006 5.95694 13.1561 5.60813C13.0116 5.25932 12.7998 4.94238 12.5329 4.67541C12.2659 4.40844 11.949 4.19667 11.6002 4.05219C11.2514 3.90771 10.8775 3.83334 10.4999 3.83334C9.73745 3.83334 9.00618 4.13624 8.46702 4.67541C7.92785 5.21458 7.62495 5.94584 7.62495 6.70834C7.62495 7.47084 7.92785 8.20211 8.46702 8.74127C9.00618 9.28044 9.73745 9.58334 10.4999 9.58334Z" fill="white"/>
                     <path d="M10.4997 1.66667L10.4992 1.66668C9.25187 1.67031 8.05013 2.13604 7.12608 2.9739C6.20203 3.81177 5.62124 4.96233 5.49588 6.20336C5.37053 7.4444 5.70949 8.68786 6.44732 9.69359C7.14476 10.6443 8.15182 11.3188 9.29162 11.6035V20.125C9.29162 20.4455 9.41892 20.7528 9.64553 20.9794C9.87213 21.206 10.1795 21.3333 10.4999 21.3333C10.8204 21.3333 11.1278 21.206 11.3544 20.9794C11.581 20.7528 11.7083 20.4455 11.7083 20.125V11.6043C12.8517 11.3232 13.8631 10.65 14.564 9.69853C15.3055 8.69188 15.6466 7.44561 15.5209 6.20166C15.3953 4.9577 14.8119 3.80481 13.884 2.96679C12.9561 2.12877 11.75 1.66542 10.4997 1.66667ZM11.5045 9.13352C11.186 9.26544 10.8447 9.33334 10.4999 9.33334C9.80376 9.33334 9.13608 9.05678 8.64379 8.5645C8.15151 8.07221 7.87495 7.40453 7.87495 6.70834C7.87495 6.01215 8.15151 5.34447 8.64379 4.85219C9.13608 4.3599 9.80376 4.08334 10.4999 4.08334C10.8447 4.08334 11.186 4.15124 11.5045 4.28316C11.823 4.41508 12.1123 4.60843 12.3561 4.85219C12.5999 5.09594 12.7932 5.38532 12.9251 5.7038C13.0571 6.02228 13.1249 6.36362 13.1249 6.70834C13.1249 7.05306 13.0571 7.39441 12.9251 7.71288C12.7932 8.03136 12.5999 8.32074 12.3561 8.5645C12.1123 8.80825 11.823 9.00161 11.5045 9.13352Z" stroke="white" stroke-width="0.5"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.220337" y="-3.58333" width="20.5761" height="30.1667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset/>
                      <feGaussianBlur stdDeviation="2.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
              </svg>
 

              <p>Abu Dhabi</p>
              <br>
              <a href="#">EXPLORE</a> 
            </div>
        </div>   
        

          <!-- place4, noor island -->
          <div id="place4" class="place hidden">   
          <h1>NOOR ISLAND</h1>
           <div class="nav-contents">
              <svg width="28" height="30" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                     <path d="M9.54162 11.4042C8.38074 11.1637 7.35015 10.5016 6.64889 9.54572C5.94764 8.58984 5.62547 7.40801 5.74462 6.22849C5.86376 5.04897 6.41576 3.95544 7.29401 3.15911C8.17225 2.36277 9.31443 1.92013 10.4999 1.91667C11.6882 1.91548 12.8346 2.35586 13.7164 3.15232C14.5983 3.94879 15.1528 5.04451 15.2722 6.22678C15.3916 7.40905 15.0675 8.59352 14.3627 9.55025C13.6579 10.507 12.6228 11.1677 11.4583 11.4042V20.125C11.4583 20.3792 11.3573 20.6229 11.1776 20.8027C10.9979 20.9824 10.7541 21.0833 10.4999 21.0833C10.2458 21.0833 10.002 20.9824 9.82231 20.8027C9.64258 20.6229 9.54162 20.3792 9.54162 20.125V11.4042ZM10.4999 9.58334C10.8775 9.58334 11.2514 9.50898 11.6002 9.36449C11.949 9.22001 12.2659 9.00824 12.5329 8.74127C12.7998 8.4743 13.0116 8.15737 13.1561 7.80856C13.3006 7.45974 13.3749 7.08589 13.3749 6.70834C13.3749 6.33079 13.3006 5.95694 13.1561 5.60813C13.0116 5.25932 12.7998 4.94238 12.5329 4.67541C12.2659 4.40844 11.949 4.19667 11.6002 4.05219C11.2514 3.90771 10.8775 3.83334 10.4999 3.83334C9.73745 3.83334 9.00618 4.13624 8.46702 4.67541C7.92785 5.21458 7.62495 5.94584 7.62495 6.70834C7.62495 7.47084 7.92785 8.20211 8.46702 8.74127C9.00618 9.28044 9.73745 9.58334 10.4999 9.58334Z" fill="white"/>
                     <path d="M10.4997 1.66667L10.4992 1.66668C9.25187 1.67031 8.05013 2.13604 7.12608 2.9739C6.20203 3.81177 5.62124 4.96233 5.49588 6.20336C5.37053 7.4444 5.70949 8.68786 6.44732 9.69359C7.14476 10.6443 8.15182 11.3188 9.29162 11.6035V20.125C9.29162 20.4455 9.41892 20.7528 9.64553 20.9794C9.87213 21.206 10.1795 21.3333 10.4999 21.3333C10.8204 21.3333 11.1278 21.206 11.3544 20.9794C11.581 20.7528 11.7083 20.4455 11.7083 20.125V11.6043C12.8517 11.3232 13.8631 10.65 14.564 9.69853C15.3055 8.69188 15.6466 7.44561 15.5209 6.20166C15.3953 4.9577 14.8119 3.80481 13.884 2.96679C12.9561 2.12877 11.75 1.66542 10.4997 1.66667ZM11.5045 9.13352C11.186 9.26544 10.8447 9.33334 10.4999 9.33334C9.80376 9.33334 9.13608 9.05678 8.64379 8.5645C8.15151 8.07221 7.87495 7.40453 7.87495 6.70834C7.87495 6.01215 8.15151 5.34447 8.64379 4.85219C9.13608 4.3599 9.80376 4.08334 10.4999 4.08334C10.8447 4.08334 11.186 4.15124 11.5045 4.28316C11.823 4.41508 12.1123 4.60843 12.3561 4.85219C12.5999 5.09594 12.7932 5.38532 12.9251 5.7038C13.0571 6.02228 13.1249 6.36362 13.1249 6.70834C13.1249 7.05306 13.0571 7.39441 12.9251 7.71288C12.7932 8.03136 12.5999 8.32074 12.3561 8.5645C12.1123 8.80825 11.823 9.00161 11.5045 9.13352Z" stroke="white" stroke-width="0.5"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.220337" y="-3.58333" width="20.5761" height="30.1667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset/>
                      <feGaussianBlur stdDeviation="2.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
              </svg>
 

              <p>Sharjah</p>
              <br>
              <a href="#">EXPLORE</a> 
            </div>
        </div>
  

          <!-- place5, al hayl castle  -->
          <div id="place5" class="place hidden">   
          <h1>AL HAYL CASTLE</h1>
           <div class="nav-contents">
              <svg width="28" height="30" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                     <path d="M9.54162 11.4042C8.38074 11.1637 7.35015 10.5016 6.64889 9.54572C5.94764 8.58984 5.62547 7.40801 5.74462 6.22849C5.86376 5.04897 6.41576 3.95544 7.29401 3.15911C8.17225 2.36277 9.31443 1.92013 10.4999 1.91667C11.6882 1.91548 12.8346 2.35586 13.7164 3.15232C14.5983 3.94879 15.1528 5.04451 15.2722 6.22678C15.3916 7.40905 15.0675 8.59352 14.3627 9.55025C13.6579 10.507 12.6228 11.1677 11.4583 11.4042V20.125C11.4583 20.3792 11.3573 20.6229 11.1776 20.8027C10.9979 20.9824 10.7541 21.0833 10.4999 21.0833C10.2458 21.0833 10.002 20.9824 9.82231 20.8027C9.64258 20.6229 9.54162 20.3792 9.54162 20.125V11.4042ZM10.4999 9.58334C10.8775 9.58334 11.2514 9.50898 11.6002 9.36449C11.949 9.22001 12.2659 9.00824 12.5329 8.74127C12.7998 8.4743 13.0116 8.15737 13.1561 7.80856C13.3006 7.45974 13.3749 7.08589 13.3749 6.70834C13.3749 6.33079 13.3006 5.95694 13.1561 5.60813C13.0116 5.25932 12.7998 4.94238 12.5329 4.67541C12.2659 4.40844 11.949 4.19667 11.6002 4.05219C11.2514 3.90771 10.8775 3.83334 10.4999 3.83334C9.73745 3.83334 9.00618 4.13624 8.46702 4.67541C7.92785 5.21458 7.62495 5.94584 7.62495 6.70834C7.62495 7.47084 7.92785 8.20211 8.46702 8.74127C9.00618 9.28044 9.73745 9.58334 10.4999 9.58334Z" fill="white"/>
                     <path d="M10.4997 1.66667L10.4992 1.66668C9.25187 1.67031 8.05013 2.13604 7.12608 2.9739C6.20203 3.81177 5.62124 4.96233 5.49588 6.20336C5.37053 7.4444 5.70949 8.68786 6.44732 9.69359C7.14476 10.6443 8.15182 11.3188 9.29162 11.6035V20.125C9.29162 20.4455 9.41892 20.7528 9.64553 20.9794C9.87213 21.206 10.1795 21.3333 10.4999 21.3333C10.8204 21.3333 11.1278 21.206 11.3544 20.9794C11.581 20.7528 11.7083 20.4455 11.7083 20.125V11.6043C12.8517 11.3232 13.8631 10.65 14.564 9.69853C15.3055 8.69188 15.6466 7.44561 15.5209 6.20166C15.3953 4.9577 14.8119 3.80481 13.884 2.96679C12.9561 2.12877 11.75 1.66542 10.4997 1.66667ZM11.5045 9.13352C11.186 9.26544 10.8447 9.33334 10.4999 9.33334C9.80376 9.33334 9.13608 9.05678 8.64379 8.5645C8.15151 8.07221 7.87495 7.40453 7.87495 6.70834C7.87495 6.01215 8.15151 5.34447 8.64379 4.85219C9.13608 4.3599 9.80376 4.08334 10.4999 4.08334C10.8447 4.08334 11.186 4.15124 11.5045 4.28316C11.823 4.41508 12.1123 4.60843 12.3561 4.85219C12.5999 5.09594 12.7932 5.38532 12.9251 5.7038C13.0571 6.02228 13.1249 6.36362 13.1249 6.70834C13.1249 7.05306 13.0571 7.39441 12.9251 7.71288C12.7932 8.03136 12.5999 8.32074 12.3561 8.5645C12.1123 8.80825 11.823 9.00161 11.5045 9.13352Z" stroke="white" stroke-width="0.5"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.220337" y="-3.58333" width="20.5761" height="30.1667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset/>
                      <feGaussianBlur stdDeviation="2.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
              </svg>
 

              <p>Fujairah</p>
              <br>
              <a href="#">EXPLORE</a> 
            </div>
        </div>



          <!-- place6, ajman museum -->
          <div id="place6" class="place hidden">   
          <h1>AJMAN MUSEUM</h1>
           <div class="nav-contents">
              <svg width="28" height="30" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                     <path d="M9.54162 11.4042C8.38074 11.1637 7.35015 10.5016 6.64889 9.54572C5.94764 8.58984 5.62547 7.40801 5.74462 6.22849C5.86376 5.04897 6.41576 3.95544 7.29401 3.15911C8.17225 2.36277 9.31443 1.92013 10.4999 1.91667C11.6882 1.91548 12.8346 2.35586 13.7164 3.15232C14.5983 3.94879 15.1528 5.04451 15.2722 6.22678C15.3916 7.40905 15.0675 8.59352 14.3627 9.55025C13.6579 10.507 12.6228 11.1677 11.4583 11.4042V20.125C11.4583 20.3792 11.3573 20.6229 11.1776 20.8027C10.9979 20.9824 10.7541 21.0833 10.4999 21.0833C10.2458 21.0833 10.002 20.9824 9.82231 20.8027C9.64258 20.6229 9.54162 20.3792 9.54162 20.125V11.4042ZM10.4999 9.58334C10.8775 9.58334 11.2514 9.50898 11.6002 9.36449C11.949 9.22001 12.2659 9.00824 12.5329 8.74127C12.7998 8.4743 13.0116 8.15737 13.1561 7.80856C13.3006 7.45974 13.3749 7.08589 13.3749 6.70834C13.3749 6.33079 13.3006 5.95694 13.1561 5.60813C13.0116 5.25932 12.7998 4.94238 12.5329 4.67541C12.2659 4.40844 11.949 4.19667 11.6002 4.05219C11.2514 3.90771 10.8775 3.83334 10.4999 3.83334C9.73745 3.83334 9.00618 4.13624 8.46702 4.67541C7.92785 5.21458 7.62495 5.94584 7.62495 6.70834C7.62495 7.47084 7.92785 8.20211 8.46702 8.74127C9.00618 9.28044 9.73745 9.58334 10.4999 9.58334Z" fill="white"/>
                     <path d="M10.4997 1.66667L10.4992 1.66668C9.25187 1.67031 8.05013 2.13604 7.12608 2.9739C6.20203 3.81177 5.62124 4.96233 5.49588 6.20336C5.37053 7.4444 5.70949 8.68786 6.44732 9.69359C7.14476 10.6443 8.15182 11.3188 9.29162 11.6035V20.125C9.29162 20.4455 9.41892 20.7528 9.64553 20.9794C9.87213 21.206 10.1795 21.3333 10.4999 21.3333C10.8204 21.3333 11.1278 21.206 11.3544 20.9794C11.581 20.7528 11.7083 20.4455 11.7083 20.125V11.6043C12.8517 11.3232 13.8631 10.65 14.564 9.69853C15.3055 8.69188 15.6466 7.44561 15.5209 6.20166C15.3953 4.9577 14.8119 3.80481 13.884 2.96679C12.9561 2.12877 11.75 1.66542 10.4997 1.66667ZM11.5045 9.13352C11.186 9.26544 10.8447 9.33334 10.4999 9.33334C9.80376 9.33334 9.13608 9.05678 8.64379 8.5645C8.15151 8.07221 7.87495 7.40453 7.87495 6.70834C7.87495 6.01215 8.15151 5.34447 8.64379 4.85219C9.13608 4.3599 9.80376 4.08334 10.4999 4.08334C10.8447 4.08334 11.186 4.15124 11.5045 4.28316C11.823 4.41508 12.1123 4.60843 12.3561 4.85219C12.5999 5.09594 12.7932 5.38532 12.9251 5.7038C13.0571 6.02228 13.1249 6.36362 13.1249 6.70834C13.1249 7.05306 13.0571 7.39441 12.9251 7.71288C12.7932 8.03136 12.5999 8.32074 12.3561 8.5645C12.1123 8.80825 11.823 9.00161 11.5045 9.13352Z" stroke="white" stroke-width="0.5"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.220337" y="-3.58333" width="20.5761" height="30.1667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset/>
                      <feGaussianBlur stdDeviation="2.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
              </svg>
 

              <p>Ajman</p>
              <br>
              <a href="ajm-act3.php">EXPLORE</a> 
            </div>
        </div>


          <!-- place7, kite beach -->
          <div id="place7" class="place hidden">   
          <h1>KITE BEACH CENTER</h1>
           <div class="nav-contents">
              <svg width="28" height="30" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                     <path d="M9.54162 11.4042C8.38074 11.1637 7.35015 10.5016 6.64889 9.54572C5.94764 8.58984 5.62547 7.40801 5.74462 6.22849C5.86376 5.04897 6.41576 3.95544 7.29401 3.15911C8.17225 2.36277 9.31443 1.92013 10.4999 1.91667C11.6882 1.91548 12.8346 2.35586 13.7164 3.15232C14.5983 3.94879 15.1528 5.04451 15.2722 6.22678C15.3916 7.40905 15.0675 8.59352 14.3627 9.55025C13.6579 10.507 12.6228 11.1677 11.4583 11.4042V20.125C11.4583 20.3792 11.3573 20.6229 11.1776 20.8027C10.9979 20.9824 10.7541 21.0833 10.4999 21.0833C10.2458 21.0833 10.002 20.9824 9.82231 20.8027C9.64258 20.6229 9.54162 20.3792 9.54162 20.125V11.4042ZM10.4999 9.58334C10.8775 9.58334 11.2514 9.50898 11.6002 9.36449C11.949 9.22001 12.2659 9.00824 12.5329 8.74127C12.7998 8.4743 13.0116 8.15737 13.1561 7.80856C13.3006 7.45974 13.3749 7.08589 13.3749 6.70834C13.3749 6.33079 13.3006 5.95694 13.1561 5.60813C13.0116 5.25932 12.7998 4.94238 12.5329 4.67541C12.2659 4.40844 11.949 4.19667 11.6002 4.05219C11.2514 3.90771 10.8775 3.83334 10.4999 3.83334C9.73745 3.83334 9.00618 4.13624 8.46702 4.67541C7.92785 5.21458 7.62495 5.94584 7.62495 6.70834C7.62495 7.47084 7.92785 8.20211 8.46702 8.74127C9.00618 9.28044 9.73745 9.58334 10.4999 9.58334Z" fill="white"/>
                     <path d="M10.4997 1.66667L10.4992 1.66668C9.25187 1.67031 8.05013 2.13604 7.12608 2.9739C6.20203 3.81177 5.62124 4.96233 5.49588 6.20336C5.37053 7.4444 5.70949 8.68786 6.44732 9.69359C7.14476 10.6443 8.15182 11.3188 9.29162 11.6035V20.125C9.29162 20.4455 9.41892 20.7528 9.64553 20.9794C9.87213 21.206 10.1795 21.3333 10.4999 21.3333C10.8204 21.3333 11.1278 21.206 11.3544 20.9794C11.581 20.7528 11.7083 20.4455 11.7083 20.125V11.6043C12.8517 11.3232 13.8631 10.65 14.564 9.69853C15.3055 8.69188 15.6466 7.44561 15.5209 6.20166C15.3953 4.9577 14.8119 3.80481 13.884 2.96679C12.9561 2.12877 11.75 1.66542 10.4997 1.66667ZM11.5045 9.13352C11.186 9.26544 10.8447 9.33334 10.4999 9.33334C9.80376 9.33334 9.13608 9.05678 8.64379 8.5645C8.15151 8.07221 7.87495 7.40453 7.87495 6.70834C7.87495 6.01215 8.15151 5.34447 8.64379 4.85219C9.13608 4.3599 9.80376 4.08334 10.4999 4.08334C10.8447 4.08334 11.186 4.15124 11.5045 4.28316C11.823 4.41508 12.1123 4.60843 12.3561 4.85219C12.5999 5.09594 12.7932 5.38532 12.9251 5.7038C13.0571 6.02228 13.1249 6.36362 13.1249 6.70834C13.1249 7.05306 13.0571 7.39441 12.9251 7.71288C12.7932 8.03136 12.5999 8.32074 12.3561 8.5645C12.1123 8.80825 11.823 9.00161 11.5045 9.13352Z" stroke="white" stroke-width="0.5"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.220337" y="-3.58333" width="20.5761" height="30.1667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                      <feOffset/>
                      <feGaussianBlur stdDeviation="2.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 0 0.170833 0 0 0 1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
              </svg>
 

              <p>Umm Al Quwainn</p>
              <br>
              <a href="#">EXPLORE</a> 
            </div>
        </div>




        
  </div>


  <!-- linking javascript and jquery related to that part -->

<script src="javascript/bgs.js"> </script>


<!-- dots that link to a specific heading -->
   <div class="pages"> 
     <!-- linking it an element with id of destinations-link -->

     <div class="page">  
       <a href="#first-link">
         <svg class="circles" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
           <circle cx="6.5" cy="6.5" r="6.5" fill="white"/>
          </svg>
       </a>  

     </div>

     <br>


     <div class="page">  
       <a href="#destinations-link">
         <svg class="circles" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
           <circle cx="6.5" cy="6.5" r="6.5" fill="white"/>
          </svg>
       </a>  

     </div>

     <br>


     <div class="page">  
       <a href="#adventures-link">
         <svg class="circles" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
           <circle cx="6.5" cy="6.5" r="6.5" fill="white"/>
          </svg>
       </a>  

     </div>

     <br>


     <div class="page">  
       <a href="#events-link">
         <svg class="circles" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
           <circle cx="6.5" cy="6.5" r="6.5" fill="white"/>
          </svg>
       </a>  

     </div>

     <br>


     <div class="page">  
       <a href="#dine-link">
         <svg class="circles" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
           <circle cx="6.5" cy="6.5" r="6.5" fill="white"/>
          </svg>
       </a>  

     </div>

     <br>


     <div class="page">  
       <a href="#creators-link">
         <svg class="circles" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
           <circle cx="6.5" cy="6.5" r="6.5" fill="white"/>
          </svg>
       </a>  

     </div>



</div>

</div>


<!-- Top Destinations Part / 2nd Part -->
<section class="top-destinations"> 

    <!-- br so there black bg will fill everything -->
    <br> 
   <!-- linked the 1 in here -->
   <a name= "destinations-link" class="header">TOP DESTINATIONS</a >
    <br>


    <!-- Destinations List -->


    <!-- wrapper that wraps the whole content -->
   <div class="wrapper">
  
    <!-- container that holds all the locations only -->
    <div class="container"> 

    <!-- lists of destinations with all of them having same classes for same designs
     and contents -->
      <div class="destinations">
        <img src="images/ras al khaimah/rakact4H.jpg">
        <h1>Wadi Shawka</h1>
        <h2>Ras Al Khaimah</h2>
      </div>

       <div class="destinations">
        <img src="images/dubai/burjkhalifa.JPG">
        <h1>Burj Khalifa</h1>
        <h2>Dubai</h2>
      </div>

      <div class="destinations">
        <img src="images/abu dhabi/auhdis6B.jpg">
        <h1>Yas Viceroy</h1>
        <h2>Abu Dhabi</h2>
      </div>

      <div class="destinations">
        <img src="images/ras al khaimah/raksts1A.jpg">
        <h1>Jebel Jais</h1>
        <h2>Ras Al Khaimah</h2>
     </div>

      <div class="destinations">
        <img src="images/abu dhabi/auhdis5E.jpg">
        <h1>Emirates Palace</h1>
        <h2>Abu Dhabi</h2>
     </div>

     <div class="destinations">
       <img src="images/abu dhabi/auhact2D.jpg">
       <h1>Zaya Nurai</h1>
       <h2>Abu Dhabi</h2>
     </div>
    </div>
  </div>

   <!-- the left and right button to scroll, they both have a class paddle to 
   have the same format-->
   <!-- holds all the buttons/paddles -->
   <!-- <div class="paddles">  -->

     <!-- right button -->
      <!-- <button class="right-paddle paddle"> 
          <svg width="22" height="35" viewBox="0 0 22 35" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M1.64405 29.2275L13.6074 17.2642L1.64405 5.30087C1.35859 5.0154 1.13215 4.67651 0.97766 4.30354C0.82317 3.93057 0.743652 3.53082 0.743652 3.12712C0.743652 2.72342 0.82317 2.32366 0.97766 1.95069C1.13215 1.57772 1.35859 1.23883 1.64405 0.953369C1.92951 0.667908 2.2684 0.441467 2.64137 0.286976C3.01435 0.132484 3.4141 0.0529709 3.8178 0.0529709C4.2215 0.0529709 4.62125 0.132484 4.99422 0.286976C5.3672 0.441467 5.70609 0.667908 5.99155 0.953369L20.144 15.1059C20.4299 15.3911 20.6567 15.7299 20.8114 16.1029C20.9661 16.4759 21.0457 16.8758 21.0457 17.2796C21.0457 17.6834 20.9661 18.0833 20.8114 18.4563C20.6567 18.8293 20.4299 19.1681 20.144 19.4534L5.99155 33.6059C5.7063 33.8917 5.36747 34.1185 4.99447 34.2732C4.62147 34.4279 4.22162 34.5076 3.8178 34.5076C3.41398 34.5076 3.01413 34.4279 2.64112 34.2732C2.26812 34.1185 1.9293 33.8917 1.64405 33.6059C0.472383 32.4034 0.44155 30.43 1.64405 29.2275Z" fill="white"/>
          </svg>
      </button> -->

     <!-- left button  -->
     <!-- <button class="left-paddle paddle">
        <svg width="22" height="35" viewBox="0 0 17 28" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M15.8291 4.46175L6.64314 13.7464L15.8291 23.0747C16.0483 23.2973 16.2222 23.5613 16.3408 23.8518C16.4595 24.1422 16.5205 24.4533 16.5205 24.7674C16.5205 25.0814 16.4595 25.3922 16.3408 25.6821C16.2222 25.972 16.0483 26.2352 15.8291 26.4567C15.61 26.6783 15.3497 26.8538 15.0633 26.9733C14.777 27.0928 14.47 27.1539 14.16 27.1532C13.8501 27.1524 13.5431 27.0899 13.2567 26.969C12.9703 26.8481 12.7101 26.6714 12.4909 26.4488L1.62398 15.4135C1.4045 15.1911 1.23038 14.9271 1.11157 14.6367C0.992765 14.3462 0.931611 14.035 0.931611 13.7209C0.931611 13.4067 0.992765 13.0958 1.11157 12.806C1.23038 12.5161 1.4045 12.2529 1.62398 12.0315L12.4909 1.04784C12.71 0.826006 12.9701 0.650214 13.2565 0.53053C13.5429 0.410846 13.85 0.349619 14.16 0.350354C14.4701 0.35109 14.7771 0.413775 15.0635 0.534819C15.3499 0.655863 15.6101 0.83289 15.8291 1.05577C16.7288 1.99335 16.7525 3.52849 15.8291 4.46175Z" fill="white"/>
       </svg>
     </button>
    </div>
 -->

   <!-- linking the javascripts and jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="javascript/scroll.js"> </script>
  </section> 
 <!-- end of Top Destinations Part -->




 <!--  Start of Adventure Part-->
 <section class="adventures"> 
  
   <!-- same as the previous class, setting an initial value for scrolling -->
   <input type="hidden" id="adv-initial" value="0"> 

   <a name= "adventures-link"></a>
   <!-- heading and linking the third dot here-->
   <h1 class="title"> FIND YOUR <br> ADVENTURE <br> IN THE UAE</h1> 


    <!-- wrapper that wraps thhe whole adventure content -->
   <div class="adv-wrapper">  

     <!-- container that consists of the adventure place list -->
     <div class="adv-container"> 

       <!-- list of the places with all of them having same class to have same format -->
      <div class="adventure-places">

       <!-- image link -->
       <img src="images/ras al khaimah/rakact1D.jpg">
       

       <!-- the headings and p components in class to set position easier -->
         <div class="components"> 
           <h1>Jebel Jais (Zipline)</h1>
           <h2>Ras Al Khaimah</h2>

           <p> The UAE's highest peak, Jebel Jais, is part of the spectacular Hajar mountains that were formed over 70 million years ago in the eastern part of Ras Al Khaimah, United Arab Emirates and Oman. The summit has an elevation of...</p>

           
          <a href="#">EXPLORE</a>

        </div>
   
      </div>


      <!-- rest of the list with having the same classes -->
      <div class="adventure-places">

       <img src="images/dubai/dxbact3A (1).jpg" >

          <div class="components"> 
          <h1>Ski Dubai</h1>
          <h2>Dubai</h2>

          <p class="wrap"> Ski Dubai is an indoor ski resort with 22,500 square meters of indoor ski area. The park maintains a temperature of -1 degree to 2 degrees Celsius throughout the year. It is a part of the Mall of the Emirates...</p>

          <a href="#">EXPLORE</a>

        </div>
   
      </div>

      <div class="adventure-places">

       <img src="images/ajman/ajmact1A.jpg" >

          <div class="components"> 
          <h1>Aqua Bounce</h1>
          <h2>Ajman</h2>

          <p class="wrap">It’s a fun way to get in some serious exercise – the bouncy assault course also provides a test on scrambler’s stamina, balance and motor-skills. With obstacles providing challenges for a range of abilities...</p>

          <a href="ajm-act1.php">EXPLORE</a>

        </div>
   
      </div>

       <div class="adventure-places">

       <img src="images/dubai/dxbact2C.jpg">

       <div class="components"> 
         <h1>Skydive Dubai</h1>
         <h2>Dubai</h2>

         <p class="wrap"> Skydive Dubai is the top skydiving company located in Mina Seyahi, next to Jumeirah beach. Witness the ambience of Dubai from the sky & slash the dream of skydiving from your bucket list.</p>

          <a href="#">EXPLORE</a>

        </div>
   
       </div>

    </div>

    </div>



   <!-- next and back button, codes are similar to the previous section -->
   <div class="adventure-paddles"> 

      <!-- right button -->
      <button class="adv-right-paddle adv-paddle"> 
       <svg width="22" height="30" viewBox="0 0 22 35" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M1.64405 29.2275L13.6074 17.2642L1.64405 5.30087C1.35859 5.0154 1.13215 4.67651 0.97766 4.30354C0.82317 3.93057 0.743652 3.53082 0.743652 3.12712C0.743652 2.72342 0.82317 2.32366 0.97766 1.95069C1.13215 1.57772 1.35859 1.23883 1.64405 0.953369C1.92951 0.667908 2.2684 0.441467 2.64137 0.286976C3.01435 0.132484 3.4141 0.0529709 3.8178 0.0529709C4.2215 0.0529709 4.62125 0.132484 4.99422 0.286976C5.3672 0.441467 5.70609 0.667908 5.99155 0.953369L20.144 15.1059C20.4299 15.3911 20.6567 15.7299 20.8114 16.1029C20.9661 16.4759 21.0457 16.8758 21.0457 17.2796C21.0457 17.6834 20.9661 18.0833 20.8114 18.4563C20.6567 18.8293 20.4299 19.1681 20.144 19.4534L5.99155 33.6059C5.7063 33.8917 5.36747 34.1185 4.99447 34.2732C4.62147 34.4279 4.22162 34.5076 3.8178 34.5076C3.41398 34.5076 3.01413 34.4279 2.64112 34.2732C2.26812 34.1185 1.9293 33.8917 1.64405 33.6059C0.472383 32.4034 0.44155 30.43 1.64405 29.2275Z" fill="#2C2C2C"/>
       </svg>
      </button>

       <!-- left button  -->
      <button class="adv-left-paddle adv-paddle">
       <svg width="22" height="30" viewBox="0 0 17 28" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M15.8291 4.46175L6.64314 13.7464L15.8291 23.0747C16.0483 23.2973 16.2222 23.5613 16.3408 23.8518C16.4595 24.1422 16.5205 24.4533 16.5205 24.7674C16.5205 25.0814 16.4595 25.3922 16.3408 25.6821C16.2222 25.972 16.0483 26.2352 15.8291 26.4567C15.61 26.6783 15.3497 26.8538 15.0633 26.9733C14.777 27.0928 14.47 27.1539 14.16 27.1532C13.8501 27.1524 13.5431 27.0899 13.2567 26.969C12.9703 26.8481 12.7101 26.6714 12.4909 26.4488L1.62398 15.4135C1.4045 15.1911 1.23038 14.9271 1.11157 14.6367C0.992765 14.3462 0.931611 14.035 0.931611 13.7209C0.931611 13.4067 0.992765 13.0958 1.11157 12.806C1.23038 12.5161 1.4045 12.2529 1.62398 12.0315L12.4909 1.04784C12.71 0.826006 12.9701 0.650214 13.2565 0.53053C13.5429 0.410846 13.85 0.349619 14.16 0.350354C14.4701 0.35109 14.7771 0.413775 15.0635 0.534819C15.3499 0.655863 15.6101 0.83289 15.8291 1.05577C16.7288 1.99335 16.7525 3.52849 15.8291 4.46175Z" fill="#2C2C2C"/>
        </svg>
      </button>
   </div>

   <!-- linking the javascripts and jquery -->

   <script src="javascript/scroll-adv.js"></script>

   
 </section>
 <!-- End of adventure section -->

<!-- Start of Events  part -->
 <section class="events">

<a name= "events-link" ></a>
 <!-- title of the section and linked the fourth dot here-->
    <h1 class="events-h1" >EVENTS IN <br> THE UAE</h1>


<!-- similar to the previous sections, this wrapper wraps the whole content  -->
    <div class="events-wrapper">

    <!-- container that holds all the images, they all have ids to be 
  used in the script -->
      <div class="events-container"> 

        <div class = "buttons" id="event1">
          <img src="images/events-images/Diwali Festival.JPG">
        </div>

        <div class = "buttons" id="event2">
          <img src="images/events-images/UAE National Day.JPG">
        </div>

        <div class = "buttons" id="event3">
          <img src="images/events-images/Sharjah National Book Fair.JPG">
        </div>

        <div class = "buttons" id="event4">
          <img src="images/events-images/Dubai Home Festival.JPG">
        </div>

        <div class = "buttons" id="event5">
         <img src="images/events-images/Eid Al Adha .JPG">
        </div>


      </div> 

    </div>


  <!-- contains the whole events -->
  <div class="events-list">
 
    <!-- description for each events -->
    <div class="event1-desc animate__animated animate__fadeIn"> 
      <h1>Diwali Festival</h1>
      <h2>October 29 - November 30, 2021</h2>

      <p>Diwali is a festival of lights and one of the major festivals celebrated by Hindus, Jains, Sikhs and some Buddhists,
       notably Newar Buddhists. It's one of the most popular festivals of Hinduism, Diwali symbolizes the spiritual "victory of light over darkness, 
       good over evil, and knowledge over ignorance" </p>

   </div>

   <!-- the following classes are hidden so only one is shown time by time
  and will be displayed -->
   <div class="event2-desc hidden animate__animated animate__fadeIn"> 
      <h1>UAE National Day</h1>
      <h2>December 02, 2021</h2>

      <p>The UAE National Day stands for the nationalisation of the British Protectorate Treaties, which were declared in 1968, and
       also falls on the anniversary of the federal unification of the six emirates (seven in 1972 after Ra's Al Khaimah joined) 
       in 1971 which combined to form the modern-day country, headed by Sheikh Zayed bin Sultan Al Nahyan, the federation's
        first president.</p>

   </div>

   <div class="event3-desc hidden animate__animated animate__fadeIn"> 
      <h1>Sharjah National Bookfair</h1>
      <h2>November 03 - November 13, 2021</h2>

      <p>This event is one of the world’s largest book fairs, held at the Sharjah Expo Centre every year. The eleven day fair has over
       400 literary events, including daily writing workshops, poetry readings and book signings. The stalls prominently feature local 
       favourites, including several Arabic books on Sharjah, Arab culture and Arabic art.  </p>

   </div>

   <div class="event4-desc hidden animate__animated animate__fadeIn"> 
      <h1>Dubai Home Festival</h1>
      <h2>September 19 - September 30, 2021</h2>

      <p>This festival showcases the emirate’s unique furniture scene, homegrown brands and world-class shopping.
      Dubai Home Festival is organised by the Dubai Festivals and Retail Establishment (DFRE), an agency of Dubai’s Department of Tourism 
      and Commerce Marketing (DTCM). t is part of a larger strategy to develop a year-round programme of citywide festivals that contributes to 
      the growth of tourism and retail sectors in Dubai.
      </p>

   </div>

   <div class="event5-desc hidden animate__animated animate__fadeIn"> 
      <h1>Eild Al Adha</h1>
      <h2>July 19 - July 24, 2021</h2>

      <p> Eid al-Adha is the latter of the two Islamic holidays celebrated worldwide each year. It honours the willingness of Ibrahim to sacrifice
       his son Ismail as an act of obedience to God's command. Before Ibrahim could sacrifice his son, however, Allah provided a lamb to sacrifice
        instead.  </p>

   </div>
 </div>

<script src="javascript/events.js"> </script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

 </section>
 <!-- end of events section -->


 <!-- start of dine -->
 <section class="dine">
 <a name= "dine-link"></a>
   <br>

   <!-- title of the section and linking the fifth dot here -->
   <h1 class="dine-heading"  >BEST PLACES TO DINE</h1>

    <!-- wraps the whole dine -->
    <div class="dine-wrapper">

      <!-- holds all the list of restaurants -->
      <div class="dine-container" id="dine-con">
       
      <!-- all restaurants -->
         <a class="restaurants first-res">  
             <!-- added a container so the images can be slighlty dimmed -->
              <div class="img-holder first-img"> 
                <img src="images/ras al khaimah/rakdin1H.jpg">
              </div>

              <div class="resto-desc">
                <h1>Waldorf Astoria</h1>
                <h2>Ras Al Khaimah</h2>
              </div>
          </a>



          <a class="restaurants" href="#">

              <div class="img-holder"> 
                <img src="images/dubai/dxbdin5D.jpg">
              </div>

             <div class="resto-desc">
                <h1>Catch22</h1>
                <h2>Dubai</h2>
             </div>
          </a>



          <a class="restaurants" href="#">
              <div class="img-holder"> 
                <img src="images/abu dhabi/auhdin1B.jpg">
              </div>

              <div class="resto-desc">
                <h1>Observation Deck at 300</h1>
                <h2>Abu Dhabi</h2>
             </div>
         </a>


          

          <a class="restaurants" href="#">

              <div class="img-holder"> 
               <img src="images/dine-images/das-brahaus.png">
              </div>

             <div class="resto-desc">
               <h1>Backwaters</h1>
               <h2>Umm al Quwain</h2>
             </div>
         </a>

          

          <a class="restaurants" href="#">

              <div class="img-holder"> 
                <img src="images/ras al khaimah/rakdin5C.jpg">
              </div>

             <div class="resto-desc">
               <h1>Piaceri Da Gustare</h1>
               <h2>Ras Al Khaimah</h2>
             </div>
           </a>

          <a class="restaurants" href="#">

              <div class="img-holder"> 
                <img src="images/fujairah/bookstore.JPG">
              </div>

             <div class="resto-desc">
               <h1>The Bookstore</h1>
               <h2>Fujairah</h2>
             </div>
           </a>

    </div>

   </div>


   <!-- linking javascript -->
   <script src="javascript/dine.js"> </script>

   </section>
 <!-- end of dining section -->
 
 
<section class="creators">
     <br>

     <a name= "creators-link"></a>
     <h1 >CREATORS</h1>

     <div class="creator-container">

       <div class="member">
         <img src="images/members/patrisha.PNG" class="member-img">
        <h2>Patrisha Ortigas</h2>
        <h3>Lead Programmer</h3>
      </div>

      <div class="member">
      <img src="images/members/carter.JPG" class="member-img">
        <h2>Carter Catis</h2>
        <h3>Lead Programmer</h3>
      </div>

      <div class="member">
      <img src="images/members/bianca.jpg" class="member-img">
        <h2>Bianca Dalangin</h2>
        <h3>UX/UI Designer</h3>
      </div>

      <div class="break"></div>

      <div class="member">
      <img src="images/members/sarai.JPG" class="member-img">
        <h2>Sarai Carreon</h2>
        <h3>UX/UI Designer</h3>
      </div>

      <div class="member">
      <img src="images/members/gabby.png" class="member-img">
        <h2>Alysxandra Reyes</h2>
        <h3>Researcher/Programmer</h3>
      </div>

      <div class="member">
      <img src="images/members/ruth.jpg" class="member-img">
        <h2>Ruth Amurao</h2>
        <h3>Researcher/Programmer</h3>
      </div>

  </div>

</section>


</body>
</html>