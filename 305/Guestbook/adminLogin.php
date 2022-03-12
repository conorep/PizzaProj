<?php

// error reporting turned off due to non-global variable declarations
/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/

require("/home/cobrieng/guestbookadminconfig.php");

ob_start();
session_set_cookie_params(0);
session_start();

// Checking whether the session is already there or not if
// true then header redirect it to the admin page directly
if (isset($_SESSION['cobrienAdminStuff'])) {
    header("Location: https://cobrien2.greenriverdev.com/305/Guestbook/admin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputName = $_POST["username"];
    $usernameErr = "";

    if (empty($_POST["username"])) {
        $usernameErr = "Please enter a username";
    } else {
        if (!array_key_exists($inputName, $usernames)) {
            $usernameErr = "Please enter a valid username";
        }
    }

    $inputPassword = $_POST["password"];
    $passwordErr = "";

    if (empty($_POST["password"])) {
        $passwordErr = "Please enter a password";
    } else {
        if (!$inputPassword == $usernames[$inputName]) {
            $passwordErr = "Please enter a valid password";
        }
    }


    if ($usernameErr == "" && $passwordErr == "") {
        $_SESSION['cobrienAdminStuff'] = $inputName;
        header('Location: https://cobrien2.greenriverdev.com/305/Guestbook/admin.php');
        exit();
    }
}

$pageName = "Guestbook Admin Login";
include('../include/include.php');

?>


<!--
    Conor O'Brien
    SDEV305 2021
    Guestbook
    adminLogin.php
-->


<!--body container to span width-->
<div class="container-fluid">

    <!--row for body content columns-->
    <div class="row content">

        <!--SIDEBAR-->
        <div id="side-words-small" class="d-none d-md-block d-lg-block d-xl-block col-md-2 col-lg-2 col-xl-2 pt-4   ">
            <p class="pt-4 ">A Guestbook for Friends and Colleagues</p>
        </div>

        <!--MAIN BODY CONTENT - JUMBOTRON & FORMS -->
        <div class="col-12 col-md-10 col-lg-10 col-xl-10  container-fluid">

            <!--JUMBOTRON HEADER-->
            <div class="jumbotron">
                <h1 class="display-4">Conor's Guestbook</h1><br>
                <p class="lead">Leave your info - let's keep in touch!</p>
            </div>

            <nav class="nav nav-pills flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/">Portfolio</a>
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/Resume/">Resume</a>
                <a class="flex-sm-fill text-sm-center nav-link "
                   href="https://cobrien2.greenriverdev.com/305/Guestbook/">Guestbook</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Admin <span
                            class="sr-only">(current)</span></a>
                <a class="flex-sm-fill text-sm-center nav-link" href="https://github.com/conorep/" target="_blank">GitHub</a>
            </nav>


            <div class="container">

                <!--Admin login here-->
                <form method="post" id="adminLogin" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

                    <fieldset class="form-group  border p-2">
                        <legend class="px-2">Login Information</legend>
                        <div class="container ">
                            <div class="form-group mx-md-5 mx-lg-5 mx-xl-5">
                                <label for="username">Username: </label>
                                <span class="text-danger err" id="erruname"> Please enter a valid username</span>
                                <span class="text-danger "> <?php echo $usernameErr; ?></span>
                                <input type="text" class="form-control " id="username" placeholder="enter username here"
                                       name="username">
                            </div>
                            <div class="form-group mx-md-5 mx-lg-5 mx-xl-5">
                                <label for="password">Password: </label>
                                <span class="text-danger err" id="errpass"> Please enter a valid password</span>
                                <span class="text-danger "> <?php echo $passwordErr; ?></span>
                                <input type="password" class="form-control" id="password"
                                       placeholder="enter password here" name="password">
                            </div>
                            <div>
                                <button type="submit"
                                        class="btn btn-lg btn-primary my-3 mx-md-5 mx-lg-5 mx-xl-5 float-right">Submit
                                </button>
                            </div>
                        </div>

                    </fieldset>

                </form>

            </div>


        </div> <!--end body content-->

    </div> <!--end row div-->

</div> <!--end body container to span width-->

<footer class="container-fluid">
    <p class="text-right pr-3">Thank you!</p>
</footer>

<script src="script/adminLoginScript.js"></script>

</body>

</html>
