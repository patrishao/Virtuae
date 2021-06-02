<?php // including the connection and getting the data of user
include 'includes/database.php';
include 'includes/fetchdata.php';



 // checking the "save changes" button is pressed
 if(isset($_POST['save'])){

    //getting the values of the form and storing it into variables 
    $user_email  = $_POST['email'];
    $user_password  = $_POST['password'];


    if ($user_email && $user_password){


      //creating the query to be able to update the user data
      $query = "UPDATE users SET "; 

         // updating the values based on the what the user has entered
         $query .= "email = '{$user_email}', ";
         $query .= " password = '{$user_password}' ";
   
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

    $delete_query = "DELETE FROM users WHERE email = '{$email}' ";

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
    <title>Account Settings</title>
    <link rel="stylesheet" type="text/css" href="css/account-settings.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="navbg"> 
    <?php include 'includes/headers-edit.php'; ?> 

    </div>

    <div class="container">
        
        <div class="user-details">
            <div class="descs">
                <h1 class="name"> <?php echo $firstName . " ". $lastName;?> </h1>
                <p class="email"> <?php echo $email; ?> </p>
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

        <div class="nav">
            <a class="u-info" href="user-info.php">User info</a>
            <h2>Account settings</h2>
        </div>

        <form action="#" method="post">
        <div class="forms">
            <div class="forms2">
                <p class="email-label">Email</p>
                <input class="e-mail" type="text" name="email" value=" <?php echo $email; ?> " /> 
                <p class="pass-label">Password</p>
                <input class="password" type="password" name="password" value=" <?php echo $password; ?> "/> 
                
                <div class="save-delete">
                    <input class="save-changes" type="submit" value="Save Changes" name="save">
                    <input class="delete-acc" type="submit" value="Delete Account" name = "delete">
                </div>
                </form>
            </div>
        </div>

    </div>

    <footer>ㅤ</footer>

</body>
</html>