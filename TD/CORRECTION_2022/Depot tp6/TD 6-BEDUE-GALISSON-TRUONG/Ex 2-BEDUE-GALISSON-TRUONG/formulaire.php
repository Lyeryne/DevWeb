<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
	<h1>Formulaire</h1>

	<!-- Début du formulaire avec l'action "bonjour.php" qui traitera les données envoyées -->
	<form action="bonjour.php" method="post">
		<label for="nom">Quel est votre Nom ? </label>
		<input type="text" name="nom" id="nom" required><br>
		<!-- saisie du nom avec l'id "nom" et un attribut "required" pour le rendre obligatoire -->

		<label for="prenom">Quel est votre Prénom ? </label>
		<input type="text" name="prenom" id="prenom" required><br>
		<!-- saisie du prénom avec l'id "prenom" et un attribut "required" pour le rendre obligatoire -->

		<label for="date_naissance">Quel est votre Date de naissance ?</label>
		<input type="date" name="date_naissance" id="date_naissance" required><br>
		<!-- saisie de la date de naissance avec l'id "date_naissance" et un attribut "required" pour le rendre obligatoire -->

		<input type="submit" value="Envoyer">
		<!-- Bouton de soumission du formulaire -->

	</form>

</body>
</html>
