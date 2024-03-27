<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$joueur=explode(' ',$_POST["joueur"]);
			$prenom=$joueur[0];
			$nom=$joueur[1];
			$nb_buts=$_POST['nb_buts'];
			$temps=$_POST['temps'];
			$fichier=fopen("${nom}_${prenom}.txt","w+");
			$texte="$nom;$prenom;$nb_buts;$temps";
			fwrite($fichier,$texte);
			fclose($fichier);
		?>
		<a href="addStatistics.php">Retour</a>
	</body>
</html>
