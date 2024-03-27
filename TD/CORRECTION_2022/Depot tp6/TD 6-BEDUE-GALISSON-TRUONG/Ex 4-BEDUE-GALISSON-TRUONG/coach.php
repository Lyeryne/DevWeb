<!DOCTYPE html>
<html>
<head>
	<title>Coach</title>
</head>
<body>
<table>
    <h1>Soyez maître de votre équipe</h1>
    <tr>
        <td> Ajouter des statistiques : </td>
        <td> 
            <form method="post" action="addStatistics.php">
                <input type="submit" value="Ajouter des statistiques"> <!-- Bouton pour ajouter des statistiques -->
            </form>
        </td>
    </tr>
    <tr>
        <td> Ajouter un joueur : </td>
        <td> 
            <form method="post" action="formulaire%20joueur.php">
                <input type="submit" value="Ajouter un joueur"> <!-- Bouton pour ajouter un joueur -->
            </form>
        </td>
    </tr>
    <td> 
        <form method="post" action="connexion.php">
            <input type="submit" value="Déconnexion"> <!-- Bouton pour se déconnecter -->
        </form>
    </td>
</table>

</body>
</html>
