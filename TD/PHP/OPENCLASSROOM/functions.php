<?php
function isValidRecipe(array $recipe): bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        return $recipe['is_enabled'];
    } else {
        return false;
    }
}

function getRecipes(array $recipes): array
{
    $valide_recipe = [];
    foreach ($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $valide_recipe[] = $recipe;
        }
    }


    return $valide_recipe;
}

function displayAuthor(string $authorEmail, array $users): string
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return '' . $user['full_name'] . ' (' . $user['age'] . ' ans)';
        }
    }
    return 'Auteur inconnu';
}
