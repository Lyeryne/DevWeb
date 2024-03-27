<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP6</title>
    <meta charset="UTF-8">
</head>
<body>
<?php

    function ageCalcul($birthDate){
        if(empty($birthDate))
            return "xx";
        $birthExplode = explode('-', $birthDate);
        $dateExplode = explode('/', date('Y/m/d'));
        if(($birthExplode[1] < $dateExplode[1]) || (($birthExplode[1] == $dateExplode[1]) && ($birthExplode[2] <= $dateExplode[2])))
            return ($dateExplode[0] - $birthExplode[0]);
        return ($dateExplode[0] - $birthExplode[0] - 1);
    }

    $firstName="x";
    $lastName="x";
    $age="xx";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstName=$_REQUEST["f_firstName"];
        if(empty($firstName))
            $firstName="x";
        $lastName=$_REQUEST["f_lastName"];
        if(empty($lastName))
            $lastName="x";
        $birthDate=$_REQUEST["f_birthDate"];
    }
    echo "Bonjour ".$firstName." ".$lastName.",<br>\t Vous avez ".ageCalcul($birthDate)." ans.";
    ?>
</body>
</html>