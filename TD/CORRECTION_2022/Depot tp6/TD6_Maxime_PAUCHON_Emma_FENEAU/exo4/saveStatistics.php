<?php
if(isset($_POST['player']) && isset($_POST['goals']) && isset($_POST['time'])) {
		$player = $_POST['player'];
        $player = trim($player);
		$goals = $_POST['goals'];
		$playing_time = $_POST['time'];

        $file_name = $player.".txt";

        $file = fopen($file_name,"a");

        fwrite($file, $goals . ";" . $playing_time."min;\n");

		echo "Statistics added successfully!<br>";
		echo "<a href='addStatistics.php'>ajouter d'autres statistiques</a> <br><br>";
        echo "<a href='addPlayer.php'>ajouter d'autres joueurs</a>";
	} else {
		echo "Error: Please fill all the fields!";
	}
?>