<?php
$players = array();

$file = fopen('infoJoueurs.txt', 'r');
if ($file) {
    while (($line = fgets($file)) !== false) {
        $playerData = explode(';', $line);
        $name = trim($playerData[0]);
        $firstName = trim($playerData[1]);
        $players[] = "$name $firstName";
    }
    fclose($file);
} else {
    echo "Impossible d'ouvrir le fichier infoJoueurs.txt .";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter des stats</title>
</head>
<body>
    <h2>Ajouter des stats</h2>
    <form action="saveStatistics.php" method="POST">
        <label for="player">Joueur:</label>
        <select name="player" id="player">
            <?php foreach ($players as $player): ?>
                <option value="<?php echo $player; ?>"><?php echo $player; ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="goals">Nombre de but:</label>
        <input type="text" name="goals" id="goals"><br>

        <label for="playingTime">Temps joue (en min):</label>
        <input type="text" name="playingTime" id="playingTime"><br>

        <input type="submit" value="Sauvegarder les stats">
    </form>
</body>
</html>
