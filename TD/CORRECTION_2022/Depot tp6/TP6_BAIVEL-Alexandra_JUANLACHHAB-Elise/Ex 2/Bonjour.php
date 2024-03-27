<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			echo "<p>Bonjour ${_POST['prenom']} ${_POST['nom']},</p>";
			$age=age($_POST["naissance"]);
			echo "<p>Vous avez ${age} ans.</p>";
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
