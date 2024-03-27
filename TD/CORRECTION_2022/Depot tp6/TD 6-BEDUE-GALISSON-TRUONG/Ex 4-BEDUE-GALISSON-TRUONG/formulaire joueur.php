<!DOCTYPE html>
<html>
<head>
	<title>Ajouter quelqu'un dans l'équipe</title>
</head>
<body>
	<h1>Ajouter quelqu'un dans l'équipe</h1>
	<form action="save%20joueur.php" method="post">
		<!-- Champ pour saisir le nom de la personne à ajouter -->
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required><br>

		<!-- Champ pour saisir le prénom de la personne à ajouter -->
		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom" required><br>

		<!-- Champ pour saisir la date de naissance de la personne à ajouter -->
		<label for="date_naissance">Date de naissance :</label>
		<input type="date" name="date_naissance" id="date_naissance" required><br>

		<form action="" method="post">
		<!-- Sélection de la position de la personne à ajouter -->
		<label for="choix">Faites votre choix :</label>
		<select type="text" name="position" id="position" required>
			<option value="Attaquant">Attaquant</option>
			<option value="Mileu">Milieu</option>
			<option value="Defenseur">Défenseur</option>
			<option value="Gardien">Gardien</option>
			<option value="Coach">Coach</option>
		</select>
		<br>
		
		<!-- Bouton de soumission du formulaire pour ajouter la personne -->
		<input type="submit" value="Ajouter">
	</form>
	
	<!-- Bouton pour accéder à la page "Ajouter des statistiques" -->
    <td> 
        <form method="post" action="addStatistics.php">
            <input type="submit" value="Ajouter des stats">
        </form>
    </td>
	
	<!-- Bouton pour se déconnecter -->
	<td> 
        <form method="post" action="connexion.php">
            <input type="submit" value="Déconnexion ">
        </form>
    </td>
	
</body>
</html>
