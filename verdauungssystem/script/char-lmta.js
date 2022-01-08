const input = document.querySelector(".tinp"),
counter = document.querySelector(".char-limit"),
maxLength = input.getAttribute("maxlength");

input.onkeyup = ()=>{
    counter.innerText = maxLength - input.value.length;
    if(maxLength - input.value.length == 0){
        $(counter).css("color", "#f56353");
    }
    else{
        $(counter).css("color", "#aaaaaa8c");
    }
}