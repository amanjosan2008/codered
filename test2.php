<?php

include 'sql2.php';

$sr = $_POST['sr'];
$NewUpdate = $_POST['NewUpdate'];

echo $sql ="INSERT into UpdateDB (sr, NewUpdate ) VALUES ('$sr', '$NewUpdate')";

if (!mysqli_query($link, $sql)) {
        die('Error ' . mysqli_error($link));
}


while($result = mysqli_fetch_array($results )){
        $sr = $result['sr'];
}


/*Redirect the user after a successful form submission*/
if ( !empty ( $redirect ) ) {
          header("Location: $redirect?msg=1");
} else {
//          header("Location: view2.php");
        header('Location: view2.php?sr=' . $sr, TRUE, 303);
        exit();
}

mysqli_close($link);
?>
