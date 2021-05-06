import 'vite/dynamic-import-polyfill'
import '../css/tailwind.css';
import '../css/cmp.css';
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