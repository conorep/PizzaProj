/*
*   Conor O'Brien SDEV328
*   JS 2 and 3 Assignment
*   Winter 2022
*   script.js
* */

let element = document.getElementsByTagName("div")[0];

function docWriteNums()
{
    //clear the writeInIt block each time button is clicked
    document.getElementById('writeInIt').innerHTML = " "
    let inputNum = document.getElementById("heeHawNum").value;

    if(isNaN(inputNum) || inputNum <= 0 || inputNum == null)
    {
        document.getElementById('writeInIt').innerHTML = "<p id='err'>A positive integer is required.</p>"
    } else
    {
        //run for loop with user input
        for (let x = 1; x <= inputNum; x++)
        {
            if(x % 3 === 0 && x % 5 === 0)
            {
                document.getElementById('writeInIt').innerHTML += "<p>Hee Haw!</p>\n";
            } else if (x % 3 === 0)
            {
                document.getElementById('writeInIt').innerHTML += "<p>Hee!</p>\n";
            } else if (x % 5 === 0)
            {
                document.getElementById('writeInIt').innerHTML += "<p>Haw!</p>\n";
            } else
            {
                document.getElementById('writeInIt').innerHTML += "<p>" + x + "</p>\n";
            }
        }
    }

}