<?php
session_start();
session_destroy();
$_SESSION = array();
header('Location: https://cobrien2.greenriverdev.com/305/Guestbook/admin.php');