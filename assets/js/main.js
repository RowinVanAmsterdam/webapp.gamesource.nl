window.onload = function() {
    sliderScroll();
    indicatorActivation();

    //eventlisteners for indicator bullets
    document.querySelector("#circle1").addEventListener("click", indicatorNav1);
    document.querySelector("#circle2").addEventListener("click", indicatorNav2);
    document.querySelector("#circle3").addEventListener("click", indicatorNav3);
};

let slides = document.querySelector(".slides");
let width = window.innerWidth;
function sliderScroll() {
    // let width = window.innerWidth;
        setTimeout(function() {
            document.querySelector(".slides").scrollTo(width, 0);}, 5000);
        setTimeout(function() {
            document.querySelector(".slides").scrollTo(width * 2, 0);}, 10000);
        setTimeout(function() {
            document.querySelector(".slides").scrollTo(0, 0);}, 15000);
}

function indicatorActivation() {
    let width = window.innerWidth;
    slides.addEventListener('scroll', function(e){
        let scrollPos = slides.scrollLeft;
        console.log(scrollPos);
    if (scrollPos === 0 ) {
        document.querySelector("#circle1").classList.add("active-indicator");
    }
    else if (scrollPos === width) {
        document.querySelector("#circle2").classList.add("active-indicator");
    }
    else if (scrollPos === width * 2 ) {
        document.querySelector("#circle3").classList.add("active-indicator");
    }
    else {
        document.querySelector("#circle1").classList.remove("active-indicator");
        document.querySelector("#circle2").classList.remove("active-indicator");
        document.querySelector("#circle3").classList.remove("active-indicator");
        console.log("nothing");
    }
    });
}

function indicatorNav1() {
    document.querySelector(".slides").scrollTo(0, 0);
}

function indicatorNav2() {
    document.querySelector(".slides").scrollTo(width, 0);
}

function indicatorNav3() {
    document.querySelector(".slides").scrollTo(width * 2, 0);
}