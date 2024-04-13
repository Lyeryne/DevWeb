//1.
/*
Écrire une fonction JavaScript min_majv1(str1) qui prend une chaîne des caractères en paramètre (ne contient que des caractères alphabétiques) et convertir la première lettre de chaque mot en majuscule et les autres lettres en minuscule.

Testez cela avec : console.log(min_majv1("wELCome pRenOm NoM"));
Résultat attendu : Welcome Prenom Nom


function min_majv1(str1) {
    var s = str1.split(" ");
    var changeWord = [""];

    for (var i = 0; i < s.length; i++) {
        for (var j = 0; j < s[i].length; j++) {
            if (s[i][0] !== s[i][0].toUpperCase()) {
                s[i] = s[i][0].toUpperCase() + s[i].substr(j + 1);
            }
            else if (s[i][j] !== s[i][j].toLowerCase() && j !== 0) {
                s[i] = s[i].substr(0, j) + s[i][j].toLowerCase() + s[i].substr(j + 1);
            }
            else {
                s[i] = s[i];
            }
        }
        changeWord += s[i] + " ";
    }
    return changeWord;
}

console.log(min_majv1("wELCome pRenOm NoM"));
*/

//2.
/*
Écrire une fonction JavaScript min_majv2(str1) qui prend une chaîne des caractères avec des lettres minuscules et majuscules en tant que paramètre, et convertit les lettres majuscules en minuscules et les minuscules en majuscules.

Testez cela avec : console.log(min_majv2("wELCome pRenOm NoM "));
Résultat attendu : WelcOME PrENoM nOm

function min_majv2(str1) {
    var s = str1.split(" ");
    var changeWord = "";

    for (var i = 0; i < s.length; i++) {
        for (var j = 0; j < s[i].length; j++) {
            if (s[i][j] === s[i][j].toUpperCase()) {
                s[i] = s[i].substr(0, j) + s[i][j].toLowerCase() + s[i].substr(j + 1);
            }
            else {
                s[i] = s[i].substr(0, j) + s[i][j].toUpperCase() + s[i].substr(j + 1);
            }
        }
        changeWord += s[i] + " ";
    }
    return changeWord;
}

console.log(min_majv2("wELCome pRenOm NoM"));
*/

//3.
/*
Écrire une fonction JavaScript freqvoyelles(str1) qui prend une chaîne des caractères en paramètre (ne contient que des caractères alphabétiques) et qui indique combien de fois sont présentes chacune des voyelles a, e, i, o, u ou y, que celles-ci soient écrites en majuscules ou en minuscules.

Testez cela avec le code suivant :

var voyelles =freqvoyelles("AAEEee iiIIAA YY uY Naya");
for(var lettr in voyelles ){
    var value = voyelles [lettr];
    document.write(lettr + " = " + value + '<br>');
}

Résultat attendu : a = 6; o = 0; e = 4; i = 4; u = 1; y = 4


function freqvoyelles(str1) {
    str1 = str1.toLowerCase();

    var frequencies = {
        'a': 0,
        'e': 0,
        'i': 0,
        'o': 0,
        'u': 0,
        'y': 0
    }

    for (var i = 0; i < str1.length; i++) {
        var char = str1.charAt(i);
        if ('aeiouy'.indexOf(char) !== -1) {
            frequencies[char]++;
        }
    }
    return frequencies;
}

var voyelles = freqvoyelles("AAEEee iiIIAA YY uY Naya");
for (var lettr in voyelles) {
    var value = voyelles[lettr];
    console.log(lettr + " = " + value);
}
*/

