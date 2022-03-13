<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php  # script 1.5 - predefined.php

// create a shorthand version of the variable names
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

// print the name of the script
echo "<p>You are running the file:<br><strong>$file</strong>.</p>\n";

// print the user's information
echo "<p>You are viewing this page using:<br><strong>$user</strong></p>\n";

// print the server's information
echo "<p>This server is running:<br><strong>$server</strong>.</p>\n";


?>
</body>
</html>

