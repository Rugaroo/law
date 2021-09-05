const header = document.querySelector('.wide-container');
const nav = document.querySelector('.nav');
const burger = document.querySelector('.burger');
const hamburger = document.querySelector('.hamburger');
const overlay = document.querySelector('.burger-overlay');
const navLink = document.querySelector('.nav-link');

const burgerMenu = function () {
  nav.classList.toggle('burger-nav');
  hamburger.classList.toggle('is-active');
  overlay.classList.toggle('overlay-visible');
  document.body.classList.toggle('lock');
}
const removeBurgerMenu = function () {
  nav.classList.remove('burger-nav');
  hamburger.classList.remove('is-active');
  overlay.classList.remove('overlay-visible');
  document.body.classList.remove('lock');
}
document.querySelector('.burger').addEventListener('click', burgerMenu);
document.querySelector('.burger-overlay').addEventListener('click', burgerMenu);
document.querySelector('.nav-link').addEventListener('click', burgerMenu);

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

$('.c-carousel').slick({
  dots: false,
  infinite: true,
  arrows: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$(".subheader-btn, .about-btn").on('click', function() {
  $(".custom-model-main").addClass('model-open');
}); 
$(".close-btn, .bg-overlay, .popup-btn").click(function(){
  $(".custom-model-main").removeClass('model-open');
});