<!DOCTYPE html>
<html>
<head>
	<title>Bonjour</title>
</head>
<body>
	<h2>Bonjour <?php echo $_POST["prenom"]." ".$_POST["nom"]; ?></h2>
	<!-- Affiche un message de salutation avec le prénom et le nom récupérés depuis le formulaire -->

	<?php
		$date_naissance = new DateTime($_POST["date_naissance"]);
		$aujourdhui = new DateTime();
		$age = $aujourdhui->diff($date_naissance)->y;
		// Calcule l'âge en soustrayant la date de naissance à la date d'aujourd'hui

		echo "<p>Vous avez ".$age." ans.</p>";
		// Affiche l'âge calculé
	?>
</body>
</html>
