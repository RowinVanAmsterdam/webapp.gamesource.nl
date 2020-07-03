window.onload = function() {
    sliderScroll();
    indicatorActivation();
    currentSelection();

    //eventlisteners for indicator bullets
    document.querySelector("#circle1").addEventListener("click", indicatorNav1);
    document.querySelector("#circle2").addEventListener("click", indicatorNav2);
    document.querySelector("#circle3").addEventListener("click", indicatorNav3);
    //eventlistener for form submit
    document.querySelector("#form-submit").addEventListener("change", clickToSubmit);
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
        // console.log(scrollPos);
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
        // console.log("nothing");
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

function clickToSubmit() {
    document.querySelector('#form-submit').submit();
}

function currentSelection() {
    const urlPar = window.location.search;
    const url = window.location.href;
    console.log(url);
    document.querySelector("#Highlight").style.display = "none";
    document.querySelector("#Uncategorized").style.display = "none";

    if (urlPar === "?cat-filter=Alle") {
        document.querySelector("#Alle").setAttribute('selected', true);
    }
    if (urlPar === "?cat-filter=Xbox") {
        document.querySelector("#Xbox").setAttribute('selected', true);
    }
    if (urlPar === "?cat-filter=Playstation") {
        document.querySelector("#Playstation").setAttribute('selected', true);
    }
    if (urlPar === "?cat-filter=Switch") {
        document.querySelector("#Switch").setAttribute('selected', true);
    }
    if (urlPar === "?cat-filter=Pc") {
        document.querySelector("#Pc").setAttribute('selected', true);
    }
}