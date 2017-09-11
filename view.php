<html>
<body>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link rel="stylesheet" type="text/css" href="view.css">
<?php

include 'header.php';
include 'access_db.php';

$sql = "SELECT * FROM MasterDB ORDER BY id DESC LIMIT 1";

$results = mysqli_query($link, $sql);

if (!$results) {
        die('Invalid query: ' . mysqli_error($link));
}

echo '<h2>CodeRed Alert Generated with below Info:</h2>';

while($result = mysqli_fetch_array($results )){
	echo '<div style="border: 1px solid #e4e4e4; padding: 15px; margin-bottom: 10px;">';
	echo '<p>SR Number: ' . $result['sr'] . '</p>';
	echo '<p>Customer Name: ' . $result['CustomerName'] . '</p>';
	echo '<p>Country: ' . $result['Geo'] . '</p>';
	echo '<p>Business Impact: ' . $result['BusinessImpact'] . '</p>';
	echo '<p>Product Version: ' . $result['ProductVersion'] . '</p>';
	echo '<p>Problem Description: ' . $result['ProblemDescription'] . '</p>';
	echo '<p>Customer Temp: ' . $result['CustomerTemp'] . '</p>';
	echo '<p>BugID: ' . $result['BugID'] . '</p>';
        echo '<p>ProductionDown: ' . $result['ProductionDown'] . '</p>';
	echo '<p>Last Update: ' . $result['LastUpdate'] . '</p>';
	echo '<p>Engineers Email ID: ' . $result['email'] . '</p>';
	echo '</div>';

$sr = $result['sr'];
$CustomerName = $result['CustomerName'];
$Geo = $result['Geo'];
$BusinessImpact = $result['BusinessImpact'];
$ProductVersion = $result['ProductVersion'];
$ProblemDescription = $result['ProblemDescription'];
$CustomerTemp = $result['CustomerTemp'];
$BugID = $result['BugID'];
$email = $result['email'];
$ProductionDown = $result['ProductionDown'];
$LastUpdate = $result['LastUpdate'];

}

include 'footer.php';

$to = "amandeep.singh@citrix.com";
//$to = "#NSEscalationEMEA@citrite.net";
$subject = "Please Ignore - Code Red Alert";
$headers = "From: CodeRed<codered@citrix.com>" . "\r\n" .
$headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
$headers .= "Mime-Version: 1.0 \r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable \r\n";
$headers .= "Cc: $email" . "\r\n";

$txt = "<p>Hi,</p>
<p>This is a Code Red Alert Mail.</p>
<p>Please find below the details about this Alert:<br /><br /></p>
<table border=1>
<tbody>
<tr>
<td><strong>Serial number: </strong></td>
<td>$sr</td>
</tr>
<tr>
<td><strong>Customer Name:</strong></td>
<td>$CustomerName</td>
</tr>
<tr>
<td><strong>Country:</strong></td>
<td>$Geo</td>
</tr>
<tr>
<td><strong>Business Impact:</strong></td>
<td>$BusinessImpact</td>
</tr>
<tr>
<td><strong>Product Version:</strong></td>
<td>$ProductVersion</td>
</tr>
<tr>
<td><strong>Problem Description:</strong></td>
<td>$ProblemDescription</td>
</tr>
<tr>
<td><strong>Customer Temperature: <br /></strong></td>
<td>$CustomerTemp</td>
</tr>
<tr>
<td><strong>Bug ID:</strong></td>
<td>$BugID</td>
</tr>
<tr>
<td><strong>Email ID:</strong></td>
<td>$email</td>
</tr>
<tr>
<td><strong>Production Down:</strong></td>
<td>$ProductionDown</td>
</tr>
<tr>
<td><strong>Last Update:</strong></td>
<td>$LastUpdate</td>
</tr>
</tbody>
</table>
<p>";

mail($to,$subject,$txt,$headers);

?>

</body>
</html>


