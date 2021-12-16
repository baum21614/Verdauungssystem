let images = ["./img/dice/dice-01.svg",
"./img/dice/dice-02.svg",
"./img/dice/dice-03.svg",
"./img/dice/dice-04.svg",
"./img/dice/dice-05.svg",
"./img/dice/dice-06.svg"];
let dice = document.querySelectorAll("img");

$("#rolldc").click (function roll(){
    dice.forEach(function(die){
        die.classList.add("shake");
    });
    setTimeout(function(){
        dice.forEach(function(die){
            die.classList.remove("shake");
        });
        let dieOneValue = Math.floor(Math.random()*3);
        console.log(dieOneValue);
        document.querySelector("#die-1").setAttribute("src", images[dieOneValue]);
        document.querySelector("#total").innerHTML = "Du hast " + (dieOneValue +1) + " gewürfelt.";
    },
    1000
    );
});