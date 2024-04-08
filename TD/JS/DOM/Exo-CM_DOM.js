//Exercice 1 ----------------------------
//1.
/*
Ecrivez un programme JavaScript pour obtenir la date
actuelle dans le format suivant: Jour/mois /année Exemple:
06/12/2021.

var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var year = date.getFullYear();
console.log("" + day + "/" + month + "/" + year + "");
*/

//2.
/*
Ecrivez un programme JavaScript pour obtenir la date
actuelle dans le format suivant: jour de la semaine, date du
mois, année : Exemple Lundi 06 December 2021.

var day = date.getDay();
var day1 = date.getDate();
var month = date.getMonth();
var year = date.getFullYear();

var days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "friday", "Saturday");

var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "Octobre", "November", "December");

console.log("" + days[day] + " " + day1 + " " + months[month] + " " + year + " ");
*/

//3.
/*
Ecrivez un programme JavaScript pour obtenir l’heure
actuelle dans le format suivant heure: minute

var hour = date.getHours();
var minute = date.getMinutes();
console.log(hour + "h" + minute);
*/

//Exercice 2 ----------------------------
/*
Créez la fonction constructeur pour un objet Cercle. La fonction
doit ajouter deux méthode sur l'objet pour calculer la
circonférence et l'aire.
*/

function circle(n, r) {
    this.r = r;
    this.name = n;
    this.getCircumference = function () {
        return Math.PI * this.r * 2;
    }
    this.getAir = function () {
        return Math.PI * Math.pow(this.r, 2);
    }
}

var c = new circle("Circle", 5);
console.log(c.name + " aire : " + c.getAir());
console.log(c.name + " circonference : " + c.getCircumference());