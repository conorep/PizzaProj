<!---->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--    Page Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

<!--    Bootstrap Styles and Main Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">

    <!-- Kevin's CSS, Next Two Lines -->
    <link rel="stylesheet" href="styles/questionButtonAndForm_styles.css">
    <link rel="stylesheet" href="styles/questionButtonAndForm_responsiveStyles.css">

    <!--  Favicon  -->
    <link rel="icon" type="img/jpg" href="images/img.png" >

    <title>GRC SDEV FAQ</title>
</head>

<body class="d-flex flex-column min-vh-100 justify-content-center">

<!--This is the page nav header-->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm pt-3 pb-3" role="navigation">
    <div class="container-fluid">

        <a class="navbar-brand ps-3" href="https://www.software.greenrivertech.net/" target="_blank">
            <img src="images/img.png" alt="GRTech Logo"  width="48" height="42" class="d-inline-block align-text-top">
        </a>

        <h3 class="d-block d-lg-none d-xl-none d-xxl-none">Green River College Software Development Program<br><em>Frequently Asked Questions</em></h3>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <!--For logo, GRC SDEV PROG title, and FAQ title-->
            <ul class="navbar-nav">
                <li class="px-md-4 px-lg-4 px-xl-4 d-none d-lg-block d-xl-block d-xxl-block">
                    <h4>Green River College Software Development Program</h4>
                    <h5><em>Frequently Asked Questions</em></h5>
                </li>
            </ul>

            <!--   Spacer-->
            <ul class="navbar-nav" id="spacer">
            </ul>

            <!--Remainder of navbar-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.greenriver.edu/students/pay-for-college/" target="_blank">Money For College</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://medium.com/green-river-web-mobile-developers" target="_blank">Program Blog</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ResourceDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Student Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="https://leetcode.com/" target="_blank">LeetCode</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://replit.com/" target="_blank">Repl</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Advising
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="https://advisingapp.greenrivertech.net/" target="_blank">Advising App</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://grcc.greenriver.edu/Register/waci004.html" target="_blank">Advising Lookup</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://greenrivertech.net/advisors.php" target="_blank">10 Questions for Advisees</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--End nav header-->

<div id="disclaimer" class="container bg-warning box-shadows2 mt-3">
<!--    <h2 class="row text-center"> Disclaimer</h2>-->
    <h3 id="disclaimer-text"><strong>The information provided here is not official or legally binding.
        This is a resource created by students, for students.</strong></h3>
</div>

<!--This is a question/answer accordion-->
<div class="container accordion " id="accordionPanelsStayOpenExample">
    <div class="accordion-item shadow-sm">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                Software Development
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
             aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">

                <p class="question">What is it?</p>
                <p class="answer">- A Bachelor's-level program at Green River College encompassing 300-
                    and 400-level courses</p>
                <p class="answer">- Small class sizes and hands-on faculty.</p>
                <p class="answer">- A strong focus on career preparation and real-world work-cases.</p>
                <p class="question">What are the requirements for entry?</p>
                <p class="answer">- Completion of an associate degree or higher from a regionally
                    accredited institution.</p>
                <p class="answer">- Cumulative GPA of 2.5 or higher.</p>
                <p class="answer">- Grade of 2.5 or higher in an intermediate-level Java programming course
                    (such as SDEV 220) or a waiver from the Program Director.</p>
                <p class="answer">- Application submission and acceptance.</p>
                <p class="answer">- A typical preparation sequence for students coming from other disciplines might include:</p>
                    <ul>
                        <li>IT 201 or SDEV 201 Database Fundamentals<br></li>
                        <li>SDEV 106 Front-End Web Development<br></li>
                        <li>CS 108 Data Science Foundations<br></li>
                        <li>SDEV 117 Web Programming with JavaScript<br></li>
                        <li>SDEV 219 or CS&141 Java 1<br></li>
                        <li>SDEV 220 or CS 145 Java 2<br></li>
                    </ul>
                    Contact software@greenriver.edu for the most accurate, up-to-date information.
            </div>
        </div>
    </div>
