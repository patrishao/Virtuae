<?php 

// including the connection and getting the data of user
include 'includes/database.php';
include 'includes/fetchdata.php';

            
  // checking the "save changes" button is pressed
  if(isset($_POST['save'])){

    //getting the values of the form and storing it into variables 
    $user_firstName  = $_POST['firstName'];
    $user_lastName  = $_POST['lastName'];
    $user_location = $_POST['location'];
    $user_number = $_POST['number'];


    if ($user_firstName && $user_lastName && $user_location && $user_number){


      //creating the query to be able to update the user data
      $query = "UPDATE users SET "; 

      // updating the values based on the what the user has entered
      $query .= "firstName = '{$user_firstName}', ";
      $query .= " lastName = '{$user_lastName}', ";
      $query .= " location = '{$user_location}', ";
      $query .= " number = '{$user_number}' ";

       // updating it only with the specific email
       $query .= " WHERE id = '{$idUser}' "; 


      $update_query = mysqli_query($connection, $query);

            //checks if query is working or not, if it's not close the database and show the error
            if(!$update_query){
                die('Query Failed'. mysqli_error($connection));
            }

    // refresh the page once changes are made so the data will be displayed
    header("Refresh:0");


    }   
 
    else{
        echo '<script>alert("Form is not complete, please fill it out.")</script>';
    }
}


else if (isset($_POST['delete'])){

    $delete_query = "DELETE FROM users WHERE id = '{$idUser}' ";

    $delete = mysqli_query($connection, $delete_query);

        if(!$delete){
          die('Query Failed'. mysqli_error($connection));
        }

      
     session_destroy();
     header("Location: login.php");   


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/user-info.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="navbg"> 
    <?php include 'includes/headers.php'; ?> 
    <img src = "images/logo_thickb.png" id="virtuae" style="width: 60px; height: 60px;">
    </div>

    <div class="container">

        <!-- PROFILE -->
        <div class="user-details">
            <div class="descs">
                <h1 class="name"><?php echo $firstName . " " . $lastName ?></h1>
                <p class="email"> <?php echo $email ?> </p>
                <div class="location">
                    <p><img src="images/Vector.svg" class="location-img">
                    
                    <!-- checks if a location has been set, if location isn't set, it tells users to set a location -->
                    <?php if(!$location) {
                        echo "Set a location";
                    }

                    // if a user has a location, display the location
                    else{
                        echo $location;
                    }
                    
                    ?>

                    </p>

                </div>
            </div>
        </div>

        <h1>Edit Profile</h1>

        <h2>User info</h2>
        <a class="acc-s" href="account-settings.php">Account settings</a>
        
        <form action="user-info.php" method="post">
        <div class="forms">
            <div class="forms1">
                <p class="name-label">First Name</p>
                <p class="lname-label">Last Name</p>
            </div>
            <input class="first-name" type="text" name= "firstName" value="<?php echo $firstName ?>" /> 
            <input class="last-name" type="text" name="lastName" value="<?php echo $lastName ?>" /> 
            <div class="forms2">
                <p class="loc-label">Location</p>
                <input class="loc" name="location" type="text" value="<?php echo $location ?>" /> 
                <p class="cp-label">Phone Number</p>
                <input class="phone-no" type="text" name="number"  value="<?php echo $number ?>" /> 
            </div>

                <!-- <input type="hidden" name="email" value="<?php  echo $_SESSION['email']; ?> " > -->
   
                <input class="save-changes" type="submit" value="Save Changes" name="save">
                <input class="delete-acc" type="submit" value="Delete Account" name = "delete">
            </form>


        </div>
        
    </div>

    <footer> </footer>

</body>
</html>