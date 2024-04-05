/*1. En utilisant la fonction constructrice, définir un objet nomme Rectangular_ prism pouvant contenir 4 propriétés : nom (le nom cylindre), L (la longueur du prisme), W (la largeur du prisme) et H (la hauteur du prisme). */


function Rectangular_prism(nom, L, W, H) {
    this.nom = nom;
    this.L = L;
    this.W = W;
    this.H = H;


    this.volume = function () {
        return this.L * this.W * this.H;
    };
    this.display = function () {
        console.log(" Nom = " + this.nom + ", Longueur = " + this.L + "m, Largeur = " + this.W + "m, Hauteur = " + this.H + "m    => Volume = " + this.volume() + " m3");
    };
}

let prism = new Rectangular_prism("A", 5, 10, 20);

prism.display();


var stdt = {
    name: "David Rayy",
    sclass: "VI",
    rollno: 12
};



function objsize(student) {
    var size = 0;
    for (var key in student) {
        if (student.hasOwnProperty(key)) {
            size++;
        }
        else if (typeof student[key] === 'function') {
            studentbis = student[key];
            for (var keybis in studentbis) {
                size++;
            }
        }
    }
    return size;
}

console.log("Size = " + objsize(stdt));
