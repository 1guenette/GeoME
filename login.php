<?php

session_start();

require_once 'config.php';



$name = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM $db_table WHERE userName = '$name' AND password = '$password' ";
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);
$info = mysqli_fetch_assoc($query);

if ($row == 1) 
{

    $_SESSION["name"] = $info["username"];
    $_SESSION['admin'] = $info['admin'];

    
    $redir = "PostPage.html";

    echo "<script>","window.location.href='$redir';", "</script>";

} 
else 
{

    $message = "Incorrect username or password!";
    $redir = "index.html";
    echo "<script>", "alert('$message');", "window.location.href='$redir';", "</script>";
}


