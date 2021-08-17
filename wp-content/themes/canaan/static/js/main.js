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


   function navbarfunction() {
            document.getElementById("myNav").style.width = "60%";
            document.querySelector(".close-slide-btn").style.display = "block";
            document.querySelector(".sitcky-footer").style.filter = "blur(8px)";
            document.querySelector(".sitcky-footer").style.backgroundColor = "#948f8f";
        
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
            document.querySelector(".close-slide-btn").style.display = "none";
            document.querySelector(".sitcky-footer").style.filter = "none";
            document.querySelector(".sitcky-footer").style.backgroundColor = "inherit";
        }
        document.querySelector('.toglle-nav-js').addEventListener('click',navbarfunction)
        document.querySelector('.closeNav-js').addEventListener('click',closeNav)

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

// console.log("yellooooooo");



// (function() {
//   // 'use strict';
//   let a= document.getElementsByClassName('scroll-header-links');
//         console.log(a);

//   var section = document.querySelectorAll(".sections");
//   var sections = {};
//   var i = 0;

//   Array.prototype.forEach.call(section, function(e) {
//     sections[e.id] = e.offsetTop;
//   });
//   console.log("hehehehehhe");
//   var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
//   console.log(scrollPosition);
//   window.onscroll = function() {
//     var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
//     // console.log(scrollPosition);

//     for (i in sections) {
//       if (sections[i] <= scrollPosition) {
//         let a= document.getElementsByClassName('scroll-header-links');
//         console.log(a);
//         a.setAttribute('class', ' ');
//         let b = document.getElementsByClassName('hd_navlinks')
//         b.href += i ;
//         b.setAttribute('class', 'scroll-header-links');

//         // let b = document.querySelector('a[href*=' + i + ']')
//         // b.setAttribute('class', 'scroll-header-links');
//       }
//     }
//   };
// })();

const spyScrolling = ( ) => {
  const sections = document.querySelectorAll( '.have-link-js' );
  
  window.onscroll = ( ) => {
    const scrollPos = document.body.scrollTop;
    // if(scrollPos >= 580){
    //   console.log("at section 2");
    // }
    // console.log(scrollPos);
    sections.forEach(section =>{

      if ( isInViewport(section) ) {
        
        const id = section.id;
        if(id){
          document.querySelector( `a[href*=${ id }` ).classList.add( 'active' );

        }
        //   document.querySelector( '.hd_navlinks' ).classList.remove( 'active' );if
        //   document.getElementById( 'firstlink' ).classList.remove( 'scroll-header-links' );
        }
    })

  //   for ( let s in sections )
  //   if (sections[s] && isInViewport(sections[s]) ) {
  //     // const id = sections[s].id;
  //     //   document.querySelector( '.hd_navlinks' ).classList.remove( 'active' );
  //     //   document.querySelector( `a[href*=${ id }]` )?.parentNode.classList.add( 'active' );
  //     //   document.getElementById( 'firstlink' ).classList.remove( 'scroll-header-links' );
  //     }
  } 
}

spyScrolling( );
var isInViewport = function (elem) {

  var bounding = elem.getBoundingClientRect();
  return (
      bounding.top >= 0 &&
      bounding.left >= 0 &&
      bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};