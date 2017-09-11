<?php

include 'sql.php';

$sql = "INSERT INTO MasterDB (sr, CustomerName, Geo, BusinessImpact, ProductVersion, ProblemDescription, CustomerTemp, BugID, LastUpdate, email, ProductionDown ) VALUES ('$sr', '$CustomerName', '$Geo', '$BusinessImpact', '$ProductVersion', '$ProblemDescription', '$CustomerTemp', '$BugID', '$LastUpdate','$email', '$ProductionDown')";

if (!mysqli_query($link, $sql)) {
	die('Error ' . mysqli_error($link));
}
/*Redirect the user after a successful form submission*/
if ( !empty ( $redirect ) ) {
	header("Location: $redirect?msg=1");
} else {
	header("Location: $referred?msg=1");
}

mysqli_close($link);

?>
