/* 
-   Écrire une fonction Javascript pour cacher tous les tags « input », sauf input du type de bouton (utiliser la propriété CSS : visibility), et associez-le au bouton « hide » pour l'événement de clic.
-   Écrire une fonction Javascript pour afficher tous les tags « input » et associez-le au bouton « show » pour l'événement de clic.
*/

const btnH = document.getElementById("btnH");
const btnS = document.getElementById("btnS");
const inputnoBtn = document.querySelectorAll(".table input");


btnH.addEventListener("click", () => {
    inputnoBtn.forEach(input => {
        if (input.style !== "button") {
            input.style.visibility = "hidden";
        }
    }
    );
});

btnS.addEventListener("click", () => {
    inputnoBtn.forEach(input => {
        if (input.style !== "button") {
            input.style.visibility = "visible";
        }
    })
})