# Hello Theme
## Download, extract and rename to hello-theme

Front-page.php file removed totally, now just set a page as front page from wp-admin settings and use a template for custom design.

## Dependecies
- Using Bootstrap 5.1.3
- Font-awesome 4.7
- jQuery 3.5
- Swiper js


## Items imported in style.scss
- functions
- variables
- mixins
- utilities
- reboot
- images  
- containers
- grid
- transitions
- nav
- navbar
 -utilities/api




## Initialize Wow Js
```
new WOW().init();
```
## Swiper JS HTML layout
```
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    <div class="swiper-slide">Slide 4</div>
    <div class="swiper-slide">Slide 5</div>
    <div class="swiper-slide">Slide 6</div>
    <div class="swiper-slide">Slide 7</div>
    <div class="swiper-slide">Slide 8</div>
    <div class="swiper-slide">Slide 9</div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
```

## Swiper js options
```
var swiperTestimonial = new Swiper("#testimonialSlider", {
  slidesPerView: 1,
  effect: "fade",
  loop: true,
  autoplay: {
      delay: 5000,
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  mousewheel: true,
  keyboard: true,
  breakpoints: {
    810:{
      slidesPerView: 2,
    }
  }
});
```
