var paragraphs = document.querySelectorAll("p");
var lists = document.querySelectorAll("li");
var divisor = document.querySelector("pre>div");
var strong = document.querySelector("strong");

var countSentences = 0;
var countWords = 0;


function countOccurence(text) {
    //instanceof : if 'text' is a 'NodeList' so we need to see 'ForEach' node to counting words 
    if (text instanceof NodeList) {
        countSentences += text.length;
        text.forEach(function (texts) {
            //'innerHTML' representing a content of HTML's element.
            //split : is work to 'split' the sentence with a delimeter in a table to counting and after we use a loop ('for').
            var words = texts.innerHTML.split(' ');
            for (var i = 0; i < words.length; i++) {
                //We need to be sure if there is not a empty case to count words
                if (words[i] !== '') {
                    countWords++;
                }
            }
        });
    }
    //if 'text' is a tag/'HTMLElment'(<p>, <h1> etc...) & not a 'script Tag' like you said :
    //"Le texte dans les balises 'script' et dans les commentaires ne doit pas être pris en compte dans le calcul."
    else if (text instanceof HTMLElement && text.tagName !== "SCRIPT") {
        countSentences++;
        var words = text.innerHTML.split(' ');
        for (var i = 0; i < words.length; i++) {
            if (words[i] !== '') {
                countWords++;
            }
        }
    }
}

countOccurence(divisor);
countOccurence(paragraphs);
countOccurence(lists);
countOccurence(strong);

console.log(countWords + " words / " + countSentences + " sentences");


