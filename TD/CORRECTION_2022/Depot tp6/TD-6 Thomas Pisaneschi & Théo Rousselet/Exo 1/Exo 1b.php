<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Joueurs</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Tableau des Joueurs</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Poste</th>
        </tr>
        <?php
        $joueurs = array(
            array("Giroud", "Olivier", "30/09/1986", "Attaquant"),
            array("Griezmann", "Antoine", "21/03/1991", "Attaquant"),
            array("Mbappe", "Kylian", "20/11/1998", "Attaquant"),
            array("Kante", "N'Golo", "28/03/1991", "Milieu"),
            array("Umtiti", "Samuel", "14/09/1993", "Défense"),
            array("Lloris", "Hugo", "26/12/1986", "Gardien")
        );

        foreach ($joueurs as $joueur) {
            echo "<tr>";
            echo "<td>" . $joueur[0] . "</td>";
            echo "<td>" . $joueur[1] . "</td>";
            echo "<td>" . $joueur[2] . "</td>";
            echo "<td>" . $joueur[3] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
