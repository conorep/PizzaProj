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
<?php # script 1.9 - constants.php

// set today's date as a constant
// define('TODAY', 'April 23, 2017'); <----- the old way
const TODAY = 'April 23, 2017';

// print a message, using predefined constants and the TODAY constant
echo '<p>Today is ' . TODAY . '.<br>This server is running version 
<strong>' . PHP_VERSION . '</strong> of PHP on the <strong>' . PHP_OS . '</strong> operating system.</p>';

?>

</body>
</html>
