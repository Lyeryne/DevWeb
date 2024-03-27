<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$user=$_SESSION["user"];
			$mdp=$_SESSION["mdp"];
			$fichier=fopen("users","r");
			$contenu=fread($fichier,filesize("users"));
			$lignes=explode("\n",$contenu);
			$valide=false;
			for($i = 0; $i < count($lignes); $i++){
				$info=explode(" ",$lignes[$i]);
				if ($info[0] == $user && $info[1] == $mdp){
					$valide=true;
					break;
				}
			}
			if ($valide){
				validation_informations();
			}else{
				refus_informations();
			}
			fclose($fichier);
			function refus_informations(){
				echo "<script> location.href='Connexion.php'; </script>";
			}
			function validation_informations(){
				echo "<script> location.href='Accueil.php'; </script>";
			}
		?>
	</body>
</html>
