<!DOCTYPE html>
<html>
<head>
	<title>Exercice 4</title>
</head>
<body>

<?php
    session_start();
    if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["date"]) && isset($_POST["poste"])){
        $prenom=$_POST["prenom"];
        $nom=$_POST["nom"];
        $date=$_POST["date"];
        $poste=$_POST["poste"];
        $nouveaujoueur= $nom .";". $prenom .";". $date .";". $poste ."\n";

        $file = fopen("infojoueur.txt", "a");
        fwrite($file,$nouveaujoueur);
        fclose($file);
        echo $_POST["prenom"]. " ". $_POST["nom"]." enregistré .</br> <a href=\"addplayer.php\">Enregistrer un nouveau joueur</a>";
    }
    else{
        header('Location:addplayer.php');
    }

?>

</body>
</html>

