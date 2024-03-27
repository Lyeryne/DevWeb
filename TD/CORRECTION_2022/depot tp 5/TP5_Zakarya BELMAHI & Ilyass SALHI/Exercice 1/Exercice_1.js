function afficher() {
    var nom = prompt("Saisissez votre nom");
    //recuperation de la balise contenant la liste d'eleves
    var vide = document.getElementById("vide");
    //creation d'une nouvelle balise pour l'eleve
    var eleve = document.createElement("div");
    var browser = detecteBrowser() ;
    var os = navigator.platform ;
    var str = "Bonjour ".bold()+ nom.italics() + ", <br/> Vous &ecirc;tes &eacute;tudiant en Prépa 2 de CY TECH <br/>".bold()+ 	"<b>Votre Browser est : </b><i>" + browser.italics()  + "</br><b>Votre OS est : </b><i> " + os.italics();
    eleve.innerHTML = str;
    
  
    eleve.className = "eleve";
    vide.appendChild(eleve);
  }
  
  // Ajoute un noeud (texte)
  function ajouterNoeud(el, text) {
    var childElement = document.createElement("div");
    el.appendChild(childElement);
    var txtNode = document.createTextNode(text);
    childElement.appendChild(txtNode);
  }
  
  function un () {
    var eleves = document.getElementById("vide");
    if (eleves.childNodes.length > 0)
      eleves.removeChild(eleves.lastChild);
  }
  
  function tout() {
    var eleves = document.getElementById("vide");
    eleves.innerHTML = "";
  }
  
  function detecteBrowser() { 
    if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR') || navigator.userAgent.indexOf('OperaGX')) != -1 ) {
        return 'Opera';
    } else if(navigator.userAgent.indexOf("Chrome") != -1 ) {
        return 'Chrome';
    } else if(navigator.userAgent.indexOf("Safari") != -1) {
        return 'Safari';
    } else if(navigator.userAgent.indexOf("Firefox") != -1 ){
        return 'Firefox';
    } else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) {
        return 'IE';//crap
    } else {
        return 'Unknown';
    }
} 


