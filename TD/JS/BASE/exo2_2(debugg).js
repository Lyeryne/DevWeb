var tab = 'exercice';
console.log(tab);

function divideWordRec(word) {
    if (word.length <= 1) {
        return word;
    }
    else {
        var mid = Math.floor(word.length / 2);
        console.log(mid);
        var leftPart = word.slice(0, mid);
        console.log("LeftPart = " + leftPart);
        var rightPart = word.slice(mid);
        console.log("RightPart = " + rightPart);

        var leftPartDivided = divideWordRec(leftPart);
        console.log("LeftPartDIVIDED = " + leftPartDivided);
        var rightPartDivided = divideWordRec(rightPart);

        console.log("RightPartDIVIDED = " + rightPartDivided);

        console.log("||||||||||||||||||||||||||||||||||||||||||");
        var j = 0, i = 0;
        var sortedWord = [];

        while (i < leftPartDivided.length && j < rightPartDivided.length) {
            if (leftPartDivided[i] < rightPartDivided[j]) {
                sortedWord += leftPartDivided[i];
                console.log("sortedWord < = " + sortedWord);

                i++
                console.log("i < = " + i);
            }
            else {
                sortedWord += rightPartDivided[j];
                console.log("sortedWord > = " + sortedWord);
                j++;
                console.log("j < = " + j);

            }
        }

    }

    console.log("LeftPartDIVIDED after = " + leftPartDivided);
    console.log("RightPartDIVIDED after= " + rightPartDivided);
    console.log("i after  = " + i);
    console.log("j after  = " + j);

    // Ajouter les caractères restants
    sortedWord += leftPartDivided.slice(i) + rightPartDivided.slice(j);
    console.log("sortedWord yeah = " + sortedWord);

    return sortedWord;
}

console.log("" + divideWordRec(tab));

