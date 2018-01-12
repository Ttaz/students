<?php
session_start();
// This file should be named index.php
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
?>

<div class="container">
    <?php
    $logged_in = $_SESSION['logged_in'];
    $email = $_SESSION['email'];
    if($logged_in) {
        ?>

        <div class="row">
            <div class="col- m-2 p-2">
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>User name</td>
                        <td>Screen name</td>
                        <td>Password</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    $result = mysqli_query($connect,
                        "SELECT * FROM users;");
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo
                            '<tr>
                  <td>' . $row['id'] . '</td>' .
                            '<td>' . $row['username'] . '</td>' .
                            '<td>' . $row['screenname'] . '</td>' .
                            '<td>' . $row['password'] . '</td>' .
                            '<td>  <a href="user_edit.php?id='.$row['id'].'">Edit</a></td>' .
                            '</tr>';
                    }
                    ?>
                </table>
            </div>
        </div>




        <div class="row">
            <div class="col-12 p-3">

                <form action="user_new_process.php" method="post">

                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input class="form-control" id="username" type="text" name="username" placeholder="Please type new username here">
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input class="form-control" id ="password" type="text" name="password" placeholder="Please type new password here">
                    </div>


                    <div class="form-group">
                        <label for="screenname">Screen name or display name: </label>
                        <input class="form-control" id ="screenname" type="text" name="screenname" placeholder="Please type new screen name here">
                    </div>

                    <div class="form-group">
                        <label for="comments">Comments: </label>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Please type comments here"></textarea>

                    </div>

                    <div class="form-group">
                        <button type="submit">Click to create new user</button>
                    </div>

                </form>
            </div>
        </div>

        <?php
        echo "You are logged in with email: $email ";
        echo "<p> <a href=\"users.php\">Click here for users</a></p>";
    } else {

        // This block is true if there is no logged_in session
        echo '
        
        <div class="row">
            <div class="col-12 m-3 p-3">
                <div class="alert alert-warning fade show" role="alert">
                <strong>Please login! </strong> <br /><br />
                <a href="login.php">Click here to login.</a> You will be able to use interactive features of this site. 
                
                </button>
            </div>
            </div>
        </div>
        
        
 
        
        
        
        
        
        
        ';
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
