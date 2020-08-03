window.onload = function() {
    cookieStatus();
    homeFunctionCall();
    currentSelection();
    colorCodeCategories();
    hideSelectOptions();
    cookieSetting();

    window.addEventListener('scroll', headerScroll);
    //eventlistener for form submit
    document.querySelector("#form-submit").addEventListener("change", clickToSubmit);
};

userStatus();

function homeFunctionCall() {
    let currentLocation = window.location.href;
    homeUrl += "/";
    if (currentLocation === homeUrl) {
        sliderScroll();
        indicatorActivation();
        homeCheck();
        //eventlisteners for indicator bullets
        document.querySelector("#circle1").addEventListener("click", indicatorNav1);
        document.querySelector("#circle2").addEventListener("click", indicatorNav2);
        document.querySelector("#circle3").addEventListener("click", indicatorNav3);
        //eventlistener for hamburger menu
        // document.querySelector("#checkbox").addEventListener("click", hamburgerColorChange);
    }
}

let slides = document.querySelector(".slides");
let width = window.innerWidth;

function sliderScroll() {
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

function hideSelectOptions() {
    let select = document.querySelector("#cat-filter") !== null;
    if (select) {
        document.querySelector("#Highlight").style.display = "none";
        // document.querySelector("#Uncategorized").style.display = "none";
    }
}

function currentSelection() {
    const urlPar = window.location.search;
    const url = window.location.href;

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

function colorCodeCategories() {
    let currentLocation = window.location.href;
    const urlPar = window.location.search;
    if (currentLocation === homeUrl) {
        limeCategories();
    }
    else if (urlPar === "?cat-filter=Alle"){
        limeCategories();
    }
    else if (urlPar === "?cat-filter=Xbox"){
        limeCategories();
    }
    else if (urlPar === "?cat-filter=Playstation"){
        limeCategories();
    }
    else if (urlPar === "?cat-filter=Switch"){
        limeCategories();
    }
    else if (urlPar === "?cat-filter=Pc"){
        limeCategories();
    }
    else {
        colorCategories();
    }
}

function limeCategories() {
    let allCategories = document.querySelectorAll(".post-categories li a");
    let i;
    for (i = 0; i < allCategories.length; i++) {
        if (allCategories[i].innerHTML === "Highlight") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Playstation") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Xbox") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Switch") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Pc") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Alle") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Uncategorized") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Nieuws") {
            allCategories[i].classList.add("category-tag", "category-tag--lime");
        } else if (allCategories[i].innerHTML === "Reviews") {
            allCategories[i].classList.add("category-tag", "category-tag--lime");
        } else if (allCategories[i].innerHTML === "Previews") {
            allCategories[i].classList.add("category-tag", "category-tag--lime");
        }
    }
}
function colorCategories() {
    let allCategories = document.querySelectorAll(".post-categories li a");
    let i;
    for (i = 0; i < allCategories.length; i++) {
        if (allCategories[i].innerHTML === "Highlight") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Playstation") {
            allCategories[i].classList.add("category-tag", "category-tag--blue");
        } else if (allCategories[i].innerHTML === "Xbox") {
            allCategories[i].classList.add("category-tag", "category-tag--green");
        } else if (allCategories[i].innerHTML === "Switch") {
            allCategories[i].classList.add("category-tag", "category-tag--red");
        } else if (allCategories[i].innerHTML === "Pc") {
            allCategories[i].classList.add("category-tag", "category-tag--black");
        } else if (allCategories[i].innerHTML === "Alle") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Uncategorized") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Nieuws") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Reviews") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        } else if (allCategories[i].innerHTML === "Previews") {
            allCategories[i].closest("li").style.display = "none";
            allCategories[i].style.display = "none";
        }
    }
}

function homeCheck() {
    let currentLocation = window.location.href;
    if (currentLocation === homeUrl) {
        // document.querySelector(".header-container__content h1").style.color = "white";
        document.querySelector("#logo-default").classList.add("hidden");
        document.querySelector("#logo-white").classList.remove("hidden");
        document.querySelector(".header-container").style.backgroundColor = "transparent";
        document.querySelector(".header-container").style.borderBottom = "none";
        document.querySelector("#Nieuws").style.color = "white";
        document.querySelector("#Reviews").style.color = "white";
        document.querySelector("#Previews").style.color = "white";
        document.querySelector("#Inloggen").style.color = "white";
        document.querySelector("#Profiel").style.color = "white";
        document.querySelector("#span1").style.background = "white";
        document.querySelector("#span2").style.background = "white";
        document.querySelector("#span3").style.background = "white";
    }
}

