<?php

require_once 'config.php';

    $name = $_POST['username'];
    $password = $_POST['password'];

    
    $query = mysqli_query($conn, "SELECT * FROM $db_table WHERE username = '$name'");


    if (mysqli_num_rows($query) > 0) 
    {

        $redir = "signUp.html";
        $message = "This account name already exists!";

        echo "<script>", "alert('$message');", "window.location.href='$redir';", "</script>";
        

    } 
    else 
    {
        if($name != "admin") 
        {
            $query_insert = "INSERT INTO $db_table (username, password, admin) VALUES ('$name', '$password', False)"; //NOTE: check for valid column names
        }
        /*else{
            $query_insert = "INSERT INTO $db_table (username, password, privatekey, publickey, admin) 
        VALUES ('$name', '$password', '$private', '$public', TRUE)";
        }*/
        //Querying the information
        mysqli_query($conn, $query_insert);

        $redir = "index.html";
        $message = "Account has been created!";

        //Redirects with success or failure message
        echo "<script>", "alert('$message');", "window.location.href='$redir';", "</script>";
    }

$conn->close();
?>
