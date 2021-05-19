
    //     //define time duraration for scroll by millisecond
    //     var scrollDuration = 300;
        
    //     // define the button to go right or left
    //     var leftPaddle = document.getElementsByClassName('left-paddle');
    //     var rightPaddle = document.getElementsByClassName('right-paddle');

    //     // define how many li item
    //     var itemsLength = $('.destinations').length; 

    //     // define the width of li item, initial item size is 100px

    //     var itemSize = $('.destinations').outerWidth(true); 

    //     // define left button or right button that will appear when the button is pressed
      
    //     var paddleMargin = 20;

       
    //     // define the width of class named wrapper
    //     var getMenuWrapperSize = function() {
    //         return $('.wrapper').outerWidth();
    //     }

    //     // beggining the size is 500, getting menu wrapper size
    //     var menuWrapperSize = getMenuWrapperSize(); 

    //     // to make the class menu wrapper responsive

    //     $(window).on('resize', function() {
    //         menuWrapperSize = getMenuWrapperSize();
    //     });


    //     // the width of menu that we can see =  the size of menu wrapper
       
    //     var menuVisibleSize = menuWrapperSize;


    //     // define total width of class menu
   
    //     var getMenuSize = function() {
    //         return itemsLength * itemSize;
    //     };
    //     var menuSize = getMenuSize();


    // // define the width meny that is visible, which is the max class menu - width class menu wrapper
   
    //     var menuInvisibleSize = menuSize - menuWrapperSize;



    //     // define the position of the scroll between 0 to 400px

    //     var getMenuPosition = function() {
    //         return $('.container').scrollLeft();
    //     };


    //     // when we scroll this function will run

    //     $('.container').on('scroll', function() {
    //         menuInvisibleSize = menuSize - menuWrapperSize;
    //         var menuPosition = getMenuPosition();
    //         var menuEndOffset = menuInvisibleSize - paddleMargin;

    //         // if the pos of scroll is 0, the left button is hidden
          
    //         if (menuPosition <= paddleMargin) {
    //             $(leftPaddle).addClass('hidden');
    //             $(rightPaddle).removeClass('hidden');

    //             // if the position is between 0 and 400, the left and right button will appear
        
    //             $(leftPaddle).removeClass('hidden');
    //             $(rightPaddle).removeClass('hidden');

    //         // if the pos is at 400px the left button will appear and right button is hidden
      
    //         } else if (menuPosition >= menuEndOffset) {
    //             $(leftPaddle).removeClass('hidden');
    //             $(rightPaddle).addClass('hidden');
    //         }
    //     });


    //     // if left button is pressed, this will run 
    //     $(rightPaddle).on('click', function() {
    //       // every click, the scroll position increases by 120px
    //         var add = 150;
      
    //     // define the position, IT ADDS 100
    //         var increment = Number(document.getElementById("initial").value)+Number(add); 
         
    //         // the class menu will scroll until the position of increment w durarion of the scroll duration
    //         $('.container').animate( { scrollLeft: increment}, scrollDuration);
    //         if(increment>=menuInvisibleSize){
    //             // define the maximum position of scroll until menuinvisiblezise

    //             document.getElementById("initial").value = menuInvisibleSize;
    //         }else{

    //             // if the scroll pos is not at maximum, input the actual position which is on the increment
              
    //             document.getElementById("initial").value = increment;
    //         }
    //     });

    //     // if right button is pressed, this will run, same like function above but the scroll pos is decreasing

    //     $(leftPaddle).on('click', function() {
    //         var minus = 150;
    //         var decrement = Number(document.getElementById("initial").value)-Number(minus);
   
    //         $('.container').animate( { scrollLeft: decrement }, scrollDuration);
    //         if(decrement<=0){
    //             document.getElementById("initial").value = 0;
    //         }else{
    //             document.getElementById("initial").value = decrement;
    //         }
    //     });


    // for the top destinations

    $('.container').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1.5,
        nextArrow: $('.right-paddle'),
        prevArrow: $('.left-paddle'),
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1.5,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1.9,
              slidesToScroll: 1.5
            }
          },
          {
            breakpoint: 481,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });


