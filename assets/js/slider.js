/* home slider */

var slideItem1 = document.getElementsByClassName("home-slider-item");

var slideIndex = 0

homeSlider();

function homeSlider() {
    for (let i = 0; i < slideItem1.length; i++) {
        slideItem1[i].style.display = "none";
    }
    slideItem1[slideIndex].style.display = "inline-flex";
    slideIndex++;
    if (slideIndex >= slideItem1.length) {
        slideIndex = 0;
    }
    setTimeout(homeSlider, 2000);
}

function loadSlides() {
    
}