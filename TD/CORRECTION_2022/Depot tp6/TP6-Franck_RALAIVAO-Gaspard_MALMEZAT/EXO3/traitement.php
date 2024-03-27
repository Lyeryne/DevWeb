<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pseudo = $_POST["pseudo"];
  $mdp = $_POST["mdp"];
  
    if ($pseudo == "Admin" && $mdp == "0000") {
        echo "Bonjour $pseudo";
    } else {
        header("Location: connexion.php");
        exit();
  }
}
?>