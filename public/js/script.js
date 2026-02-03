const slider = document.querySelector('.slider-track');
const slides = document.querySelectorAll('.slide');
const slideWidth = slides[0].offsetWidth + 20; // 20 = left/right margin
let currentIndex = 0;
const visibleSlides = 3;

document.querySelector('.next').addEventListener('click', () => {
  if (currentIndex < slides.length - visibleSlides) {
    currentIndex++;
    updateSlider();
  }
});

document.querySelector('.prev').addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateSlider();
  }
});

function updateSlider() {
  slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}
