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

function Parallax(options) {
  options = options || {};
  this.nameSpaces = {
      wrapper: options.wrapper || '.parallax',
      layers: options.layers || '.parallax-layer',
      deep: options.deep || 'data-parallax-deep'
  };
  this.init = function() {
      var self = this,
          parallaxWrappers = document.querySelectorAll(this.nameSpaces.wrapper);
      for (var i = 0; i < parallaxWrappers.length; i++) {
          (function(i) {
              parallaxWrappers[i].addEventListener('mousemove', function(e) {
                  var x = e.clientX,
                      y = e.clientY,
                      layers = parallaxWrappers[i].querySelectorAll(self.nameSpaces.layers);
                  for (var j = 0; j < layers.length; j++) {
                      (function(j) {
                          var deep = layers[j].getAttribute(self.nameSpaces.deep),
                              disallow = layers[j].getAttribute('data-parallax-disallow'),
                              itemX = (disallow && disallow === 'x') ? 0 : x / deep,
                              itemY = (disallow && disallow === 'y') ? 0 : y / deep;
                          if (disallow && disallow === 'both') return;
                          layers[j].style.transform = 'translateX(' + itemX + '%) translateY(' + itemY + '%)';
                      })(j);
                  }
              })
          })(i);
      }
  };
  this.init();
  return this;
}

window.addEventListener('load', function() {
  new Parallax();
});