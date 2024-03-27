<!DOCTYPE html>
<html>
<head>
    <title>verifconnexion</title>
</head>
<body>
    
    <?php
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    // Ouverture du fichier en mode lecture et écriture
    $file = fopen("identifier.txt", "r+");

    // Parcours des lignes du fichier
    while (!feof($file)) {
        $line = fgets($file);
        $values = explode(";", $line);
        $nom_file = isset($values[0]) ? trim($values[0]) : null;
        $mdp_file = isset($values[1]) ? trim($values[1]) : null;
        $position_file = isset($values[2]) ? trim($values[2]) : null;

        // Vérification des identifiants
        if (($nom_file == $nom) && ($mdp_file == $mdp)) {
            fclose($file);
            
            // Redirection en fonction de la position de l'utilisateur
            if ($position_file == "entraineur") {
                header("Location:coach.php");
            } else {
                header("Location:recherchestat.php");
            }
            exit();
        }
    }

    // Fermeture du fichier et redirection vers la page de connexion en cas d'échec
    fclose($file);
    header("Location:connexion.php");
    exit();
    ?>

</body>
</html>
