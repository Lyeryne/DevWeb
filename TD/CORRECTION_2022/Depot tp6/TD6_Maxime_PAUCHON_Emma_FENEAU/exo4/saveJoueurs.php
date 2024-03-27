<?php
if( isset($_POST['player']) && isset($_POST['name']) && isset($_POST['birth']) && isset($_POST['poste'])){
    $player = $_POST['player'];
    $name = $_POST['name'];
    $birth = date('d/m/Y',strtotime($_POST['birth']));
    $poste = $_POST['poste'];
    $file = fopen("infoJoueurs.txt", "a");
    fwrite($file, "\n$player;$name;$birth;$poste");
    fclose($file);
    echo "Player added successfully!<br>";
	echo "<a href='addPlayer.php'>ajouter un autre joueur</a> <br><br>";
    echo "<a href='addStatistics.php'>ajouter des statistiques</a>";
}

?>