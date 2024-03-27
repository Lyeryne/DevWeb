<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$prenom=$_POST["prenom"];
			$nom=$_POST['nom'];
			$naissance=$_POST['naissance'];
			$poste=$_POST['poste'];
			$fichier=fopen("infoPlayers.txt","a");
			$texte="$nom;$prenom;$naissance;$poste";
			fwrite($fichier,$texte);
			fclose($fichier);
		?>
		<a href="addPlayer.php">Retour</a>
	</body>
</html>

