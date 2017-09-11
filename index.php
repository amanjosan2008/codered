<?php include 'header.php'; ?>
<?php include 'sql.php'; ?>
<html>
<body>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <form action="result.php" method="post" id="codered" runat="vdaemon">
        <vlsummary class="error" headertext="Error(s) found:">
            <input type="hidden" name="formID" value="srinfo" />
            <input type="hidden" name="redirect_to" value="view.php" />
            <div>
                <lable for="sr">SR Number</lable>
                <input type="text" name="sr" id="SR" placeholder="SR#" maxlength="8" pattern="[7][0-9]{7,}" required title="Enter a valid Case Number">
            </div>

            <div>
                <input type="submit" value="Search" />
            </div>
      </form>

</body>
</html>

<?php include 'footer.php'; ?>

