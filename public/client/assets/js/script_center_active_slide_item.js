var kaSwiper1 = new Swiper ('#ka-swiper1', {
  loop: true,
  pagination: '.swiper-pagination',
  paginationClickable: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  spaceBetween : 5,
  autoHeight: true,
  breakpoints :{
    768:{
      spaceBetweenSlides: 10
    }
  }
});

var kaSwiper2 = new Swiper ('#ka-swiper2', {
  // loop: true,
  pagination: '.swiper-pagination',
  paginationClickable: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  spaceBetween : 0,
  autoHeight: true,
  breakpoints :{
    768:{
      spaceBetweenSlides: 10
    }
  },
  onSlideChangeEnd:function(e){
    kaSwiper2.update(true);
  }
});