</div>
<!--End of q/a accordion here-->

<div class="container accordion" id="accordionPanelsStayOpenExampleTwo">
    <div class="accordion-item shadow-sm">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseTwo">
                Features of Green River Soft Dev
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
             aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">

                <p class="question">What's up with this 'cohort' program?</p>
                <p class="answer">- You’ll be working with the same group of peers through your junior and senior
                    year, creating valuable contacts with like-minded individuals that you are likely to see
                    through your work endeavors. </p>
                <p class="answer">- The cohort program you will be a part of involves consistent interpersonal
                    communication and group work – much like the software developer’s workplace. </p>
                <p class="question">Is there focus on portfolio-building?</p>
                <p class="answer">- Yes! You'll be constantly working on projects to display for your job hunting.</p>
                <p class="question">I heard about a Capstone project - what's that?</p>
                <p class="answer">- Your senior work will include (and culminate in) a complete project tying
                    together the facets of what you’ve learned throughout your years of study. </p>
                <p class="answer">- This will display the depth of your knowledge and skill and look
                    great in a portfolio. </p>
                <p class="answer">- It will be a good example of team-based project development </p>
                <p class="question">What language does the program focus on?</p>
                <p class="answer">- For object oriented programming, the SDEV program focuses on Java. </p>

            </div>
        </div>
    </div>
</div>
<!--End of q/a here-->

<div class="container accordion" id="accordionPanelsStayOpenExampleThree">
    <div class="accordion-item shadow-sm">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseThree">
                Workforce Entry
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
             aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">

                <p class="question">Is there a focus on internships?</p>
                <p class="answer">- Yes. Your professors and the program’s administration will stress the importance
                    of internships to enter the software dev workforce. </p>
                <p class="answer">- They’ll provide consistent information about available internships.</p>
                <p class="answer">- The program is designed for summers off to pursue these opportunities.</p>
                <p class="answer">- Generally speaking, these are well-paid internships.</p>
                <p class="question">Will there be any focus on my resume?</p>
                <p class="answer">- The professors and staff are helpful and willing to discuss what resumes should
                    look like.</p>
                <p class="answer">- The BoardMasters club will be meeting regularly, and you may just find some
                    workshops specifically involving resume-building.</p>

            </div>
        </div>
    </div>
</div>
<!--End q/a here-->

<div class="container accordion" id="accordionPanelsStayOpenExampleFour">
    <div class="accordion-item shadow-sm">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseFour">
                Covid-19
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
             aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">

                <p class="question">What is attending school like during the pandemic?</p>
                <p class="answer">- Classes are currently online-only.</p>
                <p class="answer">- The future is a bit unclear, but classes may likely remain hybrid (a mix of
                    online and in-person) in the foreseeable future.</p>
                <p class="question">What do I do if I test positive for covid-19?</p>
                <p class="answer">- If it is affecting your day-to-day wellness, feel free to speak with your
                    teachers about your experience and difficulties.</p>
                <p class="answer">- The teachers at Green River are understanding and helpful, and can likely find
                    agreeable means of helping you stay up with coursework.</p>

            </div>
        </div>
    </div>
</div>
<!--End q/a here-->

<!--Begin QnA Submit Form Here-->
<!-- id naming conventions from buttons to their containers must match the first -->
<!-- two words or else it breaks the javascript!!! -->
<div id="kevin-container">
    <div id="button-question-container" class="all-buttons-container">
        <button type="button" id="button-question" class="button-hover-noTransition all-buttons btn-question">
            ASK A QUESTION
        </button>
    </div>

    <button type="button" id="message-sent">Your question has been sent</button>

    <form id="form-question" class="d-block form-group"  action="" method="get">

        <!-- container for form elements -->
        <div id="question-div" class="form-group">
            <span class="error" id="error-question">Please Enter Question</span>

            <textarea name="question-entry" class="form-control" id="question-entry" rows="8" cols="40" placeholder="Ask a Question"></textarea>

            <span class="error" id="error-email">Please Enter Email</span>

            <input name="email" type="email" class="form-control" id="email-entry" placeholder="Contact Email">
            <!-- id naming conventions from buttons to their containers must match the first -->
            <!-- two words or else it breaks the javascript!!! -->
            <div id="button-submit-container" class="all-buttons-container disable-default-button-styles">
                <button type="submit" id="button-submit" class="button-hover-noTransition all-buttons btn-submit">
                    <!-- absolutely will not work if the text is encapsulated in anything -->
                    SUBMIT QUESTION
                </button>
            </div>
        </div>

    </form>

