<!DOCTYPE html>
<html lang="fr">
<head>
<title>TP6</title>
<meta charset="UTF-8">
</head>
<body>
<?php
echo "Hello everyone!<br>";
date_default_timezone_set('Europe/Paris');
echo date('l jS \of F Y H:i:s');
function ageCalculation($birth){
    $birthExplode = explode('/', $birth);
    $dateExplode = explode('/', date('d/m/Y'));
    if(($birthExplode[1] < $dateExplode[1]) || (($birthExplode[1] == $dateExplode[1]) && ($birthExplode[0] <= $dateExplode[0])))
        return ($dateExplode[2] - $birthExplode[2]);
    return ($dateExplode[2] - $birthExplode[2] - 1);
}

$person = array(
	array("Nom","Prénom","date de naissance","Poste"),
	array("Giroud","Olivier","30/09/1986", "Attaquant"),
	array("Griezmann","Antoine","21/03/1991","Attaquant"),
	array("Mbappe","Kylian","20/11/1998","Attaquant"),
	array("Kante","N'Golo","28/03/1991","Milieu"),
	array("Umtiti","Samuel","19/09/1993","Défense"),
	array("Lloris","Hugo","26/12/1986","Gardien")
);
$person[0][4]="Age";
for($i = 1; $i < 7; $i++){
	$person[$i][4]=ageCalculation($person[$i][2]);
}

echo "<table style=\"border-collapse:collapse\">" ;

for ($i = 0; $i < 7; $i++) {
	echo "<tr>";
	for ($j = 0; $j < 5; $j++) {
		echo "<td style=\"border: 1px black solid; width:120px; padding:5px\">".$person[$i][$j]."</td>";
	}
	echo "</tr>";
	}	
  	echo "</table>" ;
?>
</body>
</html>