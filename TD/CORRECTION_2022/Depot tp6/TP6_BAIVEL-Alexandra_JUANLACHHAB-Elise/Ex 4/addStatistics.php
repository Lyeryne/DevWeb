<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$fichier=fopen("infoPlayers.txt","r");
			echo "<form action='saveStatistics.php' method='post'>";
			echo "<p>Joueur <select name='joueur'>";
			while(!feof($fichier)) {
				$ligne=fgets($fichier);
				$ligne_tab=explode(';',$ligne);
				echo "<option>${ligne_tab[1]} ${ligne_tab[0]}</option>";
			}
			echo "</select></p>";
			echo "<p>Nombre de buts <input name='nb_buts' type='text'></p>";
			echo "<p>Nombre de minutes jouées <input name='temps' type='text'></p>";
			echo "<input type='submit' value='Envoyer'>";
			echo "</form>";
			fclose($fichier);
		?>
	</body>
</html>
