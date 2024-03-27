<!DOCTYPE html>
<html>
<head>
    <title>recherche statisques</title>
</head>
<body>
    <h1>Entrer le nom et prenom du joueur/coach pour chercher les stats</h1>

    <!-- Formulaire pour la recherche de statistiques -->
    <form method="post" action="./showstat.php">
        <table>
            <tr>
                <td> Nom du joueur : </td>
                <td> <input type="text" name="nom" required> </td>
            </tr>
            <tr>
                <td> Prenom du joueur : </td>
                <td> <input type="text" name="prenom" required> </td>
            </tr>
        </table>
        <input type="submit">
    </form>

    <!-- Bouton de déconnexion -->
    <td> 
        <form method="post" action="connexion.php">
            <input type="submit" value="Déconnexion ">
        </form>
    </td>
</body>
</html>
