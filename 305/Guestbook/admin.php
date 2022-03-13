<?php
// TURN ON ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(0);
session_start();

// Checking whether the session is already there or not if
// false then header redirect it to the admin page directly
if (!isset($_SESSION['cobrienAdminStuff'])) {
    header("Location: https://cobrien2.greenriverdev.com/305/Guestbook/adminLogin.php");
    exit();
}

$pageName = "Guestbook Admin";
include('../include/include.php');

?>

<!--
    Conor O'Brien
    SDEV305 2021
    Guestbook
    admin.php
-->


<body>

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
                <?php
                if (isset($_SESSION['cobrienAdminStuff'])) {
                    echo '<a href="https://cobrien2.greenriverdev.com/305/Guestbook/logout.php"><button class="btn btn-lg btn-primary float-right" type="button" >Logout</button></a>';
                    echo '<br>';
                }
                ?>
            </div>

            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true"
                 data-bs-delay=2000>
                <div class="toast-body">
                    <strong>Admin currently logged in</strong>
                </div>
            </div>


            <nav class="nav nav-pills flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/">Portfolio</a>
                <a class="flex-sm-fill text-sm-center nav-link " href="https://cobrien2.greenriverdev.com/305/Resume/">Resume</a>
                <a class="flex-sm-fill text-sm-center nav-link "
                   href="https://cobrien2.greenriverdev.com/305/Guestbook/">Guestbook</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Admin <span
                            class="sr-only">(current)</span></a>
                <a class="flex-sm-fill text-sm-center nav-link" href="https://github.com/conorep/Portfolio/"
                   target="_blank">GitRepo</a>
            </nav>


            <article class="container-flexible p-4">

                <table id="guestbook-entries" class="display " style="width:100%">
                    <thead>
                    <tr>
                        <th>Message ID</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>LinkedIn</th>
                        <th>How We Met</th>
                        <th>How We Met - Other</th>
                        <th>Message</th>
                        <th>Mailing List? yes/no</th>
                        <th>Mailing List Send Type</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php

                    // TURN ON ERROR REPORTING
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);

                    //connect to DB
                    require("/home/cobrieng/db-creds.php");
                    $cnxn = mysqli_connect($host, $username, $password, $database)
                    or die("Error connecting to the database.");

                    // display guestbook questions
                    $sql = "SELECT * FROM guestbook ORDER BY entry_date DESC";
                    $result = mysqli_query($cnxn, $sql);

                    /*echo "<p>$result</p>";*/

                    foreach ($result as $row) {
                        //    var_dump($row);
                        $entry_id = $row['entry_id'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $job_title = $row['job_title'];
                        $company = $row['company'];
                        $email = $row['email'];
                        $linkedin = $row['linkedin'];
                        $how_met = $row['how_met'];
                        $other = $row['other'];
                        $message = $row['message'];
                        $mail_list = $row['mail_list'];
                        $mail_type = $row['mail_type'];
                        $entry_date = date("m/d/Y H:i:s", strtotime($row['entry_date']));


                        echo "
           <tr>          
				<td>$entry_id</td>
				<td>$entry_date</td>
                <td>$fname $lname</td>
				<td>$job_title</td>
				<td>$company</td>
				<td>$email</td>
				<td>$linkedin</td>
                <td>$how_met</td>
                <td>$other</td>
                <td>$message</td>
				<td>$mail_list</td>
				<td>$mail_type</td>
            </tr>";
                    }


                    ?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Message ID</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>LinkedIn</th>
                        <th>How We Met</th>
                        <th>How We Met - Other</th>
                        <th>Message</th>
                        <th>Mailing List? yes/no</th>
                        <th>Mailing List Send Type</th>
                    </tr>
                    </tfoot>

                </table>

            </article>

        </div> <!--end row div-->

    </div> <!--end body container to span width-->

    <footer class="container-fluid " style="width: 100vw; margin-left: -15px;">
        <p class="text-right pr-3">Thank you!</p>
    </footer>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>


    <!--YOU DONT NEED HTTPS: OR HTTP:. WOAH-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script>
        $('#guestbook-entries').DataTable(
            {
                responsive: true
            }
        );
        $(document).ready(function () {
            $('.toast').toast('show');
        });

    </script>

</body>
</html>
