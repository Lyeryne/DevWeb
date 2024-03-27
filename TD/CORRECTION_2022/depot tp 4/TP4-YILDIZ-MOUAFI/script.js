
// EX1
function changeAnyPContent(){
    elements_list=document.getElementsByClassName('pEx1');
    for (var i=0; i<elements_list.length; i++){
        elements_list[i].innerHTML = "NEW TEXT " + i;
    }
}

function changeAnyPStyle(){
    elements_list=document.getElementsByClassName('pEx1');
    for (var i=0; i<elements_list.length; i++){
        elements_list[i].style.border = '2px black solid';
        elements_list[i].style.color = 'green';
        elements_list[i].style.width = '496px';
    }
}

function hideAnyPContent(){
    elements_list=document.getElementsByClassName('pEx1');
    for (var i=0; i<elements_list.length; i++){
        elements_list[i].style.display = 'none';
    }
}

// EX2
var n = window.prompt("Give the rank of the Fibonacci sequence that you want", 0);
function fibonacci(n){
    var prev = 0, next = 1, res=0;
    if(n==1 || n==2){
        res =1;
    } else {
        for(var i=2; i<=n; i++) {
            res = next+prev;
            prev = next;
            next = res;
        }
    }
    return res;
}

function calculateFib(){
    var date = new Date();
    document.getElementById('fib').innerHTML = "At "+ date.getHours() + " hours and " + date.getMinutes() + " minutes, the "+ n + "<sup>th</sup> term of the Fibonnacci sequence is <b style='font-size:20px;'>" + fibonacci(n) + "</b>";
}

// EX3

function displayArraysOfIntegers(){
    var randomNumber=0;
    var array=[];

    for(var i=0; i<10; i++){
        do{
            var randomNumber=Math.floor(Math.random()*100);
        }while(randomNumber>=100);
        array.push(randomNumber);
    }

    document.getElementById('array').innerHTML="";
    for(var i=0; i<9; i++){
        document.getElementById('array').innerHTML+=array[i] + "-";
    }
    document.getElementById('array').innerHTML+=array[9];

    array.sort(function comp(a,b){ return a-b });
    for(var i=0; i<9; i++){
        document.getElementById('sorted_array').innerHTML+=array[i] + "-";
    }
    document.getElementById('sorted_array').innerHTML+=array[9] ;   
}

// EX 4

function changePic(n){
    switch(n){
        case 1: //change the first pic to 1.jpg
            document.getElementById("first_pic").setAttribute("src","img/1.jpg");
            break;
        case 2: //change the first pic to 2.jpg
            document.getElementById("first_pic").setAttribute("src","img/2.jpg");
            break;
        case 3: //change the second image randomly
            do{
                var randomNumber=Math.floor(Math.random()*6);
            }while(randomNumber>=6);
            switch(randomNumber){
                case 0:
                    document.getElementById("second_pic").setAttribute("src","img/3.jpg");
                    document.getElementById("second_pic").setAttribute("title","CY-Tech");
                    break;
                case 1:
                    document.getElementById("second_pic").setAttribute("src","img/4.jpg");
                    document.getElementById("second_pic").setAttribute("title","Istanbul");
                    break;
                case 2:
                    document.getElementById("second_pic").setAttribute("src","img/5.jpg");
                    document.getElementById("second_pic").setAttribute("title","Casablanca");
                    break;
                case 3:
                    document.getElementById("second_pic").setAttribute("src","img/6.jpg");
                    document.getElementById("second_pic").setAttribute("title","Paris");
                    break;
                case 4:
                    document.getElementById("second_pic").setAttribute("src","img/7.jpg");
                    document.getElementById("second_pic").setAttribute("title","Genève");
                    break;
                case 5:
                    document.getElementById("second_pic").setAttribute("src","img/8.jpg");
                    document.getElementById("second_pic").setAttribute("title","Séoul");
                    break;    
            }
            break;
    }
}

function getPicInfo(){
    var name=document.getElementById("first_pic").getAttribute("title") ;
    var source=document.getElementById("first_pic").getAttribute("src");
    var width=document.getElementById("first_pic").clientWidth;
    var height=document.getElementById("first_pic").clientHeight;
    window.alert("source = " + source + "\nname = " + name + "\nSize = (" + width + " x " + height + ")");
}