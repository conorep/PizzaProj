<?php

    $num = $_POST['num'];

    $colors = array("red", "blue", "green", "purple");
    $colors1 = $colors[rand(0, sizeof($colors) - 1)];
    $colors2 = $colors[rand(0, sizeof($colors) - 1)];

    for ($x = 0; $x < $num; $x++) {
        echo "<p>Roses are $colors1,</p>
                <p>Violets are $colors2</p>
                <p>Something something something</p>";
    }

    var_dump($_POST);