function headerScroll() {
    if (window.scrollY >= 20) {
        // document.querySelector(".header-container__content h1").removeAttribute("style");
        document.querySelector("#logo-white").classList.add("hidden");
        document.querySelector("#logo-default").classList.remove("hidden");
        document.querySelector(".header-container").removeAttribute("style");
        document.querySelector("#Nieuws").removeAttribute("style");
        document.querySelector("#Reviews").removeAttribute("style");
        document.querySelector("#Previews").removeAttribute("style");
        document.querySelector("#Inloggen").removeAttribute("style");
        document.querySelector("#Profiel").removeAttribute("style");
        document.querySelector("#span1").removeAttribute("style");
        document.querySelector("#span2").removeAttribute("style");
        document.querySelector("#span3").removeAttribute("style");
    }
    else {
        homeCheck();
    }
}

function hamburgerColorChange() {
        // document.querySelector(".header-container__content h1").classList.toggle("h1-dark");
        document.querySelector("#span1").classList.toggle("span-dark");
        document.querySelector("#span2").classList.toggle("span-dark");
        document.querySelector("#span3").classList.toggle("span-dark");

}

function userStatus() {
    console.log(userLoginStatus);
    if (userLoginStatus == 1) {
        document.querySelector("#Inloggen").classList.add("hidden");
        document.querySelector("#Profiel").classList.remove("hidden");
        document.querySelector("#Inloggen-mobile").classList.add("hidden");
        document.querySelector("#Profiel-mobile").classList.remove("hidden");
    }
    else {
        document.querySelector("#Inloggen").classList.remove("hidden");
        document.querySelector("#Profiel").classList.add("hidden");
        document.querySelector("#Inloggen-mobile").classList.remove("hidden");
        document.querySelector("#Profiel-mobile").classList.add("hidden");
    }
}

function setCookie() {
    document.cookie = "GameSource_Cookie"+ "=" +"Accepted"+ ";" + "expires="+ new Date(new Date().getTime()+60*60*1000*24*30).toGMTString()+";path=/";
}

function cookieStatus() {
    let cookie = document.cookie;
    // let cookieSplit = cookie.split(";");
    let cookieSearch = document.cookie.indexOf('GameSource_Cookie=');
    if (cookieSearch !== -1) {
        // document.querySelector(".cookie__message").classList.toggle("hidden");
        document.querySelector("#cookie-message").innerHTML = "";
    }
    else {
        document.querySelector("#cookie-message").innerHTML = "" +
            "<div class=\"cookie__message\">\n" +
            "    <p class=\"cookie__message--text\">Wij gebruiken cookies om onze website en uw ervaring te verbeteren</p>\n" +
            "    <div>\n" +
            "        <a class=\"cookie__message--button\" id=\"cookie-accept\" href=\"\">Accepteer</a>\n" +
            "        <a class=\"cookie__message--button\" href=\"<?php echo home_url(); ?>/cookie-informatie\">Meer informatie</a>\n" +
            "    </div>\n" +
            "</div>";
        //eventlistener for cookie submit
        document.querySelector("#cookie-accept").addEventListener("click", setCookie);
    }
}

function cookieSetting() {
    let currentLocation = window.location.href;
    let arrayLocation = currentLocation.split('/');
    let privacy = arrayLocation.includes('privacy-policy');
    if (privacy === true) {
        document.querySelector("#privacy-off").addEventListener("click", privacyOff);
        document.querySelector("#privacy-on").addEventListener("click", privacyOn);
        function privacyOff() {
            document.querySelector("#privacy-off").classList.toggle("privacy-policy__setting--on");
            document.querySelector("#privacy-on").classList.toggle("privacy-policy__setting--on");
            document.querySelector("#analytics").remove();
        }
        function privacyOn() {
            document.querySelector("#privacy-off").classList.toggle("privacy-policy__setting--on");
            document.querySelector("#privacy-on").classList.toggle("privacy-policy__setting--on");
            document.querySelector("#analytics-container").innerHTML = "<div id=\"analytics\">\n" +
                "        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-172341440-1\"></script>\n" +
                "        <script>\n" +
                "            window.dataLayer = window.dataLayer || [];\n" +
                "            function gtag(){dataLayer.push(arguments);}\n" +
                "            gtag('js', new Date());\n" +
                "\n" +
                "            gtag('config', 'UA-172341440-1');\n" +
                "        </script>\n" +
                "    </div>";
        }
    }
}