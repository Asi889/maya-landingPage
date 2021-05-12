import 'vite/dynamic-import-polyfill'
import '../css/tailwind.css';
import '../css/cmp.css';
import '../css/section1/section-1-style.css';
import '../css/section2/section-2-style.css';
import '../css/section3/section-3-style.css';
import '../css/section4/section-4-style.css';
import '../css/section5/section-5-style.css';
import '../css/section6/section-6-style.css';
import '../css/section7/section-7-style.css';
import '../css/section8/section-8-style.css';
import '../css/navbar/navbar-style.css';
import './swiper'
import { formfunction } from './form';

// import './cross-site/images'

const components = [
  // {
  //   Class: ScrollNav,
  //   selector: 'html',
  //   options: {},
  // },
];


window.addEventListener('load', function () {
  document.documentElement.style.setProperty('--full-height', `${window.innerHeight}px`);
  // create an Observer instance
  const resizeObserver = new ResizeObserver(entries =>
    document.documentElement.style.setProperty('--full-height', `${window.innerHeight}px`)
  );
  // start observing a DOM node
  resizeObserver.observe(document.body);

});

window.addEventListener('DOMContentLoaded', function () {
  let form = document.querySelector('form');
  if (form) {
    
    formfunction(form)
  }
});