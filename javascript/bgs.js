// window.setInterval(function () {
//     window.setTimeout(function () {
//         $('#place1').fadeIn('slow').delay(3000).fadeOut('fast');
//         document.getElementById("nav").style.backgroundColor = 'black'.fadeOut(fast);

//     }, 1000);
    
//     window.setTimeout(function () {
//         $('#place2').fadeIn('slow').delay(3000).fadeOut('fast');
//         document.getElementById("nav").style.backgroundColor = 'red';
//     }, 10000);


//     window.setTimeout(function () {
//         $('#place3').fadeIn('slow').delay(5000).fadeOut('fast');
//         document.getElementById("nav").style.backgroundColor = 'blue';
//     }, 20000);

//     window.setTimeout(function (){

//     })
// }, 2000);


// window.setInterval(function () {
//     window.setTimeout(function () {
//         $('#place1').show('slow').delay(3000).hide('fast').delay(6000);
//     }, 0);
//     window.setTimeout(function () {
//         $('#place2').show('slow').delay(3000).hide('fast').delay(6000);
//     }, 3500);
//     window.setTimeout(function () {
//         $('#place3').show('slow').delay(3000).hide('fast').delay(6000);
//     }, 7000);

 
    
// }, 3000);

// $(function () {

//     var counter = 0,
//         divs = $('#place1, #place2, #place3');

//     function showDiv () {
//         divs.hide() // hide all divs
//             .filter(function (index) { return index == counter % 3; }) // figure out correct div to show
//             .show('fast'); // and show it

//         counter++;
//     }; // function to loop through divs and show correct div

//     showDiv(); // show first div    

//     setInterval(function () {
//         showDiv(); // show next div
//     }, 10 * 1000); // do this every 10 seconds    

// });


// $(function () {

//     var counter = 0,
//         divs = $('#place1', '#place2', '#place3');

//     function showDiv () {
//         divs.hide() // hide all divs
//             .filter(function (index) { return index == counter % 3; }) // figure out correct div to show
//             .show('fast'); // and show it

//         counter++;
//     }; // function to loop through divs and show correct div

//     showDiv(); // show first div    

//     setInterval(function () {
//         showDiv(); // show next div
//     }, 10 * 1000); // do this every 10 seconds    

// });



$(function() {

  var timer = setInterval(showDiv, 5000);

  var counter = 0;

  function showDiv() {
    if (counter == 0) {
      counter++;
      return;
    }

    $('#place1, #place2, #place3')
      .stop()
      .hide()
      .filter(function() {
        return this.id.match('place' + counter);
      })
      .show('fast');

    counter == 3 ? counter = 0 : counter++;


    


    

  }


// 
});


var i = 0;
  var images = []; //array
  var time = 5000; // time in millie seconds
  
  //images
  
  images[0] = "url(marina.jpg)";
  
  images[2] = "url(marina.jpg)";
  images[3] = "url(pink-lake.jpg)";
  images[4] = "url(marina.jpg)";

  function changeImage() {
      var el = document.getElementById('nav');
      el.style.backgroundImage = images[i];
      if (i == 3 ){
          i = 0;
      } else {
          i++;
      }
      setTimeout('changeImage()', time);
  }
  
  window.onload = changeImage;


