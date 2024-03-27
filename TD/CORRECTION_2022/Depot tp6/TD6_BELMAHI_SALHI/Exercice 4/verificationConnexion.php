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

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_REQUEST["f_username"];
        $password=$_REQUEST["f_password"];
        
        $identifiersFile=fopen("identifier.txt", "r");
        while(!feof($identifiersFile)){
            $login=explode(";", rtrim(fgets($identifiersFile), "\n\r")); // We use rtrim because a "\n" was added at the end of the last element of the array (in the login array)
            if($username==$login[0] && $password==$login[1]){
                $_SESSION["currentUsername"]=$login[0];
                
                if($login[2] == "joueur"){
                    header("Location: ./searchStatistics.php", true);
                    exit();
                }elseif($login[2] == "entraineur"){
                    header("Location: ./menu.php", true);
                    exit();
                }
            }
        }
        fclose($identifiersFile);
        header("Location: ./connexion.php", true);
        exit();
    }
?>
</body>
</html>