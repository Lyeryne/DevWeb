<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
    </head>
    <body>
        <h1>Entrer un identifiant et un mdp</h1>
        <!-- Formulaire de connexion -->
        <form method="post" action="verificationConnexion.php">
        
            <table>
                <tr>
                    <td> Nom d'utilisateur : </td>
                    <td> <input type="text" name="nom" required> </td>
                </tr>
                <tr>
                    <td> Mot de passe : </td>
                    <td> <input type="text" name="mdp" required> </td>
                </tr>
            </table>
            
            <input type="submit">
        </form>
    </body>
</html>