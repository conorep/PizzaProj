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

<?php


function printDude($input)
{

    // numSpaces var for the increasing distance between the figure and back wall
    $numSpaces = '';
    // leadingSpaces var for the space between non-existence and figure, increased by loop to follow
    $leadingSpaces = '';
    // bottomFloor will be concatenated to throughout the same loop that leadSpaces gets
    $bottomFloor = '';
    // countSpace used for subtracting (using substring) four spaces each time through the 'drawing' loop
    $countSpaces = -4;

    // loop to calculate how many leadingSpaces we will start with and how many bottom floor asterisks we will end with
    for ($y = 0; $y < $input; $y++)
    {
        $leadingSpaces .= '    ';
        $bottomFloor .= '****';
    }


    // draw it out!
    for ($x = 0; $x < $input; $x++) {


        echo '<pre>' . $leadingSpaces . ' o  *****</pre>';
        echo '<pre>' . $leadingSpaces . '/|\\ *   ' . $numSpaces . '* </pre>';
        echo '<pre>' . $leadingSpaces . '/ \\ *   ' . $numSpaces . '* </pre>';


        // add four spaces to numSpaces
        $numSpaces .= '    ';
        // substr subtract four spaces from leadingSpaces
        $leadingSpaces = substr($leadingSpaces, 0, $countSpaces);

    }

    echo '<pre>    *****' . $bottomFloor . '</pre>';

}


// pick a num, any num!
printDude(105);



?>

</body>
</html>

