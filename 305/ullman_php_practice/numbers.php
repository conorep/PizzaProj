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
<?php # script 1.8 - numbers.php

// set the vars
$quantity = 30; // buying 30widgets
$price = 119.95;
$taxrate = .05; //5% sales tax

// calc the total
$total = $quantity * $price;
$total = $total + ($total * $taxrate);
//cal and add tax

// format the total $total
$total = number_format ($total, 2);

//print the results:
echo '<p>You are purchasing <strong>' . $quantity . '</strong> 
widget(s) at a cost of <strong>$' . $price . '</strong> each. With tax, 
the total comes to <strong>$' . $total . '</strong>.</p>';


//print the result using double quotation marks:
echo "<h3>Using the double quotation marks:</h3>";
echo "<p>You are purchasing <strong>$quantity</strong> widget(s) at a cost of <strong>\$$price</strong> each.
 With tax, the total comes to <strong>\$$total</strong>.</p>";

//print the results using single quotation marks
echo '<h3>Using single quotation marks:</h3>';
echo '<p>You are purchasing <strong>$quantity</strong> widget(s) at a cost of <strong>\$$price</strong>
 each. WIth tax, the total comes to <strong>\$$total</strong>.</p>';



?>

</body>
</html>
