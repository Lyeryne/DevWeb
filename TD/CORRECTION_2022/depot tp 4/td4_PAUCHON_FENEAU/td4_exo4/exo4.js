function showImage() {
    document.getElementById("image").setAttribute("src", "./image/chaton2.jpg");
}
  
function defaultImage() {
    document.getElementById("image").setAttribute("src", "./image/chaton1.jpg");
}

function photo(){
    document.getElementById("image2").style.display = "block";
    var randomNumber = Math.floor(Math.random() * 6);
    if( randomNumber === 0) {
        document.getElementById("image2").setAttribute("src", "./image/image1.jpg");
    }
    else if( randomNumber === 1) {
        document.getElementById("image2").setAttribute("src", "./image/image2.jpg");
    }
    else if( randomNumber === 2) {
        document.getElementById("image2").setAttribute("src", "./image/image3.jpg");
    }
    else if( randomNumber === 3) {
        document.getElementById("image2").setAttribute("src", "./image/image4.jpg");
    }
    else if( randomNumber === 4) {
        document.getElementById("image2").setAttribute("src", "./image/image5.jpg");
    }
    else {
        document.getElementById("image2").setAttribute("src", "./image/image6.jpg");
    }
}
