<?php include 'includes/database.php' ?>

<!-- creating session -->
<?php session_start(); ?>

<?php 


//activate a session for loginfailed
$_SESSION['message'] = 'Login failed, please check your details.';


//checks if there are values and get data
if (isset($_POST['login'])){

    unset( $_SESSION['loginFailed'] ); //unset the login error, meaning there is value
    $email = $_POST['email'];
   $password = $_POST['password'];



//   cleaning up data


$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);


// query to check the data base

// query to find the the email
$query = "SELECT * FROM users WHERE email = '{$email}'";
$selectQuery = mysqli_query($connection, $query); //brings the result

if (!$selectQuery){ die("Cant connect" . mysqli_error($connection));}
}

//reading the table, or getting all usernames based on the result

while($rows = mysqli_fetch_array($selectQuery)){

 $db_id  = $rows['id'];
 $db_email = $rows['email'];
 $db_firstName = $rows['firstName'];
 $db_lastName = $rows['lastName'];
 $db_password = $rows['password'];


}


// if the info entered by the user is equal to info in database, proceedlogin
if ($email === $db_email && $password === $db_password ){

    // creating sessions for the data inside database, so the data can be pulled somewhere else

    $_SESSION['email'] = $db_email;
    $_SESSION['firstName'] = $db_firstName;
    $_SESSION['lastName'] = $db_lastName;
    $_SESSION['password'] = $password;  




    header("Location: index.php");
}

// if anything else happens, stay to login
else{


    header("Location: login.php");
}



?>