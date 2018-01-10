<?php

session_start();
include('database_inc.php');

// This file should be named user_new_process.php :-)

$username = $_POST['username'];
$password = $_POST['password'];
$screenname = $_POST['screenname'];
$comments = $_POST['comments'];

echo "<p>username is $username</p>";
echo "<p>password is $password</p>";
echo "<p>screenname is $screenname</p>";
echo "<p>comment is $comments</p>";


$result = mysqli_query($connect,
    "INSERT INTO `users` 
    (`id`, `username`, `password`, `screenname`, `datejoined`, `remember`, `comments`) 
    VALUES (NULL, '$email', '$password', '$screenname', '2018-01-09', '0', '$comments');");

?>
