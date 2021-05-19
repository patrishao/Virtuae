// const slider = document.querySelector('.events-container');
// let isDown = false;
// let startX; //knows the pos of our mouse
// let scrollLeft; //know the initial scroll

let event1 = document.querySelector("#event1");
let event2 = document.querySelector("#event2");
let event3 = document.querySelector("#event3");
let event4 = document.querySelector("#event4");
let event5 = document.querySelector("#event5");

let desc1 = document.querySelector('.event1-desc');
let desc2 = document.querySelector('.event2-desc');
let desc3 = document.querySelector('.event3-desc');
let desc4 = document.querySelector('.event4-desc');
let desc5 = document.querySelector('.event5-desc');

// // when mouse is pressed
// slider.addEventListener('mousedown', (e) =>{ //passing mouse event  , to know the corordinates 
// isDown = true;
// slider.classList.add('active');
// startX = e.pageX - slider.offsetLeft;
// scrollLeft = slider.scrollLeft;

// });

// slider.addEventListener('mouseleave', () =>{

//     isDown = false;
//     slider.classList.remove('active');
    

// });

// slider.addEventListener('mouseup', () =>{

//     isDown = false;
// slider.classList.remove('active');

// });

// slider.addEventListener('mousemove', (e) =>{

//     if (!isDown) return; // stop to run function
//     e.preventDefault(); //prevent selecting  texts  & other stuffs
//     const x = e.pageX - slider.offsetLeft  //figure out where the curser is when moved
//     const scroll = (x - startX) * 2; //how far deviated from initial point
//     slider.scrollLeft = scrollLeft - scroll;

// });


$(event1).on('click', function (){
    $(desc2).addClass('hidden');
    $(desc3).addClass('hidden');
    $(desc4).addClass('hidden');
    $(desc5).addClass('hidden');

    $(desc1).removeClass('hidden');
});

$(event2).on('click', function (){
    $(desc1).addClass('hidden');
    $(desc3).addClass('hidden');
    $(desc4).addClass('hidden');
    $(desc5).addClass('hidden');

    $(desc2).removeClass('hidden');
});


$(event3).on('click', function (){
    $(desc1).addClass('hidden');
    $(desc2).addClass('hidden');
    $(desc4).addClass('hidden');
    $(desc5).addClass('hidden');

    $(desc3).removeClass('hidden');
});


$(event4).on('click', function (){
    $(desc1).addClass('hidden');
    $(desc2).addClass('hidden');
    $(desc3).addClass('hidden');
    $(desc5).addClass('hidden');

    $(desc4).removeClass('hidden');
});

$(event5).on('click', function (){
    $(desc1).addClass('hidden');
    $(desc2).addClass('hidden');
    $(desc3).addClass('hidden');
    $(desc4).addClass('hidden');

    $(desc5).removeClass('hidden');
});


$('.events-container').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1.9,
    slidesToScroll: 1.7,
    nextArrow: $(),
    prevArrow: $(),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1.3,
          slidesToScroll: 1,
          infinite: false,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 0.9
        }
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 0.9
        }
      }
    ]
  });


