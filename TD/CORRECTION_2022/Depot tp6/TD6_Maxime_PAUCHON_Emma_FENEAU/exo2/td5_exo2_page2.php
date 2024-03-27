<?php

$now = time();
$birthStr = $_POST['date'];

if ($_POST) {
    if($_POST['firstname'] && $_POST['lastname'] != ''){
        echo "Bonjour " . $_POST['firstname'] . $_POST['lastname'] . ",<br>";
    }
    if ($_POST['date'] != '') {
        $Naissance = $_POST['date'];
        $today = date("Y/m/d");
        $diff = date_diff(date_create($Naissance), date_create($today));
        echo "Vous avez " . $diff->format("%y") . " ans";
       }
      
    }


?>

<!DOCTYPE html>
<html>
    <body>

    </body>
</html>
