<?php
// ice-cream1.php

session_start();
$_SESSION['name'] = 'Nick';
$_SESSION['flavor'] = 'cookies & cream';
$_SESSION['eat_method'] = 'spoon';

var_dump($_SESSION);

echo "Data stored";