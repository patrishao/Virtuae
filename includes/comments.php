<?php 




//  if button is pressed
if (isset($_POST['post'])){

    // getting all values in the form
    $page = $_POST['page'];
    $author = $_POST['author'];
    $email = $_POST['email'];
    $contents = $_POST['review'];


            // checks if a user is logged in
            if (isset($_SESSION['id'])){

                // checks if there is a value in the form
                if ($contents){

                     // if the user is logged in, create a query and send the comment to the database
                    $query = "INSERT into comments (comment_page, comment_date, comment_author, comment_email, comment_contents) ";

                    $query .= "VALUES ('{$page}', now(),  '{$author}', '{$email}', '{$contents}')";


                    $create_query = mysqli_query($connection, $query);

                    if (!$create_query){
                        die ('Query failed '.  mysqli_error($connection));
                    }

                    //reloads  the page and shows a popup that that comment will be posted soon 
                    echo("<meta http-equiv='refresh' content='1'>");
                    echo '<script type="text/javascript">','posted();','</script>';

                }

                //if there's no value in the form show an error message
                else{
                    echo '<script type="text/javascript">','blankError();','</script>';
                }

            }

            // if a user is not logged in
             else{
               echo '<script type="text/javascript">','notLogged();','</script>';
            }
     


}

?>