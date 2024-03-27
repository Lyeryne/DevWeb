<!DOCTYPE html>
<html>
	<head>
		<style>
			td{
				border:2px solid black;
				padding:5px;
				width: 1%;
			}
		</style>
	</head>
	<body>
		<?php
			echo "Hello everyone<br>";
			echo date("d/m/Y H:i:s");
			$nom = array("Giroud","Griezmann","Mbappe","Kante","Umtiti","Lloris");
			$prenom = array("Olivier","Antoine","Kylian","N'Golo","Samuel","Hugo");
			$naissance = array("30/09/1986","21/03/1991","20/11/1998","28/03/1991","14/09/1993","26/12/1986");
			$poste = array("Attaquant","Attaquant","Attaquant","Milieu","Défense","Gardien");
			echo "<table style=\"width:60%;border:2px solid black;border-collapse: collapse;\">";
			echo "<tr><td>Nom</td><td>Prenom</td><td>Date de naissance</td><td>Poste</td><td>Age</td></tr>";
			for ($i=0;$i<6;$i++){
				$age_joueur=age($naissance[$i]);
				echo "<tr><td>${nom[$i]}</td><td>${prenom[$i]}</td><td>${naissance[$i]}</td><td>${poste[$i]}</td><td>$age_joueur</td></tr>";
			}
			echo "</table>";
			function age($date){
				$auj=array(date("d"),date("m"),date("Y"));
				$liste_date=explode('/',$date);
				$age=0;
				if ($auj[1]>$liste_date[1]){
					$age=$auj[2]-$liste_date[2];
				}elseif ($auj[1]<$liste_date[1]){
					$age=$auj[2]-$liste_date[2]-1;
				}else{
					if ($auj[0]>=$liste_date[0]){
					$age=$auj[2]-$liste_date[2];
					}else{
						$age=$auj[2]-$liste_date[2]-1;
					}
				}
				return $age;
			}
		?>
	</body>
</html>
