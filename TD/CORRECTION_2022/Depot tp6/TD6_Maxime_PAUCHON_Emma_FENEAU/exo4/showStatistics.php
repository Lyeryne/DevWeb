<?php
$name = $_POST["name"];
$firstname = $_POST["firstname"];
$player = "$firstname$name"; 

$file_name = $player.".txt";
if(file_exists($file_name)){
    $file = fopen("$file_name","r");
    $contents = fread($file, filesize($file_name));
    fclose($file);
    $data = explode(";",$contents);
    echo("goal: $data[0]");
    echo("<br>");
    echo("temps de jeu: $data[1]");
}
else{
    echo("ce joueur n'existe pas dans la base de données");
}
echo("<br><a href='searchStatistics.php'>revenir en arriere</a>");

?>