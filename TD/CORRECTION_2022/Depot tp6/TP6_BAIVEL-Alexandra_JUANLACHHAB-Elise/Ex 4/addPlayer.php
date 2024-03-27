<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_exo1.css">
	</head>
	<body>
		<form action="SavePlayers.php" method="post">
			<p>Prenom <input name="prenom" type="text"></p>
			<p>Nom <input name="nom" type="text"></p>
			<p>Date de naissance <input max="2050-12-31" min="1900-12-31" name="naissance" type="date"></p>
			<p>Poste
				<select name="poste">
					<option value="attaquant">Attaquant</option>
					<option value="milieu">Milieu</option>
					<option value="defense">Défense</option>
					<option value="gardien">Gardien</option>
				</select>
			</p>
			<input type="submit" value="Envoyer">
		</form>
	</body>
</html>
