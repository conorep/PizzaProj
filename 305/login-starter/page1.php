<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start the session
session_start();

if (empty($_SESSION['username']))
{
    // store the current page in the session
    $_SESSION['page'] = "index.php";

    // redirect user to login page
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Super Secret</a>
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li class="active"><a href="page1.php">Page 1</a></li>
                <li ><a href="page2.php">Page 2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

    <h1>Admin Page 1</h1>
    <p>This page contains super-sensitive data, but different than the homepage.</p>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
