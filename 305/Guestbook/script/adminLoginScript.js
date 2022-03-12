document.getElementById("adminLogin").onsubmit = validate;

function validate() {

    // set flag to catch whether or not there are non-filled forms in the page
    let submitFlag = true;

    // reset error state (display:none) each submit
    let errors = document.getElementsByClassName('err');
    for (let i = 0; i < errors.length; i++)
    {
        errors[i].style.display = "none";
    }

    // validate username
    let username = document.getElementById("username").value;
    if (username === "") {
        document.getElementById("erruname").style.display = "inline-block";
        submitFlag = false;
    }

    // validate password
    let password = document.getElementById("password").value;
    if (password === "") {
        document.getElementById("errpass").style.display = "inline-block";
        submitFlag = false;
    }

    // submit if true, otherwise display errFlag messages and don't submit
    return submitFlag;
}