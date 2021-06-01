<!-- this file is a reusable file that gets the data of a user -->
<?php 

//starts a session
session_start();

if (isset($_SESSION['id'])){
    
   // get and store the id of user into $idUser var
     $idUser = $_SESSION['id'];

     //writing the query to select the user with the email i've gotten 
     $query = "SELECT * FROM users WHERE id = '{$idUser}'";

     //writing the query to database   
     $select_profile = mysqli_query($connection, $query);

     //getting all the data of user and store it into a new variable
     while($row = mysqli_fetch_array($select_profile)){

        $id  = $row['id'];  
        $email = $row['email'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $password = $row['password'];
        $location = $row['location'];
        $number = $row['number'];
       
     }


}



?>