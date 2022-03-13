document.getElementById("guestbook-form").onsubmit = validate;

function validate() {

    // set flag to catch whether or not there are non-filled forms in the page
    let submitFlag = true;

    // reset error state (display:none) each submit
    let errors = document.getElementsByClassName('err');
    for (let i = 0; i < errors.length; i++)
    {
        errors[i].style.display = "none";
    }

    // DONE: validate firstname
    let first = document.getElementById("fname").value;
    if (first === "") {
        document.getElementById("err-fname").style.display = "block";
        submitFlag = false;
    }

    // DONE: validate lastname
    let last = document.getElementById("lname").value;
    if (last === "") {
        document.getElementById("err-lname").style.display = "block";
        submitFlag = false;
    }

    // DONE: validate how we met and validate 'other' text box if other is chosen
    let met = document.getElementById("met-method").value;
    let otherInfo = document.getElementById("others").value;
    if (met === "")
    {
        document.getElementById("err-met").style.display = "block";
        submitFlag = false;
    } else if (met === "other")
    {
        if (otherInfo === "")
        {
            document.getElementById("err-other").style.display = "block";
            submitFlag = false;
        }
    }


    // DONE: validate linkedin url with site regex and see if has 'linkedin' inside
    let linkedinValid = document.getElementById("linkedIn").value.toLowerCase();
    if (linkedinValid !== "")
    {
        if (!websiteValidate(linkedinValid) || !linkedinValid.includes('linkedin'))
        {
            document.getElementById("err-linkedin").style.display = "block";
            submitFlag = false;
        }
    }


    // DONE: validate email addy IF mailing list is checked or IF it has values in it
    let emails = document.getElementById("email").value;
    let mailingList = document.getElementById("mailing-list").checked;
    if (mailingList && emails === "") // if mailingList is checked and emails is blank
    {
        document.getElementById("err-email").style.display = "block";
        submitFlag = false;
    } else if (mailingList && !emailValidate(emails)) // if mailingList is checked and email invalid
    {
        document.getElementById("err-email").style.display = "block";
        submitFlag = false;
    } else if (emails !== "") // if email is not empty string
    {
        if (!emailValidate(emails))
        {
            document.getElementById("err-email").style.display = "block";
            submitFlag = false;
        }
    }


    // submit if true, otherwise display errFlag messages and don't submit
    return submitFlag;
}


function chooseOther(val)
{
    let choice = document.getElementById('other');
    let mailList = document.getElementById('mailGroup');

    if (val === true || val === false)
    {
        if (val === true)
            mailList.style.display = 'block';
        else
            mailList.style.display = 'none';
    } else
    {
        if (val === 'other')
        {
            choice.style.display = 'block';
            document.getElementById("err-met").style.display = "none";
        }
        else
        {
            choice.style.display = 'none';
        }
    }
}

function emailValidate(email)
{
    // code from emailregex.com
    let regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}

function websiteValidate(site)
{
    // code from urlregex.com
    let regex = /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/;
    return regex.test(site);

}



// unused code
/*if (!emails.includes("@") || !emails.includes(".")) // if it doesn't include @ or .*/
/*else if (mailingList && (!emails.includes("@") || !emails.includes(".")))*/
/*if (linkedinValid.substring(0,4) !== "http" || linkedinValid(-4, linkedinValid.length) !== ".com")*/
