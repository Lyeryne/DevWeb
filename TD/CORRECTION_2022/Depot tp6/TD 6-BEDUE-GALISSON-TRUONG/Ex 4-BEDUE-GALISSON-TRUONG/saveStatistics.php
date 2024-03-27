<!DOCTYPE html>
<html>
<body>

<?php

    // Récupération des données du formulaire
    $Personnes = $_POST["Personnes"];
    $but = $_POST["but"];
    $temps = $_POST["temps"];

    // Vérification si les données sont présentes
    if ($Personnes && $but && $temps) {
        // Extraction du nom et du prénom à partir de la chaîne "Personnes"
        list($nom, $prenom) = explode(";", $Personnes);
        $nomfichier = "$nom $prenom.txt";

        // Ouverture du fichier en mode "append" (ajout à la fin)
        $fichier = fopen($nomfichier, "a");

        // Écriture des données dans le fichier
        fwrite($fichier, "$but;$temps\n");

        // Fermeture du fichier
        fclose($fichier);

        // Réouverture du fichier en mode "lecture et écriture"
        $fichier = fopen($nomfichier, "r+");

        $butt = 0;
        $nmint = 0;

        // Positionnement du curseur au début du fichier
        fseek($fichier, 0, SEEK_SET);

        // Lecture des lignes du fichier
        while (!feof($fichier)) {
            $line = fgets($fichier);
            $values = explode(";", $line);
            $but = isset($values[0]) ? trim($values[0]) : null;
            $nmin = isset($values[1]) ? trim($values[1]) : null;
            echo "$but";
            $butt = $butt + intval($but);
            $nmint = $nmint + intval($nmin);
        }

        // Fermeture du fichier
        fclose($fichier);

        // Ouverture du fichier 'infoJoueurs.txt' en mode "lecture et écriture"
        $fichier = fopen('infoJoueurs.txt', 'r+');

        // Positionnement du curseur au début du fichier
        fseek($fichier, 0, SEEK_SET);
        $pos = 0;

        // Parcours des lignes du fichier
        while (!feof($fichier)) {
            $pos = ftell($fichier);
            $line = fgets($fichier);
            $values = explode(";", $line);
            $nom_fichier = isset($values[0]) ? trim($values[0]) : null;
            $prenom_fichier = isset($values[1]) ? trim($values[1]) : null;

            if ($nom_fichier == $prenom && $prenom_fichier == $nom) {
                // Positionnement du curseur à la position de la ligne
                fseek($fichier, $pos, SEEK_SET);
                $verifc = 'c';
                $temp = 0;

                // Lecture des caractères jusqu'à la fin de la ligne
                while (4 != $temp) {
                    $verifc = fgetc($fichier);
                    if ($verifc == "\n") {
                        echo "Il y a eu une erreur.";
                        exit;
                    }
                    if ($verifc == ";") {
                        $temp++;
                    }
                }

                // Écriture des statistiques dans le fichier
                fwrite($fichier, $butt . ';' . $nmint . "min;\n");
            }
        }

        // Redirection vers le fichier de statistiques
        header("Location: $nom $prenom.txt");
        exit;
    } else {
        echo "Il y a eu une erreur.";
    }

?> 

</body>
</html>
