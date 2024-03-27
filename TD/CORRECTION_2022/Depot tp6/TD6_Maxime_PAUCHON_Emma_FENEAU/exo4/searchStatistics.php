<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Chercher un joueur</title>
</head>
<body>
    <form action="showStatistics.php" method="post">
        <table>
            <tr>
                <td><label for="firstname">prenom</label></td>
                <td><input type="text" name="firstname" id="firstname"></td>
            </tr>
            <tr>
                <td><label for="name">nom</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>   
        </table>
        <input type="submit" value="Rechercher">
    </form>
</body>