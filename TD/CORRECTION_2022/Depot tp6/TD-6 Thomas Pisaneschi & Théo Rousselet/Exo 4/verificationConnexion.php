<?php
$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen("identifier.txt", "r");

$loggedIn = false;
$profile = "";

while (($line = fgets($file)) !== false) {
    $line = trim($line);
    $record = explode(";", $line);
    
    $recordUsername = $record[0];
    $recordPassword = $record[1];
    $recordProfile = $record[2];
    
    if ($recordUsername === $username && $recordPassword === $password) {
        $loggedIn = true;
        $profile = $recordProfile;
        break;
    }
}

fclose($file);

if ($loggedIn) {
    // Redirect the user based on their profile
    if ($profile === "entraineur") {
        header("Location: addStatistics.php");
    } elseif ($profile === "joueur") {
        header("Location: searchStatistics.php");
    }
} else {
    echo "Nom d'utilisateur ou mot de passe incorrect. Merci de retourner a <a href=\"connexion.php\"> et reesayer. </a>.";
}
?>
