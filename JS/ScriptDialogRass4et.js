const slider = document.querySelector(".dialog_inf");
const prevBut = document.querySelector(".prev_but");
const nextBut = document.querySelector(".next_but");
const slides = Array.from(slider.querySelectorAll('.slide'));
const slideCount = slides.length; 
let slideIndex = 0;
const buttons = document.querySelector(".slideBut");

//События кнопок
prevBut.addEventListener('click', showPreviousSlide);
nextBut.addEventListener('click', shovNextSlide);

//Показ предыдущего слайда
function showPreviousSlide(){
    if(slideIndex != 0){
    slideIndex = (slideIndex - 1 + slideCount) % slideCount;
    updeateSlider();
    }
}

//Показ следующего слайда
function shovNextSlide(){
    if(slideIndex != 7){
        slideIndex = (slideIndex + 1) % slideCount;
        updeateSlider();
    }
}

//Обновление слайдера
function updeateSlider(){
    slides.forEach((slide, index) =>{
        if(index === slideIndex){
          slide.style.display = 'block';
        }
        else{
          slide.style.display = 'none';
        }
      });
}

updeateSlider();