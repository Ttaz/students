<?php

// This file should be named logout.php

session_start();
session_destroy();
header('location:index.php');
