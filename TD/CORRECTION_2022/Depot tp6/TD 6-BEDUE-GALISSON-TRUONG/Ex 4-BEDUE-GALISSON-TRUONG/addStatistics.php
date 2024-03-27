<!DOCTYPE html>
<html>

<body>
	<h1>Ajout des statistiques</h1>
	<form method="post" action="saveStatistics.php">
		<label for="Personnes">Personnes:</label>
		<select id="Personnes" name="Personnes">
			<?php
				$Personnes = array(); // Tableau pour stocker les informations sur les joueurs
				$file = fopen("infoJoueurs.txt", "r"); // Ouverture du fichier "infoJoueurs.txt" en mode lecture
				while (($line = fgets($file)) !== false) {
				    $truc = explode(";", $line); // Sépare les informations de chaque joueur
				    $Personnes[$truc[1] . " " . $truc[0]] = $truc[1] . ";" . $truc[0]; // Ajoute les informations au tableau avec le format "prenom nom" => "nom;prenom"
				}
				fclose($file); // Fermeture du fichier

				foreach ($Personnes as $nom => $info) {
				    echo "<option value='" . $info . "'>" . $nom . "</option>"; // Affiche les options du menu déroulant avec le nom complet du joueur
				}
			?>
		</select>
		<br>
		<label for="but">Nombre de buts:</label>
		<input type="number" id="but" name="but" required> <!-- Champ pour entrer le nombre de buts -->
		<br>
		<label for="temps">Temps de jeu (min):</label>
		<input type="number" id="temps" name="temps" required> <!-- Champ pour entrer le temps de jeu en minutes -->
		<br>
		<input type="submit" value="Ajouter"> <!-- Bouton pour soumettre le formulaire -->
	</form>

	<td> 
        <form method="post" action="formulaire%20joueur.php">
            <input type="submit" value="Ajouter un autre joueur/coach "> <!-- Bouton pour ajouter un autre joueur/coach -->
        </form>
    </td>

	<td> 
        <form method="post" action="connexion.php">
            <input type="submit" value="Déconnexion "> <!-- Bouton pour se déconnecter -->
        </form>
    </td>

</body>
</html>
