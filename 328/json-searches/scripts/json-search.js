/*
* here we go. more JS.
* Conor O'Brien
* SDEV 328 Winter Qrtr
* json-search.js
* */

const peopleArray = [
    {"Name": "Jane Doe", "Sex": "Female", "Born": 1896, "Died": 1920, "Father": "James Jims", "Mother": "Lisa Jims"},
    {"Name": "Jane Ramirez", "Sex": "Female", "Born": 1902, "Died": 1904, "Father": "Nickolas Rane", "Mother": "Jessa Rane"},
    {"Name": "Cramer Nans", "Sex": "Male", "Born": 1990, "Died": 1991, "Father": "Cole Man", "Mother": "Bucks Man"},
    {"Name": "Nantucket Mars", "Sex": "Male", "Born": 1800, "Died": 1840, "Father": "Owl Mars", "Mother": "Jog Mars"},
    {"Name": "Zermino Helens", "Sex": "Male", "Born": 1996, "Died": "Alive", "Father": "Cool Runnings", "Mother": "Runnings Cools"},
    {"Name": "Narno Helen", "Sex": "Female", "Born": 1976, "Died": 2020, "Father": "Harmah Helen", "Mother": "Hismah Helen"},
    {"Name": "Zeus Xarn", "Sex": "Female", "Born": 1987, "Died": "Alive", "Father": "Cool Cat", "Mother": "Runnings Neat"},
    {"Name": "Joey Nans", "Sex": "male", "Born": 1850, "Died": 1875, "Father": "Coolio Neat", "Mother": "Laura Neat"}
]


let buttonSearch = document.getElementById("get-it");

buttonSearch.onclick = function() {
    //set variables each onclick
    let findOrNot = false;
    let searchTerm = document.getElementById("search-name").value;
    //make writeHere area blank each onclick
    document.getElementById('writeHere').innerHTML = "";

    document.getElementById('writeHere').innerHTML += "<h4>Search term entered: '<strong><u>"
        + searchTerm + "</u></strong>'</h4>";
    //check each person in array to see if name includes search term
    for (let person of peopleArray)
    {
        if(person.Name.toLowerCase().includes(searchTerm.toLowerCase()) && searchTerm !== "" && searchTerm !== " ")
        {
            for (let key in person)
            {
                let value = person[key];
                document.getElementById('writeHere').innerHTML += "<p>" + key + ": " + value + "</p>";
            }
            document.getElementById('writeHere').innerHTML += "<br>";
            findOrNot = true;
        }
    }

    //if nothing (findOrNot still false), print this!
    if(!findOrNot)
    {
        document.getElementById('writeHere').innerHTML += "<h3>No person found.</h3>\n";
    }

    //reset the search box to blank
    document.getElementById("search-name").value = "";
}