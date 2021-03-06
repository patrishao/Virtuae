

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
      text: 'Please fill in all the required fields.',
   })
};

function takenEmail(){
   Swal.fire({
     icon: 'error',
     title: 'The email is taken.',
     text: 'Please try another email.',
  })
};

function wrongInfo(){
   Swal.fire({
     icon: 'error',
     text: 'It seems like your details wrong.',
  })
};

function shortChars(){
   Swal.fire({
     icon: 'error',
     text: 'The password needs to be more than 6 letters long.',
  })
};


function loginSuccess() {  
   Swal.fire(
      'Login successful!',
      'Now directing you to home page',
      'success'
    )
};


function signupSuccess() {  
   Swal.fire(
      'Signup successful!',
      'Now directing you to home page',
      'success'
    )
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
};


