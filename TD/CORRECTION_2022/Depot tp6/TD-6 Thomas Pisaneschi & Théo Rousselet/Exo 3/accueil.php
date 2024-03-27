<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: connexion.php');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h2>Bonjour, <?php echo $username; ?>!</h2>
</body>
</html>