const loginSignupCon = document.querySelectorAll(".form");
const loginSignupBtn = document.querySelectorAll(".login-signup-select-con button");
let currentLS = 0;
function function1(n){
    loginSignupCon[currentLS].style.display="none";
    loginSignupBtn[currentLS].classList.remove("select-act");
    loginSignupCon[n].style.display="block";
    loginSignupBtn[n].classList.add("select-act");
    currentLS=n;
}

var showIndex = 1;
showSlide(showIndex);

function plusSlide(n){
   showIndex +=n;
   showSlide(showIndex);
}

function showSlide(m){
    var slidesP = document.querySelectorAll(".step");
    var slidesImg = document.querySelectorAll(".step-img img");
    if(m>slidesP.length)
    {
        showIndex = 1;
    }
    if(m<1)
    {
        showIndex = slidesP.length;
    }
    for(var i=0;i<slidesP.length;i++)
    {
        slidesP[i].style.display="none";
        slidesImg[i].style.display="none";
    }
    slidesP[showIndex-1].style.display = "block";
    slidesImg[showIndex-1].style.display = "block";
}

