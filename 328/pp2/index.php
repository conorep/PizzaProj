<?php
// TURN ON ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);

//step 3: 'include' the function
include 'functions.php';

/*
Conor O'Brien
1/11/2022
index.php
Pair Program 2
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <?php
        //step 1 output
        echo '<h1>PHP Array Practice.</h1>';

        //step 2: array
        $numbers = array(7, 9, 8, 9, 8, 8, 6);
        printArr($numbers);

        //step 4: largest output
        echo '<p>Largest Number in Array: ' . largest($numbers) . '<br><br></p';

        //step 5: remove duplicates and prove it
        echo '<p><br>Removing duplicates from Array: ';
        $noDupes = removeDups($numbers);
        printArr($noDupes);
    ?>

</body>
</html>
