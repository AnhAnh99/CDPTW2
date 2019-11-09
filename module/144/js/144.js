var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  interval: 1000 ,  
  navigation: {
    nextEl: '.owl-prev',
    prevEl: '.owl-next',
  },
});