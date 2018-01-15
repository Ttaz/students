<!DOCTYPE html>

<!-- this file is named login.php -->
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
?>

<div class="container">
    <div class="row my-3">
        <div class="col-4 mx-auto">

    <div class="card card-container p-3">
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>

            <div class="form-group">
                <label for="inputPassword">Password:</label>
                <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>

            <div id="remember" class="checkbox">
                <label>
                    <input name="remember" type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-primary" type="submit">Sign in</button>
        </form><!-- /form -->

    </div>
    </div>
    </div><!-- /card-container -->




</div> <!-- /container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
