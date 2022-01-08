const input = document.querySelector(".tinp"),
counter = document.querySelector(".char-limit"),
maxLength = input.getAttribute("maxlength");

console.log(maxLength)

input.onkeyup = ()=>{
    counter.innerText = maxLength - input.value.length;
}