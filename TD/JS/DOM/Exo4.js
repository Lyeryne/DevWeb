/*
Écrire les codes JavaScript pour :
1. addRow () fonction qui ajoute une ligne dans la table "myTable".
2. deleteRow () fonction qui supprime une ligne de la table "myTable".
3. deleteAll () fonction qui supprime tous les éléments de la page actuelle.
4. addRows () fonction qui ajoute n lignes au lieu d’une ligne (le nombre de lignes n est donnée par l’utilisateur).

Note : pour supprimer un élément x, vous vous pouvez utiliser x.remove (), pour supprimer l'enfant i de l'élément x, vous pouvez utiliser : x.removeChild (x.childNodes[i]);
*/

const myTable = document.getElementById("myTable");
const addrow = document.querySelector("input[value='Add Row']");
const addrows = document.querySelector("input[value='Add rows']");
const deleterow = document.querySelector("input[value='delete row']");
const deleteall = document.querySelector("input[value='delete all']");
let i = 1;

function addRow() {
    i++;
    var test = myTable.innerHTML += `
    <tr> 

    <td> 
    PreNom${i}: <input type="text"></input>
    </td>
    
    <td> 
    Nom${i}: <input type="text"></input>
    </td>

    </tr>`;
}

function addRows() {
    var size = prompt("How much rows do you want to add : ");
    for (var j = 0; j < size; j++) {
        addRow();
    }
}

function deleteRow() {
    const rows = myTable.getElementsByTagName("tr");
    if (rows.length > 1) {
        i--;
        myTable.deleteRow(rows.length - 1);
    }
}

function deleteAll() {
    const rows = myTable.getElementsByTagName("tr");
    if (rows.length > 1) {
        for (var j = rows.length - 1; j > 0; j--) {
            //myTable.removeChild(rows[j]);
            myTable.deleteRow(j);
        }
    }
    i = 1;
}