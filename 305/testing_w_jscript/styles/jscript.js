
// get all of instance of theDropStuff
let dropdowns = document.getElementsByClassName("theDropStuff");

function dropFunction() {
    realDropFunction();
    document.getElementById("dropID").classList.toggle("show");

}

function dropFunction1() {
    realDropFunction();
    document.getElementById("dropID1").classList.toggle("show");
}


function dropFunction2() {
    realDropFunction();
    document.getElementById("dropID2").classList.toggle("show");
}

function dropFunction3() {
    realDropFunction();
    document.getElementById("dropID3").classList.toggle("show");
}

function realDropFunction() {

    for (let i = 0; i < dropdowns.length; i++)
    {
        if (dropdowns[i].classList.contains('show')) {
            dropdowns[i].classList.remove('show');
        }
    }

}

window.onclick = function(event) {
    if (!event.target.matches('.dropBtn')) {

        // run through the one position that dropdowns will have and add or remove the show function
        for (let i = 0; i < dropdowns.length; i++) {

            if (dropdowns[i].classList.contains('show')) {
                dropdowns[i].classList.remove('show');
            }
        }
    }
}