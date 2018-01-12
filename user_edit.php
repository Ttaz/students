<?php
session_start();
// This file should be named user_edit.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to my site!</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap-theme.css">

    <!-- weird emoji CSS -->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">


</head>
<body>


<!-- Fixed navbar -->
<?php
include('header.php');
include('database_inc.php');
$id_to_edit = $_GET['id'];
?>

<div class="container">
    <?php
    $logged_in = $_SESSION['logged_in'];
    $email = $_SESSION['email'];
    if($logged_in) {
        ?>

        <div class="row">
            <div class="col- m-2 p-2">

                    <form action="user_edit_process.php" method="post">
                    <?php
                    $result = mysqli_query($connect,
                        "SELECT * FROM users WHERE id = '$id_to_edit';");
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo
                            '<div class="form-group">
                            <label for="username">Username:</label>
                            <input class="form-control" id="username" type="text" name="username" value="'. $row['username'] . ' ">
                            </div>' .

                            '<div class="form-group">
                            <label for="screenname">Screen name:</label>
                            <input class="form-control" id="screenname" type="text" name="screenname" value="'. $row['screenname'] . ' ">
                            </div>
                            <div class="form-group">
                            <button type="submit">Edit this user</button>
                            </div>';
                    }
                    ?>
                    </form>
            </div>
        </div>




        <div class="row">
            <div class="col-12 p-3">


            </div>
        </div>

        <?php
        echo "You are logged in with email: $email ";
        echo "<p> <a href=\"users.php\">Click here for users</a></p>";
    } else {
        echo "Hello. You are not logged in.";
    }
    ?>
    <!-- rows, columns, card, and your web app go here!!! -->

</div> <!-- /container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
