<?php include 'includes/database.php' ?>

<!-- creating session -->
<?php session_start(); ?>

<?php 



//activate a session for loginfailed

//checks if there are values and get data
if (isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = $_POST['password'];


    echo '<script type="text/javascript">','blankError();','</script>';
    //   cleaning up data


    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);


    // query to check the data base

    // query to find the the email
    $query = "SELECT * FROM users WHERE email = '{$email}'";
    $selectQuery = mysqli_query($connection, $query); //brings the result




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


    if ($email && $password){
        

        // if the email's password is equal is equal to the password in database, proceed login
        if (password_verify($password, $db_password)){

             // creating sessions for the data inside database, so the data can be pulled somewhere else

            $_SESSION['id'] = $db_id;
            $_SESSION['email'] = $db_email;
            $_SESSION['firstName'] = $db_firstName;
            $_SESSION['lastName'] = $db_lastName;
             $_SESSION['password'] = $db_password;  
            $_SESSION['location'] = $db_location;
              $_SESSION['number'] = $db_number;



             header("Location: index.php");

             error_reporting(0);
        }


        else{
            echo '<script type="text/javascript">','wrongInfo();','</script>';
        }

        
    }

    else{
        echo '<script type="text/javascript">','blankError();','</script>';
        //   cleaning up data
    }




}



?>