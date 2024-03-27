<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP6</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo "Your username is: ".$_SESSION["currentUsername"];
    ?>
</body>
</html>