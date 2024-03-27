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
            $playerName=$_REQUEST["playerName"];
            $infoPlayersFile=fopen("players/".str_replace(";", "", $playerName).".txt", "a") or die("Unable to open file!");
            $goals=$_REQUEST["goals"];
            $playingTime=$_REQUEST["playingTime"];
            
            fwrite($infoPlayersFile, $playerName.";".$goals.";".$playingTime."min\n");
            fclose($infoPlayersFile);
            echo "Statistics were saved in: "."players/".str_replace(";", "", $playerName).".txt";
        }
    ?>
</body>
</html>