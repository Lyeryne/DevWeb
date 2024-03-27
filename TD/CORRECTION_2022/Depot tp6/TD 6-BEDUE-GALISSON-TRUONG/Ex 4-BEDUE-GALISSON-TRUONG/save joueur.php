<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$position = $_POST['position'];

// Ouverture du fichier en mode lecture et écriture
$fichier = fopen('infoJoueurs.txt', 'r+');

// Vérification si le joueur existe déjà dans le fichier
while(!feof($fichier)) {
    $line = fgets($fichier);

    $values = explode(";", $line);
    $nom_fichier = isset($values[0]) ? trim($values[0]) : null;
    $prenom_fichier = isset($values[1]) ? trim($values[1]) : null;
    $date_naissance_fichier = isset($values[2]) ? trim($values[2]) : null;
    $position_fichier = isset($values[3]) ? trim($values[3]) : null;

    if ($nom_fichier === $nom && $prenom_fichier === $prenom && $date_naissance_fichier === $date_naissance && $position_fichier === $position) {
        echo "<p>Le joueur existe déjà dans le fichier.</p>";
        exit;
    }
} 

echo "<p>Le joueur a été ajouté avec succès.</p>";

// Ajout du joueur dans le fichier
$fichier = fopen('infoJoueurs.txt', 'a');
fwrite($fichier, $nom . ';' . $prenom . ';' . $date_naissance . ';' . $position . ";\n");
fclose($fichier);

// Affichage des informations des joueurs présents dans le fichier
$fichier = fopen('infoJoueurs.txt', 'r');
while(!feof($fichier)) {
    $line = fgets($fichier);

    $values = explode(";", $line);
    $nom = isset($values[0]) ? trim($values[0]) : null;
    $prenom = isset($values[1]) ? trim($values[1]) : null;
    $date_naissance = isset($values[2]) ? trim($values[2]) : null;
    $position = isset($values[3]) ? trim($values[3]) : null;
    $but = isset($values[4]) ? trim($values[4]) : null;
    $tjeu = isset($values[5]) ? trim($values[5]) : null;

    if ($nom !== null && $prenom !== null && $date_naissance !== null && $position !== null) {
        echo "<p>" . $prenom . " " . $nom . " est " . $position . " et est né le " . $date_naissance . ".</p> ";
        if ($but != "" && $tjeu != "") {
            echo "<p>\n Il/elle a joué $tjeu min et marqué $but buts durant la saison.<p>";
        }
    }
}
fclose($fichier);
?>

<!-- Les éléments HTML suivants ne sont pas commentés, ils semblent être du code pour des boutons et des formulaires -->
<td> 
    <form method="post" action="formulaire%20joueur.php">
        <input type="submit" value="Ajouter un autre joueur/coach ">
    </form>
</td>

<td> 
    <form method="post" action="addStatistics.php">
        <input type="submit" value="Ajouter des stats">
    </form>
</td>

<td> 
    <form method="post" action="connexion.php">
        <input type="submit" value="Déconnexion ">
    </form>
</td>
