<!DOCTYPE html>
<html lang="fr">
<head>
    <title>ajout joueur</title>
</head>
<body>
    <form action="saveJoueurs.php" method="post">
        <table>
            <tr>
                <td><label for="player">prenom</label></td>
                <td><input type="text" name="player" id="player"></td>
            </tr>
            <tr>
                <td><label for="name">nom</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>   
            <tr>
                <td><label for="birth">date de naissance</label></td>
                <td><input type="date" name="birth" id="birth"></td>
            </tr>
            <tr>
                <td><label for="poste">poste</label></td>
                <td><input type="text" name="poste" id="poste"></td>
            </tr>
        </table>
        <input type="submit" value="ajouter">
    </form>
</body>
</html>

        
        
        
        