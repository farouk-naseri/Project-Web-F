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

//like
const likebtns = document.querySelectorAll(".bxs-heart");
//when the user like
likebtns.forEach(likebtn => {
    likebtn.addEventListener("click", () => {
        likebtn.classList.add("likeEffect");
        likebtn.classList.remove("rm-likeEffect");
        likebtn.nextElementSibling.textContent = "1";
        likebtn.nextElementSibling.style.color = "red";
    });
});
//when the user remouve the like
likebtns.forEach(likebtn => {
    likebtn.addEventListener("dblclick", () => {
        likebtn.classList.remove("likeEffect");
        likebtn.classList.add("rm-likeEffect");
        likebtn.nextElementSibling.textContent = "";
        likebtn.style.color = "gray";
    });
});

const unlikebtns = document.querySelectorAll(".bxs-dislike");
//when the user dislike 
unlikebtns.forEach(unlikebtn => {
    unlikebtn.addEventListener("click", () => {
        unlikebtn.style.color = "black";
        unlikebtn.nextElementSibling.textContent ="1";
        unlikebtn.nextElementSibling.style.color ="black";
    });
});
//when the user remouve the dislike
unlikebtns.forEach(unlikebtn => {
    unlikebtn.addEventListener("dblclick", () => {
        unlikebtn.style.color = "black";
        unlikebtn.nextElementSibling.textContent ="";
        unlikebtn.style.color ="gray";
    });
});



