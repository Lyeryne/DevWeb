<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$id=$_POST["id"];
			$mdp=$_POST['mdp'];
			$fichier=fopen("identifier.txt","r");
			$trouve=false;
			$profil_trouve="";
			while(!feof($fichier) && $trouve==false) {
				$ligne=explode(';',fgets($fichier));
				$id_ligne=$ligne[0];
				$mdp_ligne=$ligne[1];
				$profil=$ligne[2];
				if ($id == $id_ligne && $mdp == $mdp_ligne){
					$trouve=true;
					$profil_trouve=$profil;
				}
			}
			if ($trouve == true){
				if (strcmp(trim($profil_trouve),trim("entraineur"))==0){
					echo "<p><a href='addStatistics.php'>Ajouter des statistiques</a><br><a href='addPlayer.php'>Ajouter un joueur</a></p>";
				}else{
					header("Location: searchStatistics.php", true);
					exit();
				}
			}else{
				header("Location: connexion.php", true);
				exit();
			}
			fclose($fichier);
		?>
	</body>
</html>
