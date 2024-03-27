<!DOCTYPE html>
<html>
<body>
<?php 

    // Récupération des données envoyées par le formulaire
    $uti = $_POST["utilisateur"];
    $pass = $_POST["password"];

    // Ouverture du fichier contenant les identifiants
    $myfile = fopen("listetelogin.txt","r") or die ("Unable to open file!");

    // Parcours du fichier ligne par ligne
    while(!feof($myfile)){
        // Lecture d'une ligne contenant un identifiant et un mot de passe
        $lignepassword = fgets($myfile);
        
        // Séparation de l'identifiant et du mot de passe
        $tabident = explode(" ",$lignepassword);
        $utitab = isset($tabident[0]) ? trim($tabident[0]) : null;
        $passtab = isset($tabident[1]) ? trim($tabident[1]) : null;

        // Vérification de l'identifiant et du mot de passe
        if (($utitab == $uti) && ($passtab == $pass)){
            fclose($myfile);
            // Appel de la fonction Information pour rediriger vers la page d'accueil
            Information();
        }
    }

    fclose($myfile);

    // Si les identifiants sont incorrects, appel de la fonction Refus_Information pour rediriger vers la page de connexion
    Refus_Information();

    // Fonction pour rediriger vers la page de connexion en cas de refus
    function Refus_Information() {
        header("Location: Connexion.php");
        exit();
    }

    // Fonction pour stocker les informations dans une session et rediriger vers la page d'accueil
    function Information() {
        session_start();
        
        $_SESSION['username'] = $_POST["utilisateur"];
        $_SESSION['password'] = $_POST["password"];
        
        header("Location: Accueil.php");
        exit();
    }
    
?>
</body>
</html>
