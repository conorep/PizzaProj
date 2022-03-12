<?php
// TURN ON ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);


session_start();

$pageName = "PortfolioMain";
include('305/include/include.php');

?>


<!--
    Conor O'Brien
    SDEV305 Fall 2021
    Portfolio
    index.php
-->


<body>
<!--body container to span width-->
<div class="container-fluid">

    <!--row for body content columns-->
    <div class="row content">

        <!--SIDEBAR-->
        <div id="side-words" class="d-none d-md-block d-lg-block d-xl-block col-md-2 col-lg-2 col-xl-2 pt-4   ">
            <p class="pt-4 ">A Bit of Myself and My Work</p>
        </div>

        <!--MAIN BODY CONTENT - JUMBOTRON & FORMS -->
        <div class="col-12 col-md-10 col-lg-10 col-xl-10  container-fluid">

            <!--JUMBOTRON HEADER-->
            <div class="jumbotron mb-2">
                <h1 class="display-4">Conor's Portfolio</h1>
                <p class="lead d-none d-md-block">Learn a little about me.</p>
                <p><a id="linkedinAnchor" target="_blank" href="https://www.linkedin.com/in/conor-ep-obrien"><i
                                id="idLinkedInIcon">in</i> LinkedIn</a></p>

                <br>
                <?php
                if (isset($_SESSION['cobrienAdminStuff'])) {
                    echo '<a href="https://cobrien2.greenriverdev.com/305/Guestbook/logout.php">
                <button class="btn btn-lg btn-primary float-right" type="button">Logout</button>
                </a>';
                    echo '<br>';
                }
                ?>
            </div>

            <nav class="nav nav-pills flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Portfolio <span class="sr-only">(current)</span></a>
                <a class="flex-sm-fill text-sm-center nav-link " target="_blank"
                   href="https://cobrien2.greenriverdev.com/305/Resume/">Resume</a>
                <a class="flex-sm-fill text-sm-center nav-link "
                   href="https://cobrien2.greenriverdev.com/305/Guestbook/index.php">Guestbook</a>
                <a class="flex-sm-fill text-sm-center nav-link"
                   href="https://cobrien2.greenriverdev.com/305/Guestbook/adminLogin.php">Admin</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="https://github.com/conorep/" target="_blank">GitHub</a>
            </nav>

            <hr>

            <section class="form-group border p-2">
                <h2 class="ml-2">A Brief Bio - Conor O'Brien</h2>
                <hr>
                <p class="p-2">
                    I was born in Auburn, Washington in 1988, and grew up in a log cabin that my firefighter grandfather
                    and his unit built while my father was a child. I'm the youngest of three children. My father was a
                    commercial fisherman, gone for work 9 months of the year while he was alive; my mother was the
                    at-home
                    dual parental unit. School and work have always been a point of focus and pride for me. In a sense,
                    I think I imitate the hard work and perseverance that I witnessed in both of my parents. I began
                    working on boats during the summer when I was 12, have had full-time jobs since I was 16, and
                    constantly strive for personal growth. This 'personal growth' chase takes the form of a sort of
                    obsessive self-competitiveness, which I've been able to focus on playing the saxophone, rock
                    climbing, personal fitness, art, and a variety of other pursuits through the passage of my 20s and
                    now early 30s.
                </p>
                <p class="p-2">
                    My current career path has led me to a 12-year stretch of hardware technician/multi-department
                    manager at an aerospace electronics manufacturing company in Kent, WA. I've gotten to assist with
                    the design and development of audio and video equipment of all sorts via the bespoke engineering
                    practices of Astronics Custom Control Concepts, which has led me to my latest passion of studying
                    and learning to develop software. I attended Green River College while working at ACCC to attain my
                    AA-DTA, and have now put that to use in getting into GRC's Software Development - BAS program. So
                    far I've maintained 4.0s in all classes and aim to continue to do so throughout the program. I'm
                    excited for the creative possibilities and remote capabilities of a future in becoming a soft dev.
                </p>
                <p class="p-2">
                    I am at my performance best when I'm stressed, which is an interesting thing to realize. I've
                    practiced meditation and yoga over the years to mitigate the emotional negatives of stress, and
                    spent many years learning from various therapists how to best be myself. My life is now filled with
                    animal friends, human friends, a supportive family (particularly my wonderful sister and her two rad
                    daughters), learning, volunteering when I find time, and working.
                </p>
            </section>

            <section class="border p-2 my-3">
                <h2 class="ml-2">A Few Pictures of Life</h2>
                <hr>
                <div id="portfolioPics" class=" pl-3">
                    <img src="305/images/yungFam.jpg" alt="A picture of my mom, sister, brother and I when we were young.">
                    <img src="305/images/halloween.jpg" alt="A picture in Seattle on a Halloween pub crawl with friends.">
                    <img src="305/images/meriNMe.jpg" alt="Meri and I.">
                    <img src="305/images/reach.jpg" alt="REACH camp counselors photo.">
                    <img src="305/images/wtfest.jpg" alt="WTFest with Nathan.">
                </div>
            </section>

            <section class="border p-2">
                <h2 class="ml-2">Projects and Accomplishments</h2>
                <hr>
                <div class="d-inline-block portfolio mr-md-4">
                    <div class="portfolPrj">
                        <img src="305/images/groupPage.jpg" alt="A screenshot of the GRGG FAQ page.">
                        <p class="text-center py-2">Group FAQ project.<br><a
                                    href="https://gr-guilty-gibbons.greenriverdev.com/">See it live here!</a></p>
                    </div>
                </div>

                <div class="d-inline-block portfolio">
                    <div class="portfolPrj">
                        <img src="305/images/javaAssignments.jpg" alt="A screenshot of a java assignment.">
                        <p class="text-center py-2">One of my latest Java class's individual assignments.</p>
                    </div>
                </div>

                <div class="d-inline-block portfolio mr-md-4">
                    <div class="portfolPrj">
                        <img src="305/images/pizzaSite.jpg" alt="A screenshot of Poppa's Pizza site.">
                        <p class="text-center py-2">Class Poppa's Pizza prj.<br><a
                                    href="https://cobrien2.greenriverdev.com/305/Pizza/">See it live here!</a></p>
                    </div>
                </div>

                <div class="d-inline-block portfolio">
                    <div class="portfolPrj">
                        <img src="305/images/javaBlackJackprj.jpg"
                             alt="An early java assignment hosted on REPLIT.">
                        <p class="text-center py-2">One of my earliest Java individual assignments - blackjack.<br><a
                                    href="https://replit.com/@conorepobrien/javaPrjBlackJack">Play it live here!</a></p>
                    </div>
                </div>

                <div class="d-inline-block portfolio mr-md-4">
                    <div class="portfolPrj">
                        <img src="305/images/pythonYahtzee.jpg"
                             alt="An early Python assignment hosted on REPLIT.">
                        <p class="text-center py-2">One of my earliest Python individual assignments - Yahtzee.<br><a
                                    href="https://replit.com/@conorepobrien/pythonPrjYahtzee">Play it live here!</a></p>
                    </div>
                </div>

                <div class="d-inline-block portfolio">
                    <div class="portfolPrj">
                        <img src="305/images/liLearningBootstrap.jpg" alt="A certification for Bootstrap 4.">
                        <p class="text-center py-2">A certification of Bootstrap 4 training.</p>
                    </div>
                </div>

            </section>


            <br><br>

        </div> <!--end body content-->
    </div> <!--end row div-->
</div> <!--end body container to span width-->

<footer class="container-fluid">
    <p class="text-right pr-3">Welcome!</p>
</footer>

</body>
</html>