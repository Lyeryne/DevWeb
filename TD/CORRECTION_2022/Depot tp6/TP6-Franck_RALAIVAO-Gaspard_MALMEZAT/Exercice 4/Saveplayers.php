<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="UTF-8">
</head>
 <body>
 <?php

 $name = $_POST['name'];
 $firstname = $_POST['firstname'];
 $dateofbirth = $_POST['dateofbirth'];
 $position = $_POST['position'];

 $newplayerdata = $name . ';' . $firstname . ';' . $dateofbirth . ';' . $position . PHP_EOL;
 $file = fopen('infoJoueurs.Txt', 'a');
 fwrite($file, $newplayerdata);
 fclose($file);
 echo "Player added successfully.";
?>
<br><br>
<a href="addPlayer.php"> Return to the previous page</a>
 </body>
 </html>