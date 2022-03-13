<?php

// TURN ON ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

$pageName = "Guestbook Confirmation";
include('../include/include.php');

?>

<!--
    Conor O'Brien
    SDEV305 2021
    Guestbook
    confirm.php
-->

<!--body container to span width-->
<div class="container-fluid">

    <!--row for body content columns-->
    <div class="row content">

        <!--SIDEBAR-->
        <div  id="side-words-small" class="d-none d-md-block d-lg-block d-xl-block col-md-2 col-lg-2 col-xl-2 pt-4   ">
            <p class="pt-4 ">A Guestbook for Friends and Colleagues</p>
        </div>

        <!--MAIN BODY CONTENT - JUMBOTRON & FORMS -->
        <div class="col-12 col-md-10 col-lg-10 col-xl-10  container-fluid">

            <!--JUMBOTRON HEADER-->
            <div class="jumbotron">
                <h1 class="display-4">Conor's Guestbook</h1><br>
                <p class="lead">Leave your info - let's keep in touch!</p>
                <?php
                if(isset($_SESSION['cobrienAdminStuff']))
                {
                    echo '<a href="https://cobrien2.greenriverdev.com/305/Guestbook/logout.php"><button class="btn btn-lg btn-primary float-right" type="button" >Logout</button></a>';
                    echo '<br>';
                }
                ?>
            </div>


            <nav class="nav nav-pills flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/">Portfolio</a>
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/Resume/">Resume</a>
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/Guestbook/">Guestbook</a>
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/Guestbook/adminLogin.php">Admin</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="https://github.com/conorep/" target="_blank">GitHub</a>
            </nav>

            <?php

                // make sure the request is coming from my site
                if(isset($_SERVER['HTTP_REFERER']))
                {
                    if ($_SERVER['HTTP_REFERER'] != 'https://cobrien2.greenriverdev.com/305/Guestbook/index.php'
                        && $_SERVER['HTTP_REFERER'] != 'https://cobrien2.greenriverdev.com/305/Guestbook/')
                    {
                        die("http_referer illegitimate. please leave");
                    }

                    // function for regex site validation
                    function regexSiteVal($validateURL)
                    {
                        // COULD use the built-in FILTER_VALIDATE_URL, but there's some online debate about its efficacy
                        // code from urlregex.com
                        $regex = '%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$%iu';

                        $validateURL = strtolower($validateURL);

                        // plus checking so that linkedin is included somewhere in a valid url
                        if (preg_match($regex, $validateURL) == 1 && strpos($validateURL, 'linkedin'))
                        {
                            return true;
                        } else
                        {
                            return false;
                        }
                    }

                    // function to send off form data
                    function sendit($arr)
                    {
                        global $cnxn;


                        // sql injection? not today.
                        foreach ($arr as $key=>$value)
                        {
                            $arr[$key] = mysqli_real_escape_string($cnxn, $value);
                        }

                        // store the order in a database. write the statement, call the query!
                        $sql = "INSERT INTO guestbook (fname, lname, job_title, company, email, linkedin, how_met, other, message, mail_list, mail_type)
                        VALUES('{$arr["fname"]}',
                               '{$arr["lname"]}',
                               '{$arr["job_title"]}', 
                               '{$arr["company"]}', 
                               '{$arr["email"]}', 
                               '{$arr["linkedin"]}', 
                               '{$arr["we-met"]}', 
                               '{$arr["other"]}', 
                               '{$arr["message"]}', 
                               '{$arr["mailing-list"]}', 
                               '{$arr["list-choices"]}'
                               )";

                        mysqli_query($cnxn, $sql); // use connection object (pipe) and the data
                    }

                    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['job-title']) && isset($_POST['company']) && isset($_POST['email']) && isset($_POST['linkedIn']) && isset($_POST['we-met']) && isset($_POST['other']) && isset($_POST['message']) && isset($_POST['mailing-list']) && isset($_POST['list-choices']))
                    {
                        //connect to DB
                        require("/home/cobrieng/db-creds.php");
                        $cnxn = mysqli_connect($host, $username, $password, $database)
                        or die("Error connecting to the database.");

                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $job_title = $_POST['job-title'];
                        $company = $_POST['company'];
                        $email = $_POST['email'];
                        $linkedIn = $_POST['linkedIn'];
                        $we_met = $_POST['we-met'];
                        $other = $_POST['other'];
                        $message = $_POST['message'];
                        $mailing = $_POST['mailing-list'];
                        $list_choices = $_POST['list-choices'];


                        $isValid = true;

                        // require first and last name
                        if (empty($fname))
                        {
                            echo "<p>Please enter a first name.</p>";
                            $isValid = false;
                        }
                        if (empty($lname))
                        {
                            echo "<p>Please enter a last name.</p>";
                            $isValid = false;
                        }

                        // check valid if email not empty, require not empty if mail list is checked
                        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                            echo "<p>Please enter a valid email.</p>";
                            $isValid = false;
                        } elseif ($mailing != "no" && empty($email))
                        {
                            echo "<p>You checked 'add to mailing list'. Please enter a valid email.</p>";
                            $isValid = false;
                        }

                        // check valid if linkedin not empty
                        if (!empty($linkedIn) && !regexSiteVal($linkedIn))
                        {
                            echo "<p>Please enter a valid LinkedIn link. <br>Ensure your link starts with 'http://www.' or 'https://www.' when adding your link.</p>";
                            $isValid = false;
                        }

                        // check valid 'how we met' and ensure it has a selection
                        if (empty($we_met) || $we_met == "")
                        {
                            echo "<p>Please select how we met.</p>";
                            $isValid = false;
                        } elseif ($we_met != "friend" && $we_met != "job-fair" && $we_met != "school" && $we_met != "online" && $we_met != "not-yet" && $we_met != "other")
                        {
                            echo "<p>Please select how we met and ensure that there's no spoofing happening.</p>";
                            $isValid = false;
                        }

                        if (!$isValid)
                        {
                            die("<p>Please fix any errors and submit again.</p>");
                        } else
                        {
                            echo "<h1 class='ml-3'>Submission confirmed. Thank you!</h1>";
                        }


                        // make it prettier. store the vars in an array for usage in a function like Tina did
                        $postData = array('fname'=>$fname, 'lname'=> $lname, 'job_title'=> $job_title, 'company'=> $company, 'email'=> $email,
                            'linkedin'=> $linkedIn, 'we-met'=> $we_met, 'other'=> $other, 'message'=>$message, 'mailing-list'=> $mailing,
                            'list-choices'=> $list_choices);

                        sendit($postData);

                    } else
                    {
                        echo '<p>Post data not set. Please ensure you are sending form data from the proper guestbook page.</p>';
                    }

                } else
                {
                    echo '<p>HTTP_REFERER not set.</p>';
                }

            ?>

        </div> <!--end body content-->

    </div> <!--end row div-->

</div> <!--end body container to span width-->

<footer class="container-fluid">
    <p class="text-right pr-3">Thank you!</p>
</footer>

</body>

</html>