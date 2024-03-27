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
    $_SESSION["currentUsername"]="";
    $loginsArray = array(
        // [username, password]
        array("admin", "1234"),
        array("ethan", "0201"),
        array("robin", "1302")
    );

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_REQUEST["f_username"];
        $password=$_REQUEST["f_password"];
        
        foreach($loginsArray as $login){
            if($username==$login[0] && $password==$login[1]){
                $_SESSION["currentUsername"]=$login[0];
                header("Location: ./Accueil.php", true);
                exit();
            }
        }
        header("Location: ./Connexion.php", true);
        exit();
    }
?>
</body>
</html>