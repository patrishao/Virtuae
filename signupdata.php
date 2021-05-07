<?php include 'includes/database.php' ?>


<?php 

if(isset($_POST['submit'])){


    // getting the data based on the name
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];


// cleans up data to avoid hackers doing harm to the site, no injection
  $username =  mysqli_real_escape_string($connection, $firstName);
  $lastName =  mysqli_real_escape_string($connection, $lastName);
  $email =  mysqli_real_escape_string($connection, $email);
  $password =  mysqli_real_escape_string($connection, $password);


//   if ($firstName && $lastName && $email && $password){

//   }

//   else{
//       echo "Please enter details";
//   }


// creating the query
$query = "INSERT INTO users (firstName, lastName, email, password)";
$query .= "VALUES ('$firstName', '$lastName', '$email', '$password')";


// adding query to the sql

$result = mysqli_query($connection, $query);


// checking if queery is working
 if (!$result){

    die('Query failed' . mysqli_error($connection));
 }


}




?>

