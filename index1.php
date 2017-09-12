<?php include 'header.php'; ?>
<html>
<body>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <form action="test.php" method="post" id="codered">
        <vlsummary class="error" headertext="Error(s) found:">
            <input type="hidden" name="formID" value="srinfo" />
            <input type="hidden" name="redirect_to" value="view.php" />

<?php $sr = $_GET['sr']; ?>

<h2>Please enter Information for <?php echo $sr ?>:</h2>

		<input type='hidden' name="sr" id="sr" value="<?php echo $sr ?>">
            <div>
                <lable for="CustomerName">Customer Name </lable>
                <input type="text" name="CustomerName" id="CustomerName" placeholder="Customer name" pattern=".{3,}" required title="Enter the Customer Name">
            </div><basefont color="#4D4D4D"></font>
            <div>
                <lable for="Geo">Account Country</lable>
                <input type="text" name="Geo" id="Geo" placeholder="Customer's Country" pattern=".{2,}" required title="Enter the Customer's Country Name">
            </div>
            <div>
                <lable for="BusinessImpact">Business Impact </lable>
                <input type="text" name="BusinessImpact" id="BusinessImpact" placeholder="No of users/applications affected" pattern=".{3,}" required title="What is the Business Impact">
            </div>
            <div>
                <lable for="ProductVersion">Product Version </lable>
                <input type="text" name="ProductVersion" id="ProductVersion" placeholder="NS Product Version" pattern=".{3,}" required title="What is the Product Version" list="defaultProduct">
                <datalist id="defaultProduct">
                    <option value="Netscaler 12.0">
                        <option value="Netscaler 11.1">
                            <option value="Netscaler 11.0">
                                <option value="Netscaler 10.5">
                                    <option value="Netscaler 10.1">
                                        <option value="Netscaler MAS">
                                            <option value="Command Center">
                                                <option value="Cloudbridge">
                                                    <option value="SDWAN">
                </datalist>
            </div>
            <div>
                <lable for="ProblemDescription">Problem Description </lable>
                <input type="text" name="ProblemDescription" id="ProblemDescription" placeholder="Description" pattern=".{3,}" required title="What is the issue?">
            </div>
            <div>
                <lable for="CustomerTemp">Customer Temperature </lable>
                <select name="CustomerTemp">
                    <option value="Hot">Hot</option>
                    <option value="Warm">Warm</option>
                    <option value="Cold">Clod</option>
                </select>
            </div>
            <div>
                <lable for="BugID">Engineering Info </lable>
                <input type="text" name="BugID" id="BugID" placeholder="Bug#">
            </div>
            <div>
                <lable for="email">Engineer Email</lable>
                <input type="text" name="email" id="email" placeholder="username@citrix.com" maxLength="64" pattern=".+@citrix.com" required title="Please enter a valid Email ID">
            </div>
            <div>
                <lable for="ProductionDown">Production Down </lable>
                <select name="ProductionDown">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div>
                <lable for="LastUpdate">Update </lable>
                <textarea name="LastUpdate" id="LastUpdate " pattern=".{3,}" required title="Please enter minimum 3 characters"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit" />
    </form>
    </div>
</body>
</html>
