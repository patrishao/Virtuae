
    //     //define time duraration for scroll by millisecond
    //     var scrollDurationAdv = 0;
        
    //     // define the button to go right or left
    //     var advLeftPaddle = document.getElementsByClassName('adv-left-paddle');
    //     var advRightPaddle = document.getElementsByClassName('adv-right-paddle');


    //     // define how many li item
    //     var itemsLength = $('.adventure-places').length; 

    //     // define the width of li item, initial item size is 100px

    //     var itemSize = $('.adventure-places').outerWidth(true); 

    //     // define left button or right button that will appear when the button is pressed
      
    //     var paddleMargin = 20;

       
    //     // define the width of class named wrapper
    //     var getMenuWrapperSize = function() {
    //         return $('.adv-wrapper').outerWidth();
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
    //         return $('.adv-container').scrollLeft();
    //     };


    //     // when we scroll this function will run

    //     $('.adv-container').on('scroll', function() {
    //         menuInvisibleSize = menuSize - menuWrapperSize;
    //         var menuPosition = getMenuPosition();
    //         var menuEndOffset = menuInvisibleSize - paddleMargin;

    //         // if the pos of scroll is 0, the left button is hidden
          
    //         if (menuPosition <= paddleMargin) {
    //             $(advLeftPaddle).removeClass('hidden');
    //             $(advRightPaddle).removeClass('hidden');

    //             // if the position is between 0 and 400, the left and right button will appear
        
    //             $(advLeftPaddle).removeClass('hidden');
    //             $(advRightPaddle).removeClass('hidden');

    //         // if the pos is at 400px the left button will appear and right button is hidden
      
    //         } else if (menuPosition >= menuEndOffset) {
    //             $(advLeftPaddle).removeClass('hidden');
    //             $(advRightPaddle).removeClass('hidden');
    //         }
    //     });


    //     // if left button is pressed, this will run 
    //     $(advRightPaddle).on('click', function() {
    //       // every click, the scroll position increases by 120px
    //         var add = itemSize;
      
    //     // define the position, IT ADDS 100
    //         var increment = Number(document.getElementById("adv-initial").value)+Number(add); 
         
    //         // the class menu will scroll until the position of increment w durarion of the scroll duration
    //         $('.adv-container').animate( { scrollLeft: increment}, scrollDurationAdv);
    //         if(increment>=menuInvisibleSize){
    //             // define the maximum position of scroll until menuinvisiblezise

    //             document.getElementById("adv-initial").value = menuInvisibleSize;
    //         }else{

    //             // if the scroll pos is not at maximum, input the actual position which is on the increment
              
    //             document.getElementById("adv-initial").value = increment;
    //         }
    //     });

    //     // if right button is pressed, this will run, same like function above but the scroll pos is decreasing

    //     $(advLeftPaddle).on('click', function() {
    //         var minus = itemSize + 25;
    //         var decrement = Number(document.getElementById("adv-initial").value)-Number(minus);
   
    //         $('.adv-container').animate( { scrollLeft: decrement }, scrollDurationAdv);
    //         if(decrement<=0){
    //             document.getElementById("adv-initial").value = 0;
    //         }else{
    //             document.getElementById("adv-initial").value = decrement;
    //         }
    //     });

        // for adventures

        $('.adv-container').slick({
            dots: false,
            infinite: true,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: 'linear',
            nextArrow: $('.adv-right-paddle'),
            prevArrow: $('.adv-left-paddle'),
          
          });
    