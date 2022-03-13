<?php
// TURN ON ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);


session_start();

$pageName = "Guestbook";
include('../include/include.php');

?>

<!--
    Conor O'Brien
    SDEV305 2021
    Guestbook
    index.php
-->

<body>

<!--body container to span width-->
<div class="container-fluid">

    <!--row for body content columns-->
    <div class="row content">

        <!--SIDEBAR-->
        <div id="side-words" class="d-none d-md-block d-lg-block d-xl-block col-md-2 col-lg-2 col-xl-2 pt-4   ">
            <p class="pt-4 ">A Guestbook for Friends and Colleagues</p>
        </div>

        <!--MAIN BODY CONTENT - JUMBOTRON & FORMS -->
        <div class="col-12 col-md-10 col-lg-10 col-xl-10  container-fluid">

            <!--JUMBOTRON HEADER-->
            <div class="jumbotron mb-2">

                <h1 class="display-4">Conor's Guestbook</h1><br>
                <p class="lead">Leave your info - let's keep in touch!</p>
                <?php
                if (isset($_SESSION['cobrienAdminStuff'])) {
                    echo '<a href="https://cobrien2.greenriverdev.com/305/Guestbook/logout.php"><button class="btn btn-lg btn-primary float-right" type="button" >Logout</button></a>';
                    echo '<br>';
                }
                ?>
            </div>


            <nav class="nav nav-pills flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/">Portfolio</a>
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/Resume/">Resume</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Guestbook <span class="sr-only">(current)</span></a>
                <a class="flex-sm-fill text-sm-center nav-link"
                   href="https://cobrien2.greenriverdev.com/305/Guestbook/adminLogin.php">Admin</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="https://github.com/conorep/" target="_blank">GitHub</a>
            </nav>

            <hr>

            <!-- Info form -->
            <form id="guestbook-form" action="confirm.php" target="_blank" method="post">


                <!--  Contact info  -->
                <fieldset class="form-group border p-2">
                    <legend>Contact Information</legend>


                    <div class="row">

                        <div class="form-group col-6">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname"
                                   placeholder="Enter first name">
                            <span class="err" id="err-fname">Please enter first name.</span>
                        </div>

                        <div class="form-group col-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname"
                                   placeholder="Enter last name">
                            <span class="err" id="err-lname">Please enter last name.</span>
                        </div>

                    </div>


                    <div class="row">

                        <div class="form-group col-6">
                            <label for="job-title">Job Title</label>
                            <input type="text" class="form-control" id="job-title" name="job-title"
                                   aria-describedby="job-title"
                                   placeholder="Enter job title (optional)">
                        </div>

                        <div class="form-group col-6">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" id="company" name="company"
                                   aria-describedby="company"
                                   placeholder="Enter company name (optional)">
                        </div>

                    </div>


                    <div class="row">

                        <div class="form-group col-6">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="email"
                                   placeholder="Enter email address">
                            <span class="err" id="err-email">Please enter a valid email address.</span>
                        </div>

                        <div class="form-group col-6">
                            <label for="linkedIn">LinkedIn URL</label>
                            <input type="text" class="form-control" id="linkedIn" name="linkedIn"
                                   aria-describedby="linkedIn"
                                   placeholder="Enter LinkedIn URL (optional)">
                            <span class="err" id="err-linkedin">Please enter LinkedIn URL.</span>
                        </div>

                    </div>


                </fieldset>


                <!--  How we met -->
                <fieldset class="form-group border p-2">

                    <legend>How We Met</legend>
                    <label for="met-method">Please select an option</label>
                    <div class="form-group">
                        <select class="form-control" id="met-method" name="we-met" onchange='chooseOther(this.value)'>
                            <option value="">Please make a selection</option>
                            <option value="friend">Through a Friend</option>
                            <option value="job-fair">Job Fair</option>
                            <option value="school">Green River Classes</option>
                            <option value="online">Online</option>
                            <option value="not-yet">We Haven't Met Yet!</option>
                            <option value="other">Other</option>
                        </select>
                        <span class="err" id="err-met">Please select how we met</span>


                        <div id="other" class="form-group ">
                            <br>
                            <label for="others">Other</label>
                            <input type="text" class="form-control" id="others" name="other" aria-describedby="others"
                                   placeholder="Please enter how we met if you chose 'other'">
                            <span class="err" id="err-other">Please say how else we met</span>
                        </div>

                        <div id="message-block" class="form-group ">
                            <label for="message">Send me a message!</label>
                            <textarea class="form-control" id="message" name="message" aria-describedby="message"
                                      rows="4"></textarea>
                            <span class="err" id="err-message">Please enter a message for me</span>
                        </div>

                    </div>

                </fieldset>


                <!--  Mailing List  -->
                <fieldset class="form-group border p-2">
                    <legend>Mailing List?</legend>

                    <div class="form-group">
                        <label>
                            <input name="mailing-list" value="no" type="hidden">
                            <input type="checkbox" id="mailing-list" value="yes" name="mailing-list"
                                   onclick='chooseOther(this.checked)'>
                            Please add me to your mailing list! (Requires email address.)
                        </label>
                    </div>

                    <div class="form-group " id="mailGroup">
                        <span>PLease choose an email format:</span>

                        <div class="radio-inline">
                            <label class="radio-inline"><input id="HTML-choice" type="radio" name="list-choices"
                                                               value="text" checked>&nbsp;Text&nbsp;&nbsp;</label>
                            <label class="radio-inline"><input id="text-choice" type="radio" name="list-choices"
                                                               value="HTML">&nbsp;HTML</label>
                        </div>
                        <span class="err" id="err-mailing-list">Please select a mailing list option</span>
                    </div>

                </fieldset>


                <!--submit button @ bottom of form-->
                <button type="submit" class="btn btn-primary ">Submit Info</button>

            </form> <!--end of form to submit-->

            <br><br>

        </div> <!--end body content-->
    </div> <!--end row div-->
</div> <!--end body container to span width-->

<footer class="container-fluid">
    <p class="text-right pr-3">Thank you!</p>
</footer>

<script src="script/script.js"></script>


</body>

</html>