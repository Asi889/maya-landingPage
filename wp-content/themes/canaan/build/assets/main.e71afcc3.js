import{S as e}from"./vendor.7507a2f8.js";new e(".section3-swiper",{direction:"horizontal",spaceBetween:30,loop:!0,slidesPerView:"auto",pagination:{el:".swiper-pagination"},navigation:{nextEl:".swiper-button-next-section3",prevEl:".swiper-button-prev-section3"},scrollbar:{}}),new e(".logo-swiper-container",{direction:"horizontal",slidesPerView:"4",spaceBetween:30,loop:!0,pagination:{},autoplay:{delay:5e3},navigation:{},scrollbar:{}}),new e(".section2-swiper",{direction:"horizontal",spaceBetween:40,loop:!0,slidesPerView:"auto",pagination:{el:".swiper-pagination"},navigation:{nextEl:".swiper-button-next-section2",prevEl:".swiper-button-prev-section2"},scrollbar:{}});function t(e){return e=e||{},this.nameSpaces={wrapper:e.wrapper||".parallax",layers:e.layers||".parallax-layer",deep:e.deep||"data-parallax-deep"},this.init=function(){for(var e=this,t=document.querySelectorAll(this.nameSpaces.wrapper),n=0;n<t.length;n++)!function(n){t[n].addEventListener("mousemove",(function(o){for(var i,r,a,l,s,c=o.clientX,d=o.clientY,u=t[n].querySelectorAll(e.nameSpaces.layers),p=0;p<u.length;p++)r=void 0,a=void 0,l=void 0,s=void 0,r=u[i=p].getAttribute(e.nameSpaces.deep),a=u[i].getAttribute("data-parallax-disallow"),l=a&&"x"===a?0:c/r,s=a&&"y"===a?0:d/r,a&&"both"===a||(u[i].style.transform="translateX("+l+"%) translateY("+s+"%)")}))}(n)},this.init(),this}window.addEventListener("load",(function(){document.documentElement.style.setProperty("--full-height",`${window.innerHeight}px`);new ResizeObserver((e=>document.documentElement.style.setProperty("--full-height",`${window.innerHeight}px`))).observe(document.body)})),window.addEventListener("DOMContentLoaded",(function(){let e=document.querySelector("form");e&&function(e){console.log(e);let t=document.querySelector(".message_box");const n=document.querySelector(".lp_section8"),o=document.querySelector(".section8-form-message");e.addEventListener("submit",(function(i){var r;i.preventDefault();const a={action:"contactus",status:null==(r=document.querySelector('input[name="look_for_job_education"]:checked'))?void 0:r.value};for(let t=0;t<e.elements.length;t++){const n=e.elements[t];a[n.name]=n.value}console.log(a),fetch(__mainData.ajaxUrl,{method:"POST",body:new URLSearchParams(a)}).then((function(e){return e.ok?e.json():Promise.reject(e)})).then((function(e){if("fail"===e.status)return t.innerHTML='<h2 class="text-2xl">המייל שהזנת לא תקין בום!</h2>';n.style.display="none",o.style.display="block",console.log(e)})).catch((function(e){console.warn(e)}))}))}(e)})),window.addEventListener("load",(function(){new t}));(()=>{const e=document.querySelectorAll(".have-link-js");console.log(e),window.onscroll=()=>{document.body.scrollTop,e.forEach((e=>{if(n(e)){const t=e.id;t&&document.querySelector(`a[href*=${t}`).classList.add("active")}}))}})();var n=function(e){var t=e.getBoundingClientRect();return t.top>=0&&t.left>=0&&t.bottom<=(window.innerHeight||document.documentElement.clientHeight)&&t.right<=(window.innerWidth||document.documentElement.clientWidth)};
