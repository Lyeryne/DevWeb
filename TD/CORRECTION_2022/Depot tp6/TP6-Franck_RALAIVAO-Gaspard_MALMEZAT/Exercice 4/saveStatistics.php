<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="UTF-8">
</head>
 <body>
 <?php

 $player = $_POST['player'];
 $goals = $_POST['goals'];
 $playingtime = $_POST['playingtime'];
$name = explode(";", $player)[0];
$firstname = explode(";", $player)[1];

$filename = $name . $firstname . ".txt";
$stats = $name . ";" . $firstname . ";" . $goals . ";" . $playingtime . "min" . PHP_EOL;
file_put_contents($filename, $stats, FILE_APPEND);

echo "Statistics added successfully.";

?>
<br><br>
<a href="addStatistics.php"> Return to the previous page</a>
 </body>
 </html>