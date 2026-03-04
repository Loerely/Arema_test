let slide1 = document.querySelector(".slide1");
let slide2 = document.querySelector(".slide2");
let slide3 = document.querySelector(".slide3");
let slide4 = document.querySelector(".slide4");

function slider1_slide1() {
    slide1.style.display = 'flex';
    slide2.style.display = 'none';
    slide3.style.display = 'none';
    slide4.style.display = 'none';
}

function slider1_slide2(params) {
    slide1.style.display = 'none';
    slide2.style.display = 'flex';
    slide3.style.display = 'none';
    slide4.style.display = 'none';
}

function slider1_slide3(params) {
    slide1.style.display = 'none';
    slide2.style.display = 'none';
    slide3.style.display = 'flex';
    slide4.style.display = 'none';
}

function slider1_slide4(params) {
    slide1.style.display = 'none';
    slide2.style.display = 'none';
    slide3.style.display = 'none';
    slide4.style.display = 'flex';
}





let slider2_slide1 = document.querySelector(".slider2_slide1");
let slider2_slide2 = document.querySelector(".slider2_slide2");
let slider2_slide3 = document.querySelector(".slider2_slide3");
let slider2_slide4 = document.querySelector(".slider2_slide4");

function slider2slide1() {
    slider2_slide1.style.display = 'flex';
    slider2_slide2.style.display = 'none';
    slider2_slide3.style.display = 'none';
    slider2_slide4.style.display = 'none';
}

function slider2slide2(params) {
    slider2_slide1.style.display = 'none';
    slider2_slide2.style.display = 'flex';
    slider2_slide3.style.display = 'none';
    slider2_slide4.style.display = 'none';
}

function slider2slide3(params) {
    slider2_slide1.style.display = 'none';
    slider2_slide2.style.display = 'none';
    slider2_slide3.style.display = 'flex';
    slider2_slide4.style.display = 'none';
}

function slider2slide4(params) {
    slider2_slide1.style.display = 'none';
    slider2_slide2.style.display = 'none';
    slider2_slide3.style.display = 'none';
    slider2_slide4.style.display = 'flex';
}



const slider = document.querySelector(".sliderBl4");
const prevBut = document.querySelector(".prev_but");
const nextBut = document.querySelector(".next_but");
const slides = Array.from(slider.querySelectorAll('.slideBl4'));
const slideCount = slides.length; 
let slideIndex = 0;

//Показ предыдущего слайда
function showPreviousSlide(){
    slideIndex = (slideIndex - 1 + slideCount) % slideCount;
    updeateSlider();
}

//Показ следующего слайда
function shovNextSlide(){
        slideIndex = (slideIndex + 1) % slideCount;
        updeateSlider();
}

//Обновление слайдера
function updeateSlider(){
    slides.forEach((slide, index) =>{
        if(index === slideIndex){
            slide.style.display = 'flex';
        }
        else{
            slide.style.display = 'none';
        }
        });
}

updeateSlider();