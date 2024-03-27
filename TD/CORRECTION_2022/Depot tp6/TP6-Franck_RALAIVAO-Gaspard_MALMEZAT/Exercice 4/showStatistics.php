<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="UTF-8">
</head>
 <body>
 <?php
if(isset($_POST['name']) && isset($_POST['firstname'])) {

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$filename = $name . $firstname . '.txt';

if(file_exists($filename)) {

   $file = fopen($filename, 'r');
   $content = fread($file, filesize($filename));
   fclose($file);

   echo "<h>$name $firstname statistics :</h>";
   echo "<pre>$content</pre>"; 

} else {

   echo "<h>Error : No player named $firstname $name found<h>";
}
}

?>
<br><br>
<a href="searchStatistics.php"> Return to the previous page</a>
 </body>
 </html>