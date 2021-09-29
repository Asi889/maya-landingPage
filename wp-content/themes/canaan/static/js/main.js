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
// import Swiper from 'swiper';
// import 'swiper/swiper-bundle.css';
// Swiper.use([Navigation]);

// import './cross-site/images'

const components = [
  // {
  //   Class: ScrollNav,
  //   selector: 'html',
  //   options: {},
  // },
];


window.addEventListener('load', function () {

  changePlacheholder()
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
          console.log("shoes");
            document.getElementById("myNav").style.width = "0%";
            document.querySelector(".close-slide-btn").style.display = "none";
            document.querySelector(".sitcky-footer").style.filter = "none";
            document.querySelector(".sitcky-footer").style.backgroundColor = "inherit";
        }
        document.querySelector(".toglle-nav-js").addEventListener('click',navbarfunction)
        document.querySelector(".closeNav-js").addEventListener('click',closeNav)

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


var isInViewport = function (elem) {

  var bounding = elem.getBoundingClientRect();
  return (
      bounding.top >= 0 &&
      bounding.left >= 0 &&
      bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

const spyScrolling = ( ) => {
  const sections = document.querySelectorAll( '.navlinks' );
  
  window.onscroll = ( ) => {
    const scrollPos = document.body.scrollTop;
    // if(scrollPos >= 580){
    //   console.log("at section 2");
    // }
    // console.log(scrollPos);
    sections.forEach(section =>{

      if ( isInViewport(section) ) {
        console.log("gigi");
        
        const id = section.id;
        if(id){
          document.querySelector( `a[href*=${ id }` ).classList.add( 'active' );

        }
          // document.querySelector( '.hd_navlinks' ).classList.remove( 'active' );
          // document.getElementById( 'firstlink' ).classList.remove( 'scroll-header-links' );
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

// spyScrolling( );

//////////////////////////////////////////////////////////////////////////////////////



const spyScrolling1 = ( ) => {
  const sections = document.querySelectorAll( '.sections' );

  window.onscroll = ( ) => {
    const scrollPos = document.documentElement.scrollTop || document.body.scrollTop;

    for ( let s in sections )
      if ( sections.hasOwnProperty( s ) && sections[ s ].offsetTop <= scrollPos ) {
        const id = sections[ s ].id;
        console.log(id);
        document.querySelector( '.scroll-header-links' ).remove( 'scroll-header-links' );
        document.querySelector( `a[href*=${ id }]` ).add( 'scroll-header-links' );
      }
  }  
}
// spyScrolling1();

///////////////////////////////////////

// window.onscroll = (()=> {
//   let mainSection = document.querySelectorAll('.sections');
//   console.log(mainSection);

//   mainSection.forEach((v,i)=> {
//     let rect = v.getBoundingClientRect().y
//     if(rect < window.innerHeight-200){
//       menuSection.forEach(v=> v.classList.remove('scroll-header-links'))
//       menuSection[i].classList.add('scroll-header-links')
//     }else{
//       console.log("buho");
//     }
//   })
// })




function changePlacheholder() {

  function togglePlaceholder(e) {
    console.log(e.target.value);
    const input = document.querySelector('.lp_sec8_inputs');
    input.placeholder = e.target.value =='looking' ? 'שם מלא': ' שם הארגון'
  }
  const radios = document.querySelectorAll('input[type=radio][name="look_for_job_education"]');
  radios.forEach(radio => radio.addEventListener('change', togglePlaceholder));
}