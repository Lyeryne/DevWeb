//Fichier JS pour calculer les termes de la suite de Fibonacci
function Fibonacci(n){
    var x = 0;
    var y = 1;
    var sum = 0;
    if (n==1){return 1;}
    for (let i = 2; i <= n; i++) {
        sum = x + y;
        x = y;
        y = sum;
    }
    return sum;
}