

function posted(){
Swal.fire('Your comment will be posted soon!')};

function notLogged(){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'You are not logged in.',
      footer: '<a href="login.php">Please go here to log in.</a>'
   })
};

function blankError(){
    Swal.fire({
      icon: 'error',
      title: 'Something went wrong..',
      text: 'Please fill in all the required values.',
   })
};



function success() {  
   Swal.fire(
      'Your inqury has been sent.',
      'Please wait a while, we will get back at you.',
      'success'
    )
};


function info() {  
   Swal.fire({
      title: 'Online Tour',
      text: 'Due to pandemic, its impossible to go out, so Virtuae brings the whole place to you!',
      imageUrl: 'images/zoomtour.png',
      imageWidth: 400,
      imageHeight: 250,
      imageAlt: 'Custom image',
    })
}
