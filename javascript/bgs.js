// slideshow the images


  // shows the contents every 5 seconds

$(function() {

  var timer = setInterval(showDiv, 5000);

  var counter = 0;

  function showDiv() {
    if (counter == 0) {
      counter++;
      return;
    }

  
    $('#place1, #place2, #place3, #place4, #place5, #place6, #place7, #place1')
      .stop()
      .hide()
      .filter(function() {
        return this.id.match('place' + counter);
      })
      .show('fast');

    counter == 9 ? counter = 0 : counter++;

    

  }


// 
});


  // shows the images every 5 seconds
var i = 0;
  var images = []; //array
  var time = 4998; // time in millie seconds
  
  //images
  
  images[0] = "url(images/homebg-images/greenplanet.jpg)";
  images[2] = "url(images/homebg-images/greenplanet.jpg)";
  images[3] = "url(images/homebg-images/rak.jpg)";
  images[4] = "url(images/homebg-images/louvre.jpg)";
  images[5] = "url(images/homebg-images/noor1.jpg)";
  images[6] = "url(images/homebg-images/hayl.JPG)";
  images[7] = "url(images/homebg-images/ajman.jpg)";
  images[8] = "url(images/homebg-images/kite-beach.png)";

  function changeImage() {
      var el = document.getElementById('nav');
      el.style.backgroundImage = images[i];
      if (i == 9 ){
          i = 0;
      } else {
          i++;
      }
      setTimeout('changeImage()', time);
  }
  
  window.onload = changeImage;


