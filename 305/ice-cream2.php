<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


session_start();
echo $_SESSION['name'] . " likes " . $_SESSION['flavor'] . " and likes to eat it with a " . $_SESSION['eat_method'];