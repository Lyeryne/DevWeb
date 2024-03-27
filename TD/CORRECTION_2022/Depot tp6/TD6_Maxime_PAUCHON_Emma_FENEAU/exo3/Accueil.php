<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    session_start();
    echo "Bonjour ".$_SESSION['username']."!";
    session_destroy(); 
    ?>
</body>
</html>