<?php
//Set database access credentials
$name = 'codered';
$user = 'test';
$password = 'test@123';
$host = 'localhost';

//Set table name
$tname = 'MasterDB';

/*Open the connection to our database use the info from the config file.*/
$link = mysqli_connect($host, $user, $password);

if (!$link) {
        die('Could not connect: ' . mysqli_error($link));
}
mysqli_select_db($link, "codered") or die(mysqli_error($link));

?>
