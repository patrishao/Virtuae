const dineSlider = document.querySelector('.dine-container');
let dineIsDown = false;
let dineStartX; //knows the pos of our mouse
let dineScrollLeft; //know the initial scroll


// when mouse is pressed
dineSlider.addEventListener('mousedown', (event) =>{ //passing mouse event  , to know the corordinates 
dineIsDown = true;
dineSlider.classList.add('active');
dineStartX = event.pageX - dineSlider.offsetLeft;
dineScrollLeft = dineSlider.scrollLeft;



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

