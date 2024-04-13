const btnR1 = document.getElementById("btn1");
const btnR2 = document.getElementById("btn2");
const btnR3 = document.getElementById("btn3");
const btnR4 = document.getElementById("btn4");
const body = document.querySelector("body");
const btnCalculer = document.querySelector("input[type=button]");
let timeNull = 0;

btnR1.addEventListener("click", () => {
    body.style.background = "red";
    timeNull = Date.now();
});
btnR2.addEventListener("click", () => {
    body.style.background = "green";
    timeNull = Date.now();
});
btnR3.addEventListener("click", () => {
    body.style.background = "blue";
    timeNull = Date.now();
});
btnR4.addEventListener("click", () => {
    body.style.background = "yellow";
    timeNull = Date.now();
});

btnCalculer.addEventListener("click", () => {
    const timeAct = Date.now();
    const timer = timeAct - timeNull;
    console.log(timer);
});




