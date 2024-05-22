// start of SLIDE NAVBAR 
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
//end of SLIDE NAVBAR
// start of formation part
// Select all buttons with the class "formation"
const buttons = document.querySelectorAll(".formation button");

// Add event listener to each button
buttons.forEach((button, index) => {
    button.addEventListener("click", function() {
        let page;
        switch (index) {
            case 0:
                page = "section1.html";
                break;
            case 1:
                page = "section2.html";
                break;
            case 2:
                page = "section3.html";
                break;
            default:
                page = "default.html"; 
        }
        window.location.href = page;
    });
});
// end of formation paert
// start of asid scroll efect
const scrollEffects = document.querySelectorAll(".scroll-efect");

scrollEffects.forEach((element, index) => {
    const topPosition = index * 50; 
    element.style.top = `${topPosition}px`;
});
// end of aside scroll efect