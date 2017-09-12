<html>
<body>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <form action="test2.php" method="post" id="codered" runat="vdaemon">
        <vlsummary class="error" headertext="Error(s) found:">
            <input type="hidden" name="formID" value="srinfo" />
            <input type="hidden" name="redirect_to" value="view2.php" />

<?php

include 'header.php';
include 'sql.php';
include 'access_db.php';


$sql = "SELECT * FROM MasterDB WHERE sr='".$_GET['sr']."'";

$results = mysqli_query($link, $sql);

if (!$results) {
        die('Invalid query: ' . mysqli_error($link));
}

echo '<h2>Existing Info:</h2>';

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
        echo '<p>Update: ' . $result['LastUpdate'] . '</p>';
        echo '<p>Engineers Email ID: ' . $result['email'] . '</p>';
        echo '<p>Date Created(IST): ' . $result['CreatedDate'] . '</p>';
        echo '</div>';
        $sr = $result['sr'];
}

?>

	    <div>
		<input type='hidden' name="sr" id="sr" value="<?php echo $sr ?>">
            <div>
                <lable for="NewUpdate">Latest Update </lable>
                <textarea name="NewUpdate" id="NewUpdate" pattern=".{3,}" required title="Please enter minimum 3 characters"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit" />
    </form>
    </div>
</body>
</html>
