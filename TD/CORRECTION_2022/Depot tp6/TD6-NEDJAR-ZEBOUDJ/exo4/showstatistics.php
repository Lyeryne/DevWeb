<!DOCTYPE html>
<html>
<head>
	<title>Show Statistics</title>
    <style>
        td{
			padding: 5px;
            font-size:20px;
		};
    </style>
</head>
<body>
    <?php
        session_start();
        if(isset($_POST["nom"]) && isset($_POST["prenom"])){
            $nom= $_POST["nom"];
            $prenom= $_POST["prenom"];
            $nomfichier="$prenom$nom.txt";
            if(file_exists($nomfichier)){
                $fichier=fopen($nomfichier,"r");
                echo "<h1> Statistiques du joueur $prenom $nom </h1>";
                echo "<table> <tr> <td> Nombre de but </td> <td>Temps de jeu </td> </tr>";
                while (($ligne = fgets($fichier)) !== false) {
                    $info = explode(";", $ligne);
                    $stat1 = $info[2];
                    $stat2 = $info[3];
                    echo "<tr> <td>$stat1</td> <td> $stat2</td></tr>";
                }
                echo "</table> </br>";
                fclose($fichier);
            }
            else{
                echo "<h1>ERREUR</h1>";
                echo "<p>$prenom $nom n'a pas de statistiques enregistrées</p> ";
            }
        }
    ?>
    <a href="searchstatistics.php">Retour aux recherches</a>
</body>
</html>