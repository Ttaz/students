<?php
session_start();

// this file should be named login_process.php

$email = $_POST['email'];
$password = $_POST['password'];
$remember = $_POST['remember'];

include('database_inc.php');

echo "<p>email: $email</p>";
echo "<p>password: $password</p>";
echo "<p>remember me: $remember</p>";


$result = mysqli_query($connect,
    "SELECT password FROM users WHERE username = '$email';");

while ($row = mysqli_fetch_array($result)) {

    echo
        'ID: ' . $row['id'] . '<br />' .
        'Username: ' . $row['username'] . '<br />' .
        'Screenname: ' . $row['screenname'] . '<br />' .
        'Password: ' . $row['password'] . '<br />' .
        '<hr />';

    if ($row['password'] == $password)
    {

        echo "correct password!";
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['email'] = $email;
        header('location:index.php');

    } else {

        echo "INCORRECT PASSWORD!";

    }

}



?>
