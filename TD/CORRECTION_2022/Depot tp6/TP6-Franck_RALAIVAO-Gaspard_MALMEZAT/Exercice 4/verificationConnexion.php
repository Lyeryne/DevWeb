<?php
$identifier = $_POST['user'];
$password = $_POST['password'];
$file = fopen("identifier.txt", "r");
$is_connected = false;
$profile = "";
while(!feof($file)) {
$line = fgets($file);
$columns = explode(";", $line);
if(trim($columns[0]) == $identifier && trim($columns[1]) == $password) {
$is_connected = true;
$profile = trim($columns[2]);
break;
}
}
fclose($file);
if($is_connected) {
if($profile == "entraineur") {
	header("Location:coachmenu.php");
exit();
} else if($profile == "joueur") {
	header("Location: searchStatistics.php");
exit();
}
}
	header("Location: connexion.php");
exit();
?>
