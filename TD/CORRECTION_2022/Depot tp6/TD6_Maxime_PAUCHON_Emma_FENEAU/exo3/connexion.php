<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
<?php
session_start();
echo $_SESSION['error'];
session_destroy();
?>
    <form action="verification.php" method="post">
        <table>
            <tr>
                <td> <label for="username">Login</label> </td>
                <td> <input type="text" name="username" id="username"> </td>
            </tr>
            <tr>
                <td> <label for="password">Password</label> </td>
                <td> <input type="password" name="password" id="password"> </td>
            </tr>
        </table>
        <input type="submit" value="Connexion">
    </form>
</body>
</html>