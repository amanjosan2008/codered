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

?>
