<?php
if (isset($_POST['name']) && isset($_POST['firstName'])) {
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    
    $fileName = $firstName . $name . '.txt';
    if (file_exists($fileName)) {
        $content = file_get_contents($fileName);
        echo "<h2>Stats joueur : $firstName $name</h2>";
        echo "<pre>$content</pre>";
    } else {
        echo "<h2>Erreur</h2>";
        echo "<p>Pas de stats trouvee pour $firstName $name.</p>";
    }
} else {
    echo "<h2>Erreur</h2>";
    echo "<p>Pas d'info sur le joueur.</p>";
}
?>
<a href="searchStatistics.php">Retour a la recherche</a>
