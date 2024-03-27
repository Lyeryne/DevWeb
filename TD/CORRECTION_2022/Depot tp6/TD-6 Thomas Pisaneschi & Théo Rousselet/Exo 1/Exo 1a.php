<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Hello everyone</h1>
    <p>Date et heure a Paris: <?php
        date_default_timezone_set('Europe/Paris');
        echo date('Y-m-d H:i:s');
    ?></p>
</body>
</html>
