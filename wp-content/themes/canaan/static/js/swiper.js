
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

const section2swiper = new Swiper('.section2-swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    // el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  

  // And if we need scrollbar
  scrollbar: {
    // el: '.swiper-scrollbar',
  },
});


const logoswiper = new Swiper('.logo-swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 'auto',
  spaceBetween: 30,
  loop: true,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    // el: '.swiper-pagination',
  },

  //auto play
  autoplay: {
    delay: 5000,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    // el: '.swiper-scrollbar',
  },
});

