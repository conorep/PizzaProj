<?php

//step 3: 'include' the function
function printArr($thisArray)
{
    foreach ($thisArray as $theValue)
    {
        echo "<p>$theValue</p>";
    }
}

//step 4: largest in array
function largest($anArray)
{
    return max($anArray);
}

//step 5: remove dupes
function removeDups($dupeArray)
{
    return array_unique($dupeArray);
}
