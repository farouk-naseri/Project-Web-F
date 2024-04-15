let menubtn = document.querySelector(".bx-menu");
let nav = document.querySelector("nav")
menubtn.addEventListener("click",function(){

    if(nav.classList.contains("open")){
        nav.classList.remove("open");
        nav.classList.add("close");
    }else{
        nav.classList.remove("close");
        nav.classList.add("open");
    }
})