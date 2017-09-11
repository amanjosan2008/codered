<?php
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

