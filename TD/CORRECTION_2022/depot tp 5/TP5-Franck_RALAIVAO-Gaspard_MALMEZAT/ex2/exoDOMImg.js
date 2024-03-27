//Q0: au chargement de la page, associer la fonction d�placer � l'attribut onclick de chaque image
function ajouterOnClick() {
  // r�cup�rer tous les �l�ments <img> dans la section source
  var imgs = document.querySelectorAll('#source img');
  // pour chaque image, associer la fonction deplacer � l'attribut onclick
  for (var i = 0; i < imgs.length; i++) {
    imgs[i].onclick = deplacer;
    // ajouter le chemin vers l'image
    imgs[i].src = "img/" + imgs[i].id + ".jpg";
  }
}
function deplacer() {
  // On rep�re l'image depuis laquelle la fonction clic s'est deplace
  var elementImg = this;
  var noeudTexte;
  // On r�cup�re les deux parties � traiter
  var elementSrc = document.getElementById("source");
  var elementDest = document.getElementById("destination");
  var nbIMG = 0; //nb d'images en destination

  //selon la position de l'image dans la page : 
  if(elementImg.parentNode.id=="source"){ // si elle est dans source alors : 
    try{
  //Q1: ajouter elementImg � elementDest
      elementDest.appendChild(elementImg);
  //Q2: cr�er un nouvel objet de type balise span  
      var spanAlbum = document.createElement("span");

  //Q3: creer un nouvel objet de type texte pour indiquer
  // R�cup�rer l'identifiant de l'album depuis l'attribut id de l'�l�ment img
    noeudTexte = document.createTextNode("Album : " + elementImg.id);

  //Q4: ajouter ce texte � l'objet span
  // Ajouter le texte � l'objet span
    spanAlbum.appendChild(noeudTexte);

  //Q5: ajouter le span juste avant elementIMG
    elementImg.parentNode.insertBefore(spanAlbum, elementImg);
    
    }catch(excep){
    	//afficher un message d'erreur
      alert("Erreur : " + excep.description);
    }
  }else{ // sinon, elle est dans destination : 
  //Q6: deplacer elementImg vers elementSrc
    var spanAlbumDest = elementImg.previousSibling;
    if (spanAlbumDest.tagName == "SPAN") {
      spanAlbumDest.parentNode.removeChild(spanAlbumDest);
    }
    elementSrc.appendChild(elementImg);
  }
  //Q7 mettre la valeur du panier � jour
     //compter le nombre d'images de la destination destination
  var nbImgDest = elementDest.getElementsByTagName("img").length;
  //mettre � jour le panier
  var panier = document.getElementById("panier");
  panier.innerHTML = "Montant du panier : " + (nbImgDest * 7.5) + " &#8364;";
}

