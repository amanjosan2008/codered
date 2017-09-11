<?php

define('DB_NAME', 'codered');
define('DB_USER', 'test');
define('DB_PASSWORD', 'test@123');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
        die('Could not connect: ' . mysqli_connect_error($link));
}

$db_selected = mysqli_select_db($link, DB_NAME);

if (!$db_selected) {
        die('Can\'t use ' . DB_NAME . ': ' . mysqli_error($link));
}

$sr = mysqli_real_escape_string($link, $_POST['sr']);
$redirect = mysqli_real_escape_string($link, $_POST['redirect_to']);
$CustomerName = mysqli_real_escape_string($link, $_POST['CustomerName']);
$Geo = $_POST['Geo'];
$BusinessImpact = mysqli_real_escape_string($link, $_POST['BusinessImpact']);
$ProductVersion = mysqli_real_escape_string($link, $_POST['ProductVersion']);
$ProblemDescription = mysqli_real_escape_string($link, $_POST['ProblemDescription']);
$CustomerTemp = $_POST['CustomerTemp'];
$BugID = mysqli_real_escape_string($link, $_POST['BugID']);
$LastUpdate = mysqli_real_escape_string($link, $_POST['LastUpdate']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$ProductionDown = $_POST['ProductionDown'];

?>
