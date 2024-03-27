<!DOCTYPE html>
<html lang="fr">
<head>
    <title>ajout Statistiques</title>
</head>
<body>
    <form action="saveStatistics.php" method="post">
        <table>
            <tr>
                <td><label for="player">joueurs</label></td>
                <td><select name="player" id="player">
                    <?php
                        $file = fopen("infoJoueurs.txt", "r");
                        while(!feof($file)){
                            $line = fgets($file);
                            $data = explode(";", $line);
                            $prenom = $data[0];
                            $nom = $data[1];
                            echo "<option value='$prenom$nom'> $prenom $nom</option>";
                        }
                        fclose($file);
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="goals">buts</label></td>
                <td><input type="number" name="goals" id="goals"></td>
            </tr>   
            <tr>
                <td><label for="time">temps jouer (en min)</label></td>
                <td><input type="number" name="time" id="time"></td>
            </tr>
        </table>
        <input type="submit" value="ajouter">
    </form>
</body>
</html>