/*
Écrire une fonction JavaScript qui accepte une chaîne des caractères en tant que paramètre et recherche le mot le plus court dans la chaîne et sa position.
Exemple : « Mon premier cours commence demain »
Résultat attendu : Mot : « Mon » et Position : 1
*/

var tab = 'Mon premier cours commence demain';

function shortWord(words) {
    var cut = words.split(' ');

    var shortWord = cut[0];
    var pos = 1;

    for (var i = 1; i < words.length; i++) {
        if (words[i].length < shortWord.length) {
            shortWord = cut[i];
            pos = i + 1;
        }
    }

    return { mot: shortWord, position: pos };

}

var res = shortWord(tab);

console.log("Mot :", res.mot, "et Position :", res.position);

