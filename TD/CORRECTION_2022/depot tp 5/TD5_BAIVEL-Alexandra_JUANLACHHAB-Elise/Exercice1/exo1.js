function ajouter() {
    var text;
    var nom = prompt("Saisir votre prenom:", "");
    if (nom == null || nom == "") {
        alert("Vous devez saisir votre prenom!")
        return;
        }
        else {
            text = "<b>Hello</b> <i>" + nom + "</i><b> !" + 
            "<br> You are a student in Bachelor2 at CYTech" + 
            "<br> Your browser is: </b><i>" + Browser() + 
            "</i><br> <b>Your operating system is: </b><i>" + OS() + "</i>";
    }
    var affiche = document.createElement("p");
    affiche.innerHTML=text;
    document.getElementById("div1").append(affiche);
}
    
function supprimerlast(){
    var doc = document.getElementById("div1");
    doc.removeChild(doc.lastChild);
}

function supprimerAll(){
    document.getElementById("div1").innerHTML = "";
}



function OS(){
    var Name = "Unknown OS";
    if (navigator.userAgent.indexOf("Win") != -1) Name = "Windows OS";
    if (navigator.userAgent.indexOf("Mac") != -1) Name = "Macintosh";
    if (navigator.userAgent.indexOf("Linux") != -1) Name = "Linux OS";
    if (navigator.userAgent.indexOf("Android") != -1) Name = "Android OS";
    if (navigator.userAgent.indexOf("like Mac") != -1) Name = "iOS";
    return(Name);
  }
  
function Browser(){
    let userAgent = navigator.userAgent;
    let browserName;

    if(userAgent.match(/chrome|chromium|crios/i)){
            browserName = "Chrome";
        }
        else if(userAgent.match(/firefox|fxios/i)){
            browserName = "Firefox";
        }  
        else if(userAgent.match(/safari/i)){
            browserName = "Safari";
        }
        else if(userAgent.match(/opr\//i)){
            browserName = "Opera";
        } 
        else if(userAgent.match(/edg/i)){
            browserName = "Edge";
        }
        else{
            browserName="No browser detection";
    }
    return(browserName);
}

