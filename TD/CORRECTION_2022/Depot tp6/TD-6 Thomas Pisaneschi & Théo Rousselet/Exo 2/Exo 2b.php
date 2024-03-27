<?php
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$dateNaissance = $_GET['birthday'];

function calculerAge($dateNaissance) {
    $dateActuelle = date('Y-m-d');
    $diff = date_diff(date_create($dateNaissance), date_create($dateActuelle));
    return $diff->format('%Y');
}

echo "Bonjour $prenom $nom ". <br>;
echo "Vous avez " .calculerAge($dateNaissance)."ans";
?>
