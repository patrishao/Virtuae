

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
      text: 'Please fill in all the required values',
   })
};


