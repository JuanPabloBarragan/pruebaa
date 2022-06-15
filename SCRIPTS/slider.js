const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function MoveRight() {
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    document.getElementById("slider").style.marginLeft = "-200%";
    document.getElementById("slider").style.transition = "all 0.5s";
    setTimeout(function(){
        document.getElementById("slider").style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        document.getElementById("slider").style.marginLeft = "-100%";
    }, 500);
}

function MoveLeft() {
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length -1];    document.getElementById("slider").style.marginLeft = "-200%";
    document.getElementById("slider").style.marginLeft = "0";
    document.getElementById("slider").style.transition = "all 0.5s";
    setTimeout(function(){
        document.getElementById("slider").style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        document.getElementById("slider").style.marginLeft = "-100%";
    }, 500);
}

btnRight.addEventListener('click', function(){
    MoveRight();
});

btnLeft.addEventListener('click', function(){
    MoveLeft();
});

setInterval(function(){
    MoveRight();
}, 4000);