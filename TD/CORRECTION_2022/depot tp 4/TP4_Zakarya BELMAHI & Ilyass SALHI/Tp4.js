function attente() {
	//Traitement
    document.getElementById("Disparition").innerHTML ="le paragraphe va disparaitre";
    document.getElementById("Disparition").style.color = "red";
	const chrono=setTimeout(fonctionAExecuter, 2000); //On attend 2 secondes avant d'exécuter la fonction
}
function fonctionAExecuter()  {
    document.getElementById("Disparition").style.display = "none"; 
}

function Fibonacci(x, one, two) { // 
	if (x < 2) {
		return x - 1;
	} else if (x == 2) {
		return two;
	} else {
		return Fibonacci(x - 1, two, one + two );
	}
}

function test1() {
	var x = prompt("Saisir un entier.");
	var d = new Date();
	var r = " " + Fibonacci(x,0,2);
	document.getElementById("r").innerHTML = "A " + d.getHours() + " heures " + d.getMinutes() + ", le " + x  +" ème terme de la suite de Fibonacci est <b>" + r; 
}

function aleatoire(min, max) {
return Math.floor(Math.random() * (max- min + 1)) + min;
}

var nb = [];
var nb1;

function bouton(){
    for (i=0; i<11; i++){
        nb1 = aleatoire(1, 99);
        nb.push(nb1);
    }
    document.getElementById("tableau").innerHTML = "tableau : " + nb[0] + " " + nb[1] + " " + nb[2] + " " + nb[3] + " " + nb[4] + " " + nb[5] + " " + nb[6] + " " + nb[7] + " " + nb[8] + " " + nb[9];
    nb.sort()
    document.getElementById("tri").innerHTML = "tableau : " + nb[0] + " " + nb[1] + " " + nb[2] + " " + nb[3] + " " + nb[4] + " " + nb[5] + " " + nb[6] + " " + nb[7] + " " + nb[8] + " " + nb[9];

}

function getInfoImg(str) {
	return "Source de l'image : " + document.getElementById (str).src +  "/Nom de l'image :" + document.getElementById(str).name +   "/Taille : " + document.getElementById(str).height
}

function rho(){
	var height= document.getElementById("randoms").clientHeight; var name= document.getElementById("randoms").getAttribute("title") ;var width= document.getElementById("randoms").clientWidth;var source= document.getElementById("randoms").getAttribute("src");
	alert("source = " + source + "\nname = " + name + "\nSize = (" + width + " x " + height + ")");       
}

function photo(){
	switch( Math.floor(Math.random() * 7)){
		case 1:	  
		document.getElementById("randoms").setAttribute("title","Askellad");
        document.getElementById("randoms").setAttribute("src","Askellad.jpg");
		break;
		case 2:	
		document.getElementById("randoms").setAttribute("title","Thorfinn");
        document.getElementById("randoms").setAttribute("src","Thorfinn.jpg");
		break;
		case 3:
		document.getElementById("randoms").setAttribute("title","Zoro");
		document.getElementById("randoms").setAttribute("src","Zoro.jpg");
		break;
		case 4:	
		document.getElementById("randoms").setAttribute("title","Khabib");
        document.getElementById("randoms").setAttribute("src","Khabib.jpg");
		break;
		case 5:
		document.getElementById("randoms").setAttribute("title","jonJones");
		document.getElementById("randoms").setAttribute("src","jonjones.jpg");
		break;
		case 6:	
		document.getElementById("randoms").setAttribute("title","FakeGoat");
        document.getElementById("randoms").setAttribute("src","FakeGoat.jpg");
		break;
	}
}

