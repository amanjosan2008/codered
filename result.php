<?php
include 'sql.php';
include 'access_db.php';

echo $sql = "SELECT * FROM MasterDB WHERE sr='".$sr."'";

$results = mysqli_query($link, $sql);

if (!$results) {
        die('Invalid query: ' . mysqli_error($link));
}


if (!$result = mysqli_fetch_array($results )){
        header('Location: index1.php?sr=' . $sr, TRUE, 303);
        exit();
} else {
        header('Location: index2.php?sr=' . $sr, TRUE, 303);
        exit();
}
?>

