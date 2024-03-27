<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$prenom=$_POST["prenom"];
			$nom=$_POST['nom'];
			if (file_exists("${nom}_${prenom}.txt")){
				$fichier=fopen("${nom}_${prenom}.txt","r");
				$ligne=explode(';',fgets($fichier));
				$prenom=$ligne[1];
				$nom=$ligne[0];
				$nb_buts=$ligne[2];
				$temps=$ligne[3];
				echo "<p>Nom : $nom <br> Prenom : $prenom <br> Nombre de buts : $nb_buts <br> Temps joué : $temps</p>";
				fclose($fichier);
			}else{
				echo "<p>Joueur non existant<br></p>";
			}
		?>
		<a href="searchStatistics.php">Retour</a>
	</body>
</html>
