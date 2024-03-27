var result = 0;
var img1=0;
var img2=0;
var img3=0;
var img4=0;
var img5=0;
function album1(){
    document.getElementById("album11").style.display = "inline-block";
    document.getElementById("result").style.display = "block";
    if(window.img1<1){
        window.result+= 7.5;
        document.getElementById("result").innerHTML = window.result + "€";
        window.img1+=1; 
    }
}
function album2(){
    document.getElementById("album22").style.display = "inline-block";
    document.getElementById("result").style.display = "block";
    if(window.img2<1){
        window.result+= 7.5;
        document.getElementById("result").innerHTML = window.result + "€";
        window.img2+=1;
    } 
}
function album3(){
    document.getElementById("album33").style.display = "inline-block";
    document.getElementById("result").style.display = "block";
    if(window.img3<1){
        window.result+= 7.5;
        document.getElementById("result").innerHTML = window.result + "€";
        window.img3+=1;
    }  
}
function album4(){
    document.getElementById("album44").style.display = "inline-block"; 
    document.getElementById("result").style.display = "block";
    if(window.img4<1){
        window.result+= 7.5;
        document.getElementById("result").innerHTML = window.result + "€";
        window.img4+=1;
    } 
}
function album5(){
    document.getElementById("album55").style.display = "inline-block";
    document.getElementById("result").style.display = "block";
    if(window.img5<1){ 
        window.result+= 7.5;
        document.getElementById("result").innerHTML = window.result + "€";
        window.img5+=1;
    } 
}
function album11(){
    document.getElementById("album11").style.display = "none"; 
    document.getElementById("result").style.display = "block";
    window.result-= 7.5;
    document.getElementById("result").innerHTML = window.result + "€";
    window.img1-=1; 
}
function album22(){
    document.getElementById("album22").style.display = "none";
    document.getElementById("result").style.display = "block";
    window.result-= 7.5;
    document.getElementById("result").innerHTML = window.result + "€";
    window.img2-=1;
}
function album33(){
    document.getElementById("album33").style.display = "none";
    document.getElementById("result").style.display = "block"; 
    window.result-= 7.5;
    document.getElementById("result").innerHTML = window.result + "€";
    window.img3-=1; 
}
function album44(){
    document.getElementById("album44").style.display = "none";
    document.getElementById("result").style.display = "block";
    window.result-= 7.5; 
    document.getElementById("result").innerHTML = window.result + "€";
    window.img4-=1; 
}
function album55(){
    document.getElementById("album55").style.display = "none";
    document.getElementById("result").style.display = "block";
    window.result-= 7.5;
    document.getElementById("result").innerHTML = window.result + "€";
    window.img5-=1;  
}
