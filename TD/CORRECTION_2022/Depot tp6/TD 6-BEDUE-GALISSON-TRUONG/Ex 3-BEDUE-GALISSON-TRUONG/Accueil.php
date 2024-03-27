<!DOCTYPE html>
<html>
<body>
    <!-- Affichage d'une image -->
    <img src="full.gif" style="width:100%; height:100">

    <!-- Div avec du texte positionné absolument -->
    <div style="position:absolute;top:300px;left:300px;font:oblique 50px Arial, Helvetica, sans-serif;">
        <?php
        session_start();
        // Début de la session
        
        echo "Welcome in Hell" . " " . $_SESSION['username'] . "!";
        // Affiche un message de bienvenue avec le nom d'utilisateur récupéré de la session
        
        session_destroy();
        // Détruit la session
        ?>
    </div>
</body>
</html>
