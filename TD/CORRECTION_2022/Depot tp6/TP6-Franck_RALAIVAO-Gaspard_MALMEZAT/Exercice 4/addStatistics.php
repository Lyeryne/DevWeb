<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="UTF-8">
</head>
 <body>
   <table>
   <form action="saveStatistics.php" method="post">
<h>Add statistics</h>
<tr>
    <tr>
<td><label for="player">Player :</label></td>
<td><select name="player" id="player">
<?php
$lines = file("infoJoueurs.txt");
foreach ($lines as $line) {

   $name = explode(";", $line)[0];
   $firstname = explode(";", $line)[1];

   echo "<option value='$name;$firstname'>$name $firstname</option>";
   }   
?>
</select></td>
</tr>
<tr>
<td><label for="goals">Number of goals :</label></td>
<td><input type="number" name="goals" id="goals" required></td>
</tr>
<tr>
<td><label for="playingtime">Playing time (in min) :</label></td>
<td><input type="number" name="playingtime" id="playingtime" required></td>
</tr>
<tr>
<td><input type="submit" value="Save statistics"></td>
</tr>
</form>
 </body>
 </html>