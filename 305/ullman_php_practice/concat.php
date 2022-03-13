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
<?php # script 1.7 - concat.php

//create the vars
$first_name = 'Melissa';
$last_name = 'Bank';
$author = $first_name . ' ' . $last_name;

$book = 'The Girls\' Guide to Hunting and Fishing';

//print the vals
echo "<p>The book <em>$book</em> was written by $author.</p>";

?>
</body>
</html>
