
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

const section3swiper = new Swiper('.section3-swiper', {
  // Optional parameters
  direction: 'horizontal',
  spaceBetween: 30,
  loop: true,
  slidesPerView: 'auto',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-section3',
    prevEl: '.swiper-button-prev-section3',
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

const section2swiper = new Swiper('.section2-swiper', {
  // Optional parameters
  // cssMode: true,
  direction: 'horizontal',
  spaceBetween: 40,
  loop: true,
  slidesPerView: 'auto',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    // el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-section2',
    prevEl: '.swiper-button-prev-section2',
  },

  

  // And if we need scrollbar
  scrollbar: {
    // el: '.swiper-scrollbar',
  },
});

