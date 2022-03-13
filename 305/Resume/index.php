<?php
// TURN ON ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);


session_start();
?>

<!--
    Conor O'Brien
    SDEV305 2021
    Resume
    index.php
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">

    <title>Conor O'Brien Resume</title>

    <!--  Favicon  -->
    <link rel="icon" type="image/png" href="../images/fallWork.jpg">
</head>

<body>

<!--anchor for 'to top' button in footer-->
<a id="top"></a>

<!--fluid container for entire content of page-->
<div class="container-fluid ">

    <!--header content-->
    <header class="row">

        <div class="col-6">
            <p id="big-text" class="text-left">My Resume</p>
        </div>

        <div class="col-6">

            <ul>

                <li class="no-style text-right"><a class=" smaller" target="_blank"
                                                   href="https://www.linkedin.com/in/conor-ep-obrien"><i
                                id="idLinkedInIcon">in</i> LinkedIn</a></li>
                <li class="no-style text-right smaller">Green River College</li>
                <li class="no-style text-right smaller">Seatac, Washington</li>
                <li class="no-style text-right smaller">Conor Edward Paul O'Brien</li>
                <li class="no-style text-right smaller" style="overflow-wrap: break-word;">
                    obrien.conor@student.greenriver.edu
                </li>

            </ul>

            <nav class="navbar navbar-expand float-right pr-0 pt-0">
                <div class="navbar-nav">
                    <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/">Portfolio</a>
                    <a class="nav-item nav-link disabled" href="#">Resume <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="https://cobrien2.greenriverdev.com/305/Guestbook/">Guestbook</a>
                    <a class="nav-item nav-link"
                       href="https://cobrien2.greenriverdev.com/305/Guestbook/admin.php">Admin</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="https://github.com/conorep/" target="_blank">GitHub</a>
                    <?php
                    if (isset($_SESSION['cobrienAdminStuff'])) {
                        echo '<a class="nav-item nav-link" href="https://cobrien2.greenriverdev.com/305/Guestbook/logout.php">Logout</a>';
                    }
                    ?>
                </div>
            </nav>

        </div>


    </header>

    <!--pic appears when at medium breakpoint or lower only-->
    <img class="d-block d-lg-none d-xl-none img-fluid" src="../images/conpicc.jpg" alt="Conor O'Brien resting">

    <article class="row ">

        <!--side column with pictures of me-->
        <!--appears only when at lg/xl break points-->
        <div class="col-2 container mr-1  d-lg-block d-xl-block d-none shadow-lg " id="side-stuff">

            <img class="row-3 img-fluid " src="../images/conpicc.jpg" alt="Conor O'Brien resting">
            <img class="row-3 img-fluid " src="../images/conAddy.jpg" alt="Conor and Addy">
            <img class="row-3 img-fluid " src="../images/dreFeet.jpg" alt="Cat Dre's feet">
            <div class="row-3"></div>

        </div>

        <div class="col-12 container align-content-center col-md-9 col-lg-9 col-xl-9" id="main-content">

            <div class="container-fluid bg-white p-4 shadow-lg">
                <h2><u>ABOUT ME</u></h2>
                <br>

                <p class="p-3">I'm a hands-on technical worker and multi-department manager with a deep history of
                    avionics
                    hardware repair, currently working on a Bachelor's of Software development in the pursuit of
                    changing careers into something more creative and in-line with my personal goals of educational
                    growth, remote work, and mastery of web development.</p>

                <p class="p-3"> I keep a healthy balance between work responsibilities and my other personal interests,
                    which
                    include gardening, running, jazz saxophone, and rock climbing. </p>

            </div> <!--container div for about me-->

            <div class="container-fluid bg-white p-4 mt-3 shadow-lg">

                <h2><u>LATEST EDUCATIONAL EXPERIENCE</u></h2>
                <br>

                <h3>Cohort 14 Software Development Group</h3>

                <p class="p-3">The latest project applicable to my aspirations for a career in software development is
                    an ongoing development for the <a href="https://www.software.greenrivertech.net/">greenrivertech.net</a>
                    FAQ page. I worked in a scrum of three to create a responsive webpage, focusing on implementing the
                    bootstrap framework. This page ties to a database that we created which archives information requests
                    from users looking for data not presented in the existing FAQ, as well as all the FAQ questions
                    and answers, which are dynamically generated on the page. This project showcased our abilities
                    to use HTML, CSS, JavaScript, PHP, and SQL. <br><br>We developed each stage of the project
                    utilizing daily standup meetings and two-week Scrum Sprints in conjunction with Agile development methods.</p>
                <p class="p-3">You can find the completed project <a href="https://gr-guilty-gibbons.greenriverdev.com/">
                        here.</a></p>

            </div> <!--container div for current education experience-->

            <div class="container-fluid bg-white p-4 mt-3 shadow-lg">

                <h2><u>WORK EXPERIENCE</u></h2>
                <br>

                <h3><em>Astronics Custom Control Concepts<br>Kent, Washington, United States<br>January
                        2010-Present</em></h3>
                <br>

                <ul class="container ">
                    <li>Repair Station & Customer Service Dep't Manager</li>
                    <li>Feb 2021 - Present</li>
                    <li>oversee a team of avionics technicians</li>
                    <li>manage a team of customer service agents</li>
                    <li>acquisition and termination of employment</li>
                    <li>head customer communications for all repair, service, and related sales situations</li>
                    <li>skilled at metric tracking program creation</li>
                    <li>process creator for continuing improvement projects regarding certifications, training, comms
                    </li>
                </ul>

                <br>

                <ul class="container">
                    <li>FAA Repair Station Supervisor</li>
                    <li>April 2017 - Feb 2021</li>
                    <li>run day-to-day repair station tasks and track priorities</li>
                    <li>manage small team of repair techs, providing assignments and checking work for quality</li>
                    <li>training new technicians</li>
                    <li>coordinating certification needs for ACCC's manufactured parts and their subcomponents</li>
                    <li>ensure compliance with FAA/EASA regulations (knowledge of various FARs &
                        Advisory Circulars)
                    </li>
                    <li>responsible for clear business communications regarding planning, metrics, quality of work,
                        etc.
                    </li>
                </ul>

                <br>

                <ul class="container">
                    <li>FAA Repairman (Concurrent with Other Roles)</li>
                    <li>March 2014 - Present</li>
                    <li>certified for maintenance QC and maintenance release of aircraft components</li>
                    <li>responsible for checking all out-going repaired parts from repair station</li>
                    <li>component-level troubleshooting and repair</li>
                </ul>

                <br>

                <ul class="container">
                    <li>Repair Station / Production / Engineering Technician</li>
                    <li>February 2011 - March 2014</li>
                    <li>testing, troubleshooting, developing new electrical assemblies</li>
                    <li>proficient with soldering iron</li>
                    <li>trained oscilloscope operator</li>
                    <li>trained multimeter operator</li>
                </ul>

                <br>

                <ul class="container">
                    <li>Warehouse Kit Picker</li>
                    <li>January 2010 - February 2011</li>
                    <li>filling work order kits with parts for assemblers</li>
                    <li>opening, issuing, and closing work orders</li>
                    <li>creation of documentation for assembly instructions</li>
                </ul>

                <br>
                <h3>Please contact me if you'd like the rest of my work history.</h3>

            </div> <!--container div for work history-->

            <div class="container-fluid bg-white p-4 mt-3 shadow-lg">

                <h2><u>EDUCATION</u></h2>
                <br>

                <h3><em>Green River College<br>Auburn, Washington, United States</em></h3>
                <br>

                <ul class="container">
                    <li>Bachelor's of Applied Science, Software Development</li>
                    <li>2020 - 2023</li>
                    <li>strong focus on Java</li>
                    <li>focus on cohort program - strong emphasis on group work</li>
                    <li>working real-life style projects, emphasis on scrum and agile work style</li>
                    <li>studying Java, Python, Html, CSS, JavaScript, PHP, SQL</li>
                    <li>emphasis on object-oriented programming</li>
                </ul>

                <br>

                <ul class="container">
                    <li>Associate of Arts DTA, General Studies</li>
                    <li>2014 - 2016</li>
                    <li>studied biology, chemistry, physics of electricity</li>
                    <li>English, world religions, general politics</li>
                    <li>direct transfer authority - AA usable to transfer into junior year of many programs in region
                    </li>
                </ul>

                <br>

                <h2><u>CERTIFICATIONS</u></h2>

                <ul class="container">
                    <li>Bootstrap 4 Essential Training</li>
                    <li>November 2021</li>
                    <li>LinkedIn Learning</li>
                </ul>

            </div> <!--container div for education-->


            <div class="container-fluid bg-white p-4 mt-3 shadow-lg">

                <h2><u>VOLUNTEER EXPERIENCE</u></h2>
                <br>

                <h3><em>REACH Ministries<br>Tacoma, Washington, United States</em></h3>
                <br>
                <ul class="container">
                    <li>Camp Counselor (Annual)</li>
                    <li>2012 - Present</li>
                    <li>a camp for kids and families affected by HIV</li>
                    <li>counsel and entertain a variety of kids and young adults</li>
                    <li>sports, arts-n-crafts, small classes, campfire</li>
                    <li>one weekend a year</li>
                </ul>

            </div> <!--container div for volunteer experience-->

        </div>

    </article>

    <img class="d-block d-lg-none d-xl-none img-fluid" src="../images/dreFeet.jpg" alt="two very fluffy cat paws">

    <footer class="p-3">

        <p class="d-inline-block">Thank you for viewing my resume!&nbsp;&nbsp;</p>

        <form class="p-2 d-inline-block" action="#top">
            <button class="btn btn-secondary btn-lg" type="submit">BACK TO TOP</button>
        </form>

    </footer>

</div>


</body>
</html>