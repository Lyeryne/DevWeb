<!DOCTYPE html>
<html>
<head>
	<title>Save Statistics</title>
</head>
<body>
<?php
    session_start();
    if(isset($_POST["but"]) && isset($_POST["temps"])){
        $but=$_POST["but"];
        $temps=$_POST["temps"];
        $joueur=$_POST["joueur"];

        $info=explode(" ",$joueur);
        $prenom= $info[0];
        $nom=$info[1];

        $fichiernom= "$prenom$nom.txt";
        $fichier=fopen($fichiernom,"a");
        fwrite($fichier,"$nom;$prenom;$but;$temps min\n");
        fclose($fichier);
        echo "Stats de ". $prenom. " ". $nom ." enregistrés .</br> <a href=\"addstatistics.php\">Ajouter d'autres stats</a>";
    }
    else{
        header('Location: addstatistics.php');        
    }
?>
</body>
</html>