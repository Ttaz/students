<?php

// This file should be named user_delete.php

session_start();
$logged_in = $_SESSION['logged_in'];


if($logged_in) {

    include('database_inc.php');


    $id_to_delete = $_GET['id'];


// this is where we delete the record:

    $result = mysqli_query($connect,
        "DELETE FROM `users` WHERE `id` = '$id_to_delete';");

// send user back to index.php

    header('location:index.php');

} else {

    // this block of code is only true if a non-logged in user tries to access this page
    header('location:index.php');

}
