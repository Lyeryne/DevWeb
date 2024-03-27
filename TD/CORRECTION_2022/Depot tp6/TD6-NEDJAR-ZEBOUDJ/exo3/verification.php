<?php
    session_start();

    $users=array("admin"=>"0000","user1"=>"1111","user2"=>"deux");
    
    
    if(isset($_POST["name"]) && isset($_POST["password"])){
        $username=$_POST["name"];
        $password=$_POST["password"];
        if( isset($users[$username]) && $users[$username] == $password){
            $_SESSION["username"]=$username;
            header('Location:accueil.php');
        }
        else{
            $_SESSION['error']= 1;
            header('Location:connexion.php');
        }
    }

?>