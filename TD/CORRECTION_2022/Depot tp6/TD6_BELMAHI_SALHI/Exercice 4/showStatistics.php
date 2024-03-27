<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP6</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $lastName=$_REQUEST["lastName"];
        $firstName=$_REQUEST["firstName"];
        if (file_exists("players/".$lastName.$firstName.".txt")){
            $infoPlayersFile=fopen("players/".$lastName.$firstName.".txt", "r") or die("Unable to open file !");
            while(!feof($infoPlayersFile)){ 
                echo fgets($infoPlayersFile)."<br>";
            }
            
            fclose($infoPlayersFile);
        } else {
            echo "The player ".$firstName." ".$lastName." doesn't exist<br>";
        }
    }
?>
<button onclick="history.back();">Go back</button>

</body>
</html>