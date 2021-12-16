const cookieBox = document.querySelector(".wrapper"),
acceptBtn = cookieBox.querySelector("button");
acceptBtn.onclick = ()=>{
    document.cookie = "_ga=GA1.2.422452332.1638112688; max-age="+60*60*24*30;
    if(document.cookie){
        cookieBox.classList.add("hide"); 
    }else{ 
        alert("Cookies können leider nicht festgelegt werden!");
    }
}
let checkCookie = document.cookie.indexOf("_ga=GA1.2.422452332.1638112688");
checkCookie == -1 ? cookieBox.classList.remove("hide") : cookieBox.classList.add("hide");