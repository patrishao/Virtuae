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


  
    // query to find the the email
    $query = "SELECT * FROM users";
    $selectQuery = mysqli_query($connection, $query); //brings the result

      if (!$selectQuery){ die("Cant connect" . mysqli_error($connection));

    }


    //reading the table, or getting all usernames based on the result

    while($rows = mysqli_fetch_array($selectQuery)){
 
       $db_id  = $rows['id'];
       $db_email = $rows['email'];
       $db_firstName = $rows['firstName'];
       $db_lastName = $rows['lastName'];
       $db_password = $rows['password'];
       $db_location = $rows['location'];
       $db_number = $rows['number'];


    }

    //if there are values entered in the form, add the the values to the database
    if ($firstName && $lastName && $email && $password){
      //but first checks if the email already exists in the database
        if ($email === $db_email){

          //display only this
          echo '<script>alert("The email exists, please try another email.")</script>';
          


          }

          //if the email doesnst exist
          else{
              // creating the query
              $query = "INSERT INTO users (firstName, lastName, email, password)";
              $query .= "VALUES ('$firstName', '$lastName', '$email', '$password')";
   
   
               // add the details in the database
                $result = mysqli_query($connection, $query);
   
   
                // checking if query is working
                  if (!$result){
   
                   die('Query failed' . mysqli_error($connection));
                 }

              //lead them to login page
              header("Location: login.php");
          }

    }

      //if any value isn't complete, display a text
      else{
        echo '<script>alert("Form is not complete, please fill it out.")</script>';

        
      }
        

  }





?>