</div>
<!--End Kevin's QnA Here-->

<!--Footer begins here-->
<footer class="bg-light text-center text-lg-start footer mt-auto py-3 pb-0">

    <!-- Grid container -->
    <div class="container p-4  justify-content-around">

        <!--Grid row-->
        <div class="row justify-content-around">

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
                <h5 class="text-uppercase">Green River College</h5>
                <hr>
                <p class="footer-links">This site provides information and resources
                    for students in Green River's Bachelor's of
                    Applied Science - Software Development
                    program.</p>
            </div>

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
                <h5 class="text-uppercase mb-0">Useful Links</h5>
                <hr>
                <ul class="footer-list footer-links">
                    <li>
                        <a class="text-dark" href="https://www.itconnect.greenrivertech.net/internships" target="_blank">Internships</a>
                    </li>
                    <li>
                        <a class="text-dark" href="https://www.itconnect.greenrivertech.net/studentResources" target="_blank">Student Resources</a>
                    </li>
                    <li>
                        <a class="text-dark" href="https://www.boardmasters.greenriverdev.com/" target="_blank">BoardMasters Club</a>
                    </li>
                </ul>
            </div>

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
                <h5 class="text-uppercase">Follow</h5>
                <hr>

                <!--NOTE: all of these groups got deleted recently I guess. I kept the links the greenrivertech page has though. -->
                <ul class="footer-list mb-0 footer-links">
                    <li>
                        <a class="text-dark" href="https://instagram.com/greenrivertech/" target="_blank">Instagram</a>
                    </li>
                    <li>
                        <a class="text-dark" href="https://www.linkedin.com/groups/6781985" target="_blank">LinkedIn</a>
                    </li>
                    <li>
                        <a class="text-dark" href="https://www.facebook.com/greenrivertechnologyprograms" target="_blank">Facebook</a>
                    </li>
                </ul>
            </div>

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
                <h5 class="text-uppercase ">Legal</h5>
                <hr>

                <!--NOTE: all of these groups got deleted recently I guess. I kept the links the greenrivertech page has though. -->
                <ul class="footer-list mb-0 footer-links pl-3">
                    <li>
                        <a class="text-dark" href="https://www.greenriver.edu/about-us/website/privacy-notice.htm" target="_blank">Privacy Policy</a>
                    </li>
                    <li>
                        <a class="text-dark" href="https://www.greenriver.edu/student-affairs/financial-aid/ethical-principles-and-code-of-conduct.htm"
                           target="_blank">Code of Conduct</a>
                    </li>
                    <!--THIS POINTS NOWHERE SO FAR-->
                    <li>
                        <a class="text-dark" href="https://www.software.greenrivertech.net/login.php" target="_blank">Admin Login</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Green River College Technology Program
    </div>
    <!-- Copyright -->
</footer>
<!--End footer here-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Kevin's Script Below -->
<script src="scripts/questionButtonAndForm_script.js"></script>


<?php


        // TURN ON ERROR REPORTING
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        echo "<p>Email sent!</p>";


        // make the vars
        $question_entry = nl2br($_GET['question-entry']);
        $email = $_GET['email'];

        // send an email to my email
        $toEmail = "obrien.conor@student.greenriver.edu"; //mine

        $fromName = "FAQ Page";

        $fromEmail = $email; // should be a real source entered on page

        $message = "NEW QUESTION FROM USER:\n$question_entry";

        $subject = "Question from User";

        $headers = "From: $fromName <$fromEmail>";

        $sent = mail($toEmail, $subject, $message, $headers);
        // not validating yet, just checking to see that it works


?>

</body>
</html>
