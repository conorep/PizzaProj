<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>emailit</title>
</head>
<body>



<?php


        // TURN ON ERROR REPORTING
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        echo "<p>Email sent!</p>";


        // make the vars
        $question_entry = nl2br($_POST['question-entry']);
        $email = $_POST['email'];

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



