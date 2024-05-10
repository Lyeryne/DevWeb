<!DOCTYPE html>
<html>

<head>
    <title>Ceci est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
</head>

<body>
    <h2>Page de test</h2>

    <p>
        Cette page contient du code HTML avec des balises PHP :<br />
        <?php echo "<p>- Comme cette balise \"p\" </p>";
        echo "- Cette ligne a été écrite \"uniquement\" en PHP. <br><br>";
        ?>
        Voici quelques petits tests :
    </p>

    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
    </ul>

    <div>
        <h3>ECHO DATE</h3>
        <p>Aujourd'hui nous somme le <?php echo date('d/m/Y h:m') ?></p>

        <h3>VARIABLES</h3>
        <?php
        $userAge = 7;
        $fullname = "Louaye";
        $trueOfalse = true;
        echo 'Bonjour ' . $fullname . ' <br/>';
        echo "$trueOfalse";
        ?>

        <h3>CONDITIONS</h3>
        <?php
        $isEnabled = false;

        if ($isEnabled === true) {
            echo "Vous êtes autorisé(e) à accéder au site ✅<br/>";
        } else {
            echo "Accès refusé ❌ <br/>";
        }
        ?>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php
        $isEnabled = true;
        $isOwner = true;

        if ($isEnabled && $isOwner) {
            echo 'Accès à la recette validé ✅<br/>';
        } else {
            echo 'Accès à la recette interdit ! ❌<br/>';
        }
        ?>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php $ya = false; ?>
        <?php if ($ya) : ?>
            <h2>YAAAAAA</h2>
        <?php endif; ?>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~ -->
        <?php
        $userAge = 24;

        $isAdult = ($userAge >= 18) ? true : false;

        // Ou mieux, dans ce cas précis
        $isAdult = ($userAge >= 18);
        ?>

        <h3>TABLEAUX</h3>
        <?php
        $user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];
        echo "$user1[0] <br/>"; // "Mickaël Andrieu"
        echo "$user1[1] <br/>"; // "email"
        echo "$user1[3]"; // 34
        ?>
        <?php

        $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
        $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
        $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

        $users = [$mickael, $mathieu, $laurene];

        echo "<h5>->Tab[i][j]</h5>
        {$users[1][1]} <br/> <br/>"; // "mathieu.nebra@exemple.com"
        ?>
        <h4>Boucle tab2tab</h4>
        <?php
        $users = [
            [
                'full_name' => 'Mickaël Andrieu',
                'email' => 'mickael.andrieu@exemple.com',
                'age' => 34,
            ],
            [
                'full_name' => 'Mathieu Nebra',
                'email' => 'mathieu.nebra@exemple.com',
                'age' => 34,
            ],
            [
                'full_name' => 'Laurène Castor',
                'email' => 'laurene.castor@exemple.com',
                'age' => 28,
            ],
        ];
        $lines = 3; // nombre d'utilisateurs dans le tableau
        $counter = 0;
        while ($counter < $lines) {
            echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />';
            $counter++;
        } ?>

        <h3>Affichez des recettes</h3>
        <h5>#1</h5>
        <?php
        $recipes1 = [
            ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
            ['Couscous', '[...]', 'pierre.andri@exemple.com', false,],
        ];
        ?>

        <ul>
            <?php for ($lines = 0; $lines <= 1; $lines++) : ?>
                <li><?php echo "{$recipes1[$lines][0]} ({$recipes1[$lines][2]}) "; ?></li>
            <?php endfor; ?>
        </ul>
        <h5>#2</h5>
        <?php
        $recipes2 = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => '',
                'author' => 'mathieu.nebra@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Salade Romaine',
                'recipe' => '',
                'author' => 'laurene.castor@exemple.com',
                'is_enabled' => false,
            ],
        ];
        ?>
        <?php foreach ($recipes2 as $recipe) {
            echo "<li>{$recipe['title']} contribué par : {$recipe['author']}</li>";
        }
        ?>
        <h5>#3</h5>
        <?php
        $recipe = [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
            'author' => 'laurene.castor@exemple.com',
        ];

        foreach ($recipe as $property => $propertyValue) {
            echo "[' . $property . '] vaut  {$propertyValue} <br/>";
        }
        ?>
        <h5>#4</h5>
        <?php
        print_r($recipe);
        ?>
        <h4>Recherchez dans un tableau</h4>

        <h5>#1</h5>
        <?php if (array_key_exists('title', $recipe)) {
            print_r($recipe);
        } ?>
        <h5>#2</h5>
        <?php
        $users = [
            'Mathieu Nebra',
            'Mickaël Andrieu',
            'Laurène Castor',
        ];

        if (in_array('Mathieu Nebra', $users)) {
            echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
        }

        if (in_array('Arlette Chabot', $users)) {
            echo 'Arlette fait bien partie des utilisateurs enregistrés !';
        } ?>

        <h5>#3</h5>
        <?php
        $users = [
            'Mathieu Nebra',
            'Mickaël Andrieu',
            'Laurène Castor',
        ];

        $positionMathieu = array_search('Mathieu Nebra', $users);
        echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;

        $positionLaurène = array_search('Laurène Castor', $users);
        echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL; ?>
    </div>

    <?php
    $users = [
        [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mickael.andrieu@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Mathieu Nebra',
            'email' => 'mathieu.nebra@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Laurène Castor',
            'email' => 'laurene.castor@exemple.com',
            'age' => 28,
        ],
    ];

    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => 'Etape 1 : de la semoule',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : prenez une belle salade',
            'author' => 'lorene.castor@exemple.com',
            'is_enabled' => true,
        ],
    ];

    function displayAuthor(string $authorEmail, array $users): string
    {
        //var_dump($authorEmail); die();
        foreach ($users as $user) {
            if ($authorEmail === $user['email']) {
                return $user['full_name'] . '(' . $user['age'] . ' ans)';
            }
        }
        return 'Auteur inconnu';
    }
    function isValidRecipe(array $recipe): bool
    {
        return $recipe['is_enabled'];
    }
    function getRecipes(array $recipes): array
    {
        $valid_recipes = [];
        foreach ($recipes as $recipe) {
            if (isValidRecipe($recipe)) {
                $valid_recipes[] = $recipe;
            }
        }
        return $valid_recipes;
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Recettes de cuisine : Erreur(</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1>Liste des recettes de cuisine</h1>
            <?php foreach (getRecipes($recipes) as $recipe) : ?>
                <article>
                    <h3><?php echo ($recipe['title']); ?></h3>
                    <div><?php echo ($recipe['recipe']); ?></div>
                    <i><?php echo (displayAuthor($recipe['author'], $users)); ?></i>
                </article>
            <?php endforeach ?>
        </div>
    </body>

    </html>
</body>

</html>