import Swiper, { Navigation, Pagination ,Autoplay } from 'swiper';
import 'swiper/swiper-bundle.css';
Swiper.use([Navigation, Pagination, Autoplay]);
const sec3swiper = new Swiper('.sec3swiper', {
  observer: true,
  observeParents: true,
  parallax: true,
  direction: 'horizontal',
  spaceBetween: 30,
  loop: true,
  slidesPerView: 1,
  autoplay:true,

  autoplay: {
    delay: 2500,
    // disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: '.swiper-button-next-section3',
    prevEl: '.swiper-button-prev-section3',
  },
})
console.log(sec3swiper);



const logoswiper = new Swiper('.logo-swiper-container', {
  direction: 'horizontal',
  slidesPerView: '4',
  spaceBetween: 30,
  loop: true,

  // If we need pagination
  pagination: {
    // el: '.swiper-pagination',
    // el: '.swiper-pagination',
  },

  //auto play
  autoplay: {
    delay: 5000,
  },

  // Navigation arrows
  navigation: {
    // nextEl: '.swiper-button-next',
    // prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    // el: '.swiper-scrollbar',
  },
});

const section2swiper = new Swiper('.section2-swiper', {
  observer: true,
  observeParents: true,
  parallax: true,
  direction: 'horizontal',
  spaceBetween: 40,
  loop: true,
  slidesPerView: 1,

  
  navigation: {
    nextEl: '.swiper-button-next-section2',
    prevEl: '.swiper-button-prev-section2',
  },

  pagination: {
    el: '.swiper-pagination',
  },

});

