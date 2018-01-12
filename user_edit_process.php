<?php

// This file should be named user_edit_process.php

session_start();
include('database_inc.php');

$username = $_POST['username'];
$screenname = $_POST['screenname'];
$id_to_edit = $_SESSION['id_to_edit'];


// this is where we update the record:

$result = mysqli_query($connect,
    "UPDATE `users` SET `screenname` = '$screenname', `username` = '$username'  WHERE `id` = '$id_to_edit';");

// send user back to index.php

header('location:index.php');
