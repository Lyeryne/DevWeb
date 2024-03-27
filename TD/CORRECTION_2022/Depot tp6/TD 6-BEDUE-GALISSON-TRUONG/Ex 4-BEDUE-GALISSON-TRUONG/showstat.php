<!DOCTYPE html>
<html>
<head>
    <title>show stat</title>
</head>
<body>
    <script>
        function rtn() {
            window.history.back(); // Fonction pour revenir à la page précédente
        }
    </script>

    <?php
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $test = 0;

    // Ouverture du fichier en mode lecture et écriture
    $file = fopen("infoJoueurs.txt", "r+");

    // Parcours des lignes du fichier
    while ((!feof($file)) && ($test != 1)) {
        $line = fgets($file);
        $values = explode(";", $line);
        $nom_file = isset($values[0]) ? trim($values[0]) : null;
        $prenom_file = isset($values[1]) ? trim($values[1]) : null;
        $DOB_file = isset($values[2]) ? trim($values[2]) : null;
        $position_file = isset($values[3]) ? trim($values[3]) : null;
        $buts_file = isset($values[4]) ? trim($values[4]) : null;
        $tempsjoue_file = isset($values[5]) ? trim($values[5]) : "0min";

        // Vérification des statistiques pour le joueur donné
        if (($nom_file == $nom) && ($prenom_file == $prenom)) {
            if ($buts_file == "") {
                echo $nom . " " . $prenom . " a joué pendant " . $tempsjoue_file . " et n'a marqué aucun but. <br>";
                $test = 1;
            } else {
                echo $nom . " " . $prenom . " a joué pendant " . $tempsjoue_file . " et a marqué " . $buts_file . " buts. <br>";
                $test = 1;
            }
        }
    }
    
    // Affichage d'un message si le joueur n'a pas été trouvé dans la base de données
    if ($test == 0) {
        echo $nom . " " . $prenom . " n'a pas été trouvé dans la base de données. ";
        exit();
    }
    
    fclose($file);
    ?>
    
    <p> Retour à la recherche des statistiques : </p>
    <button onclick="rtn()">Retourner</button>
</body>
</html>
