<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP6</title>
    <meta charset="UTF-8">
    <style>

        body{
            background-color:#d8d8d8;
        }

        div{
            text-align:center;
            margin-top: 50px;
            height:750px;
            width:1750px;
            margin-left:auto;
            margin-right:auto;
            border: black 2px solid;
            border-radius:10px;
        }

        a{
            text-decoration: none;
            color: #bc1d21;
            font-size:40px;
            border: solid 2px #bc1d21;
            padding:25px;
            margin:25px;
            
            position:relative;
        }
        a:hover{
            color: #2e1ebb;
            border: solid 2px #2e1ebb;
        }

        h1{
	        color:#363636;
            text-align:center;
            margin-top:30px;
            margin-bottom:100px;
            font-size:65px;
            font-family:Calibri;
        }

    </style>
</head>
<body>
    <div>
        <h1>MENU</h1>
        <a href="addStatistics.php">Add statistics to a player</a>
        <a href="addPlayer.php">Add a player</a>
    </div>
</body>
</html>