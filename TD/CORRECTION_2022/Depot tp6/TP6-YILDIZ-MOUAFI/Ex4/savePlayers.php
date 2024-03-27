<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP6</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $lastName=$_REQUEST["lastName"];
            $firstName=$_REQUEST["firstName"];
            $birthDateExplode = explode('-', $_REQUEST["birthDate"]);
            if(sizeof($birthDateExplode)<3){
                $birthDate="//";
            }
            else{
                $birthDate=$birthDateExplode[2]."/".$birthDateExplode[1]."/".$birthDateExplode[0];
            }
            $position=$_REQUEST["position"];

            $infoPlayersFile=fopen("infoPlayers.txt", "a") or die("Unable to open file!");
            fwrite($infoPlayersFile, $lastName . ";" . $firstName . ";" . $birthDate . ";" . $position . "\n");
            fclose($infoPlayersFile);
        }
    ?>
    <button onclick="history.back();">Go back</button>
</body>
</html>