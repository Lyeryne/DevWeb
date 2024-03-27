<!DOCTYPE html>
<html>
<head>
	<title>Hello everyone</title>
	<style>
		td{
			border: 1px solid black; 
			width: 120px; 
			padding: 5px;
		};
	</style>
</head>
<body>

	<?php
	function CalculAge($DateDeNaissance){
		$DateDeNaissance= DateTime::createFromFormat('d/m/Y', $DateDeNaissance)->format('Y-m-d');
		$DateDeNaissance= new DateTime($DateDeNaissance);
		$DateCourante= new DateTime();
		return $DateCourante->diff($DateDeNaissance)->format('%y ans');

	}
	?>

	<h1>Hello everyone</h1>
	<p>Today is <?php echo date('l, F jS, Y'); ?>.</p>
	<p>The current time is <?php echo date('h:i:s A'); ?>.</p>
	<?php
		$joueurs= array(array("Nom"=>"Giroud","Prénom"=>"Olivier","Date"=>"30/09/1986","Poste"=>"Attaquant"),
		array("Nom"=>"Griezmann","Prénom"=>"Antoine","Date"=>"21/03/1991","Poste"=>"Attaquant"),
		array("Nom"=>"Mbappe","Prénom"=>"Kylian","Date"=>"20/11/1998","Poste"=>"Attaquant"),
		array("Nom"=>"Kante","Prénom"=>"N'Golo","Date"=>"28/03/1991","Poste"=>"Milieu"),
		array("Nom"=>"Umtiti","Prénom"=>"Samuel","Date"=>"14/09/1993","Poste"=>"Défense"),
		array("Nom"=>"Lloris","Prénom"=>"Hugo","Date"=>"26/12/1986","Poste"=>"Gardien"));

		echo"<table cellspacing='0' style='border: 1px solid black;'>";
		echo "<tr>
			<td>Nom</td>
			<td>Prénom</td>
			<td>date de naissance</td>
			<td>Poste</td>
			<td>Age</td>
			</tr>";
		foreach($joueurs as $element) {
			echo "<tr>";
			foreach($element as $value){
    			echo "<td>" . $value . "</td>";
			}
			echo "<td>" . CalculAge($element["Date"]) . "</td>";
    		echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>

