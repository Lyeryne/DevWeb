<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $player = $_POST['player'];
    $goals = $_POST['goals'];
    $playingTime = $_POST['playingTime'];

    $data = "$player;$goals;$playingTime";

    $fileName = str_replace(' ', '', $player) . '.txt';
    $file = fopen($fileName, 'a');
    if ($file) {
        fwrite($file, $data . PHP_EOL);
        fclose($file);
        echo "Stats sauvegardes pour $player avec succes.";
    } else {
        echo "Impossible d'ouvrir $fileName file pour ecrire dedans.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Saugarder des stats</title>
</head>
<body>
    <h2>Sauvegarder des stats</h2>
    <a href="addStatistics.php">Retour a ajouter des stats</a>
</body>
</html>
