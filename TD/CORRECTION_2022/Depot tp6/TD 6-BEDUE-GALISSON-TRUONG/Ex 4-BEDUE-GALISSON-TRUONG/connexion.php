<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
    </head>
    <body>
        <h1>Entrer un identifiant et un mot de passe</h1>
        <form method="post" action="verificationConnexion.php">
            <table>
                <tr>
                    <td> Nom d'utilisateur : </td>
                    <td> <input type="text" name="nom" required> </td> <!-- Champ pour saisir le nom d'utilisateur, requis -->
                </tr>
                <tr>
                    <td> Mot de passe : </td>
                    <td> <input type="text" name="mdp" required> </td> <!-- Champ pour saisir le mot de passe, requis -->
                </tr>
            </table>
            <input type="submit" value="Se connecter"> <!-- Bouton de soumission du formulaire pour se connecter -->
        </form>
    </body>
</html>
