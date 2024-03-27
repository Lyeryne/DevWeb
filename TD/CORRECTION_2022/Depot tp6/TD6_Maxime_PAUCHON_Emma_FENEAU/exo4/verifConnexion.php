<?php
session_start();
$joueur = 0;
$entraineur = 0;
$cpt = 0;
$erreur = 0;

$username = $_POST['identifier'];
$password = $_POST['password'];

$file = fopen("identifier.txt","r");

while(!feof($file)){
$line = fgets($file);
$data = explode(";",$line);

if ( $data[0] === $username && $data[1] === $password) {
    if(trim($data[2]) === "joueur"){
        $joueur++;  
    }
    else{
        $entraineur++;
    }

}
else{
   $erreur++; 
} 
$cpt++;
}


if($erreur === $cpt){
    header('Location: connexion.php');
    $_SESSION['error'] = 'Login ou mot de passe incorrect';
}
elseif($joueur === 1){
    header('Location: searchStatistics.php');
}
else{
    echo("<br><a href='addStatistics.php'>ajouter des statistiques</a>");
    echo("<br><a href='addPlayer.php'>ajouter un joueur</a>");
}
?>