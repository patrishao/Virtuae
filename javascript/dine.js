const dineSlider = document.querySelector('.dine-container');
var dineSlider2 = document.getElementsByClassName("dine-container");
let dineIsDown = false;
let dineStartX; //knows the pos of our mouse
let dineScrollLeft; //know the initial scroll


// if (dineSlider.addEventListener) {
//   dineSlider.addEventListener("mousedown", event);
// } else if (dineSlider.attachEvent) {
//   x.attachEvent("mousedown", event);
// }


// when mouse is pressed
dineSlider.addEventListener('mousedown', (event) =>{ //passing mouse event  , to know the corordinates 
dineIsDown = true;
dineSlider.classList.add('active');
dineStartX = event.pageX - dineSlider.offsetLeft;
dineScrollLeft = dineSlider.scrollLeft;

console.log("pressed");

});

dineSlider.addEventListener('mouseleave', () =>{

    dineIsDown = false;
    dineSlider.classList.remove('active');
    

});

dineSlider.addEventListener('mouseup', () =>{

    dineIsDown = false;
dineSlider.classList.remove('active');

});

dineSlider.addEventListener('mousemove', (event) =>{

    if (!dineIsDown) return; // stop to run function
    event.preventDefault(); //prevent selecting  texts  & other stuffs
    const xDine = event.pageX - dineSlider.offsetLeft  //figure out where the curser is when moved
    const scrollDine = (xDine - dineStartX) * 2; //how far deviated from initial point
    dineSlider.scrollLeft = dineScrollLeft - scrollDine;


});




//  const dineSlider = document.querySelector('.dine-container');

// if (dineSlider.addEventListener){
//     dineSlider.addEventListener("mouseup", mUp);
//     dineSlider.addEventListener("mousedown",mDown);
//     dineSlider.addEventListener("mousemove",mMove);
//     dineSlider.addEventListener("mouseleave",mLeave);

// }


// else if (dineSlider.attachEvent){
//     dineSlider.attachEvent("onmouseup",mUp);
//     dineSlider.attachEvent("onmousedown",mDown);
//     dineSlider.attachEvent("onmousemove",mMove);
//     dineSlider.attachEvent("onmouseleave",mLeave);
// }

// let dineIsDown = false;
// let dineStartX; //knows the pos of our mouse
// let dineScrollLeft; //know the initial scroll


// function mDown(){
//     dineIsDown = true;
// dineSlider.classList.add('active');
// dineStartX = mDown.pageX - dineSlider.offsetLeft;
// dineScrollLeft = dineSlider.scrollLeft;

// console.log(mDown.pageX);
// }

// function mLeave(){
//     dineIsDown = false;
//     dineSlider.classList.remove('active');
    
// console.log("mleave");
// }

// function mUp(){
//     dineIsDown = false;
// dineSlider.classList.remove('active');

// console.log("mup");

// }

// function mMove(){
//     if (!dineIsDown) return; // stop to run function
//     // mMove.preventDefault(); //prevent selecting  texts  & other stuffs
//     const xDine = mMove.pageX - dineSlider.offsetLeft;  //figure out where the curser is when moved
//     const scrollDine = (xDine - dineStartX) * 2; //how far deviated from initial point
//     dineSlider.scrollLeft = dineScrollLeft - scrollDine;

//    console.count(dineIsDown);


// }