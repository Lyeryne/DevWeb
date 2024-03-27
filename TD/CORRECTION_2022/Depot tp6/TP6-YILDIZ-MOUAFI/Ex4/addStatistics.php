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
    <form method="post" action="saveStatistics.php">
        <select name="playerName">
        <?php
            $infoPlayersFile=fopen("infoPlayers.txt", "r") or die("Unable to open file!");
            while(!feof($infoPlayersFile)){
                $player=explode(";", fgets($infoPlayersFile));
                $playerName=$player[0]." ".$player[1];
                if($playerName!=" "){
                    echo "<option value=".$player[0].";".$player[1].">".$playerName."</option>";
                }
            }
            fclose($infoPlayersFile);
        ?>
        </select>
        <p>Goals : <input name="goals" type="number" min="0"></p>
        <p>Playing time : <input name="playingTime" type="number" min="0"></p>
        <input type="submit">
    </form>
</body>
</html>