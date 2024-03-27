var prix = 0
function prixtotal(){

  prix = prix + 7.50;
  var more = document.createElement("p");
  var node = document.createTextNode(prix+"€");
  more.appendChild(node);
  moreprix = document.getElementById("divprix");
  while(moreprix.hasChildNodes()){
    moreprix.removeChild(divprix.firstChild);
  }
  moreprix.appendChild(node);
}

function reducePrice(){
  prix = prix - 7.50;
  var more = document.createElement("p");
  var node = document.createTextNode(prix+"€");
  more.appendChild(node);
  moreprix = document.getElementById("divprix");
  while(moreprix.hasChildNodes()){
    moreprix.removeChild(divprix.firstChild);
  }
  moreprix.appendChild(node);
}

function Panier1(){
  var img = document.createElement("img");
  img.src = "JUL.jpg";
  img.style.marginLeft = "5px";
  var element = document.getElementById("divjul");
  element.appendChild(img);
  prixtotal();
}
function Panier2(){
  var img = document.createElement("img");
  img.src = "Eminem.jpg";
  img.style.marginLeft = "5px";
  var element = document.getElementById("diveminem");
  element.appendChild(img);
  prixtotal();
}
function Panier3(){
  var img = document.createElement("img");
  img.src = "Ninho.jpg";
  img.style.marginLeft = "5px";
  var element = document.getElementById("divninho");
  element.appendChild(img);
  prixtotal();
}
function Panier4(){
  var img = document.createElement("img");
  img.src = "Naps.jpg";
  img.style.marginLeft = "5px";
  var element = document.getElementById("divnaps");
  element.appendChild(img);
  prixtotal();
}
function Panier5(){
  var img = document.createElement("img");
  img.src = "Freeze.jpg";
  img.style.marginLeft = "5px";
  var element = document.getElementById("divfreeze");
  element.appendChild(img);
  prixtotal();
}

function removearticle1(){
  var element = document.getElementById("divjul");
  element.removeChild(element.lastElementChild);
  reducePrice();
 
}
function removearticle2(){
  var element = document.getElementById("diveminem");
  element.removeChild(element.lastElementChild);
  reducePrice();
}
function removearticle3(){
  var element = document.getElementById("divninho");
  element.removeChild(element.lastElementChild);
  reducePrice();
}
function removearticle4(){
  var element = document.getElementById("divnaps");
  element.removeChild(element.lastElementChild);
  reducePrice();
}
function removearticle5(){
  var element = document.getElementById("divfreeze");
  element.removeChild(element.lastElementChild);
  reducePrice();
}


