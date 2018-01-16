<!-- this file should be named header.php -->
<nav class="navbar navbar-dark bg-primary">

    <span class="navbar-brand mb-0 h1">Hello World</span>
    <div class="navbar-nav">

        <?php
        $logged_in = $_SESSION['logged_in'];
        if ($logged_in) {

            echo '<a class="nav-item nav-link text-white" href="logout.php">Logout</a>';

        } else {

            echo '<a class="nav-item nav-link text-white" href="login.php">Login</a>';

        }
     ?>   
    </div>
</nav>
