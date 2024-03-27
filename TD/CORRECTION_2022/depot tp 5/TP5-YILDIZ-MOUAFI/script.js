// EX 1

function getBrowserName(){
    if(navigator.userAgent.indexOf("Firefox") != -1){
        return "Firefox";
    }
    else if(navigator.userAgent.indexOf("Chrome") != -1){
        return "Chrome";
    }
    else if(navigator.userAgent.indexOf("Safari") != -1){
        return "Safari";
    }
    else if(navigator.userAgent.indexOf("Opera") != -1 || navigator.userAgent.indexOf("OPR") != -1){
        return "Opera";
    }
    else if(navigator.userAgent.indexOf("Edge") != -1 || navigator.userAgent.indexOf("Edg") != -1){
        return "Edge";
    }
    else {
        return "Unknown";
    }

}

function addEntry(){
    var name = window.prompt("Insert your last name :", "name");
    var browser = getBrowserName() ;
    var os = navigator.platform ;
    var box=document.getElementById("entries");
    box.innerHTML += '<div class=\"entryBox\"><b>Hello ' + name + ' !<br>You are a student in PréIng2 at Cy-Tech.<br>Your browser is ' + browser + '.<br>Your operating system is ' + os + '.</div>';
}

function delFirstEntry(){
    var entries=document.getElementById("entries");
    entries.removeChild(entries.firstChild);
}

function clearEntries(){
    var entries=document.getElementById("entries");
    
    while(entries.firstChild!=null){
        entries.removeChild(entries.lastChild);
    }

}

// EX 2

var elementsInCart=0

function updatePrice(){
    document.getElementById("price").innerHTML=(elementsInCart*7.5)+'€';
}

function updateSize(){
    for(element of document.getElementsByClassName('albumImgInCart')){
        element.setAttribute("width", (100/elementsInCart)+"%");
    }
}

// Refresh the list displayed on the page
function updateDisplayedList(){
    if(listAlbumsUniq.length>0){
        document.getElementById('listOfAlbumsInCart').innerHTML="";
        for(var i=0; i<listAlbumsUniq.length-1; i++){
            document.getElementById('listOfAlbumsInCart').innerHTML+= listAlbumsUniq[i] + " - ";
        }
        document.getElementById('listOfAlbumsInCart').innerHTML+= listAlbumsUniq[listAlbumsUniq.length-1];
    }
    else{
        document.getElementById('listOfAlbumsInCart').innerHTML="Panier vide";
    }
}

var listAlbumsUniq=[]; // Contains the list of albums that are in the cart
var listAlbums=[] // Same as listAlbumsUniq but an element appears as much as it was added by the user

function addToCart(name){
    var pic = document.createElement("img") ;
    pic.src = "img/" + name + ".jpg";
    pic.alt = name;
    pic.className = "albumImgInCart";
    pic.setAttribute("onclick", "removeFromCart(this)")
    document.getElementById("destination").appendChild(pic);

    //If the given element is already in the list then we don't add it again, since this list only contains different elements (only one occurrence)
    var isInList=0;
    for(element of listAlbumsUniq){
        if(element == name){
            isInList=1;
            break;
        }
    }
    
    if(isInList==0){
        listAlbumsUniq.push(name);
    }
    
    //But it's always added to the following list
    listAlbums.push(name);

    elementsInCart++;
    updateDisplayedList();
    updatePrice();
    updateSize();
}

function removeFromCart(element){
    // We search (and delete) the given element in listAlbums, and if it was the last occurrence of this element in the list then we delete it of listAlbumsUniq
    for(i in listAlbums){
        var name=listAlbums[i];
        if(name == element.alt){
            listAlbums.splice(i, 1);
            if(listAlbums.indexOf(name) == -1){
                listAlbumsUniq.splice(listAlbumsUniq.indexOf(name), 1);
            }
            break;
        }
    }

    element.remove();
    elementsInCart--;
    updateDisplayedList();
    updatePrice();
    updateSize();
}